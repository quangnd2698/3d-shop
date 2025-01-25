<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\ProductNCategory;
use Illuminate\Http\Request;

class CrawlController extends Controller
{
    //
    function createSlug($title) {
        // Convert to lowercase
        $slug = strtolower($title);
    
        // Remove special characters
        $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    
        // Replace spaces and consecutive dashes with a single dash
        $slug = preg_replace('/[\s-]+/', '-', $slug);
    
        // Trim dashes from the beginning and end
        $slug = trim($slug, '-');
    
        return $slug;
    }
    

    public function crawlProducts(Request $request) {
        $products = json_decode(file_get_contents(public_path('products.json')), 1);
        foreach ($products as $key => $product) {
            $slug = $this->createSlug($product['title']);
            $existProduct = Product::where('slug', $slug)->first();
            if ($existProduct) {
                continue;
            }
            $productInsert = [
                'name' => $product['title'],
                'slug' => $slug,
                'description' => $product['description'],
                'origin_price' => $product['basePrice'],
                'sale_price' => 50000,
                'crawl_url' => $product['crawl_url']
            ];
            $newProduct = Product::create($productInsert);
            if ($newProduct) {
                $productCategories = array_values($product['categories']);
                $parentCategory = [];
                foreach ($productCategories as $catIdx => $category) {
                    if (!empty($category['id'])) {
                        $existCategory = Category::where('crawl_id', $category['id'])->first();
                        if (!$existCategory) {
                            $categoryInsert = [
                                'name' => $category['name'],
                                'slug' => $category['slugs']['forRouteWithoutId'],
                                'crawl_id' => $category['id'],
                                'is_hidden_menu' => 0,
                                'type' => 'digital'
                            ];
                            if (!empty($parentCategory))
                            $categoryInsert['parent_id'] = $parentCategory['id'];
                            $parentCategory = Category::create($categoryInsert);
                        } else {
                            $parentCategory = $existCategory;
                        }
                        
                        $productNCategoryInsert = [
                            'product_id' => $newProduct->id,
                            'category_id' => $parentCategory->id,
                            'is_parent' => !empty($productCategories[$catIdx + 1]) ? 1 : 0
                        ];
                        ProductNCategory::create($productNCategoryInsert);
                    }
                }
                $productGalleries = $product['galary'];
                foreach ($productGalleries as $gallery) {
                    $galleryInsert = [
                        'product_id' => $newProduct->id,
                        'small_image_url' => $gallery['image160pxUrl'],
                        'medium_image_url' => $gallery['image400pxUrl'],
                        'origin_image_url' => $gallery['imageOriginalUrl']
                    ];
                    Gallery::create($galleryInsert);
                }
            }
        }
        return response()->json(['message' => 'Crawl products successfully']);
    }

    public function buildRevenue(Request $request) {

        $emails = [
            'erlingbrauthaaland884@gmail.com',
            'angelmartincorrea745@gmail.com',
            'morenomarcosllorente@gmail.com',
            'antonimorata123@gmail.com',
            'tonystark987abc@gmail.com',
            'pablobarriosrivas202@gmail.com',
            'gabrielfernandez92abc@hotmail.com',
            'alexwarker1994@gmail.com',
            'jakubmoder345@hotmail.com',
            'imarisamuels688@hotmail.com',
            'asmirbegovic123@hotmail.com',
            'harrisonarmstrong298@hotmail.com',
            'romandixon325@hotmail.com',
            'margaridacorceiro465@hotmail.com',
            'simonadingra23@hotmail.com',
            'aexanderzverev97@hotmail.com',
            'sekofofana95@hotmail.com',
            'ryangravenberch202@hotmail.com',
            'danzellgravenberch266@hotmail.com',
            'archiegray348@hotmail.com',
            'Riblackmore123@hotmail.com',
            'nickybyrne89@hotmail.com',
            'janneschaffer492@hotmail.com',
            'davidraya324@hotmail.com',
            'aaronramsdaleabc@hotmail.com',
            'daniolmo123@hotmail.com',
            'mikelmerino213@hotmail.com',
            'janoblak1993@hotmail.com',
            'thomaslemar1995@hotmail.com',
            'alvaromorata1991@hotmail.com',
            'iliaskostis2003@hotmail.com',
            'angelcorrea321@hotmail.com',
            'marcoslorente688@hotmail.com',
            'borjagarces123@gmail.com',
            'sekofofana246@gmail.com',
            'simonading866@gmail.com'
        ];

        $sellerRevenues = $this->currentRevenues($emails);
        $maxPayments = 1500;
        $currentPayment = array_sum(array_column($sellerRevenues, 'total_payment'));

        $revenues = \DB::table('revenue')
                    ->join('seller', 'revenue.seller_token', '=', 'seller.seller_token')
                    ->where('seller.status', 'PENDING')
                    ->select('revenue.seller_token', 'revenue.status', 'revenue.product_id', 'revenue.payment', 'revenue.date', 'revenue.available_date', 'revenue.id')
                    // ->orderBy('revenue.product_id', 'ASC')
                    ->get()->groupBy('seller_token');
        $availableRevenues = [];
        $totalPayment = 0;
        foreach ($revenues as $items) {
            $availableItems = $items->whereIn('status', ['AVAILABLE', 'PENDING'])->sortBy('product_id')->toArray();
            if (count($availableItems) < 1) {
                continue;
            }
            
            foreach ($availableItems as $item) {
                if (empty($item->product_id)) {
                    continue;
                }
                $invalidItem = $items->where('product_id', $item->product_id)
                                    ->whereIn('status', ['PAID', 'PREPARE'])->first();
                if (!$invalidItem) {
                    $availableRevenues[] = (array) $item;
                    if ($item->status == 'AVAILABLE') {
                        $totalPayment += (float) $item->payment;
                    }
                }
            }
            if ($totalPayment >= ($maxPayments - $currentPayment)) {
                break;
            }
        }

        $sellerNewAddRevenues = [];
        foreach ($sellerRevenues as $sellerToken => $seller) {
            if ($seller['total_payment'] >= ($maxPayments / count($sellerRevenues))) {
                continue;
            } else {
                $sellerNewAddRevenues[$sellerToken] = $seller;
            }
        }
        $groupedPayments = $this->buildNewRevenueForSeller($sellerNewAddRevenues, $availableRevenues);
        file_put_contents(public_path('grouped_payments.json'), json_encode($groupedPayments));
        return response()->json(['message' => 'Build revenue successfully']);
    }


    private function buildNewRevenueForSeller($sellers, $availableRevenues) {
        $minPayment = 25;
        $totalSellers = count($sellers);
        $totalNewPayments = array_sum(array_column($availableRevenues, 'payment'));
        $currentPayment = array_sum(array_column($sellers, 'total_payment'));
        $totalPayment = $totalNewPayments + $currentPayment;
        $avgPayment = round($totalPayment / $totalSellers);

        // $range = 10;
        // $revenueRange = $range * $totalSellers;
        // $randoms = $this->distributePayments($revenueRange, $totalSellers, 5);
        
        $groupedPayments = [];
        $usedRevenues = [];
        $index = 0;
        
        foreach ($sellers as $sellerToken => $seller) {
            $break = false;
            $currentSellerPayment = $seller['total_payment'] ?? 0;
            $needPayment = $avgPayment - $currentSellerPayment;
            $needPayment += rand(-6, 6);
            $index++;
            if ($needPayment <= 0) {
                continue;
            }

            $groupedPayments[$sellerToken] = [
                'seller_token' => $sellerToken,
                'seller_id' => $seller['seller_id'],
                'current_payment' => $currentSellerPayment,
                'need_payment' => $needPayment,
                'new_revenues' => []
            ];

            $sumItemPayment = 0;

            $prepareProductId = '';
            foreach ($availableRevenues as $item) {

                if ($break &&  $prepareProductId != $item['product_id']) {
                    break;
                }

                if (in_array($item['id'], $usedRevenues)) {
                    continue;
                }
                

                $groupedPayments[$sellerToken]['new_revenues'][] = $item;
                $sumItemPayment += $item['payment'];
                $usedRevenues[] = $item['id'];
               

                if ($sumItemPayment >= $needPayment) {
                    $break = true;
                }

                $prepareProductId = $item['product_id'];
            }

            $groupedPayments[$sellerToken]['total_payment'] = $sumItemPayment + $currentSellerPayment;
        }
        return $groupedPayments;
    }



    private function currentRevenues($emails) {
        $sellers = \DB::table('seller')
                    ->whereIn('email', $emails)
                    ->select('seller_token', 'id')
                    ->get();
        $items = [];
        foreach ($sellers as $item) {
            $availableRevenues = \DB::table('revenue')
                                ->where('seller_token', $item->seller_token)
                                ->where('status', 'AVAILABLE')->sum('payment');
            $items[$item->seller_token] = [
                'seller_token' => $item->seller_token,
                'seller_id' => $item->id,
                'total_payment' => min(65, ($availableRevenues ?? 0))
            ];
        }
        return $items;
    }

    private function distributePayments($totalAmount, $numSellers, $deviation) {
        $minPayment = ($totalAmount / $numSellers) - $deviation;
        $maxPayment = ($totalAmount / $numSellers) + $deviation;
        $payments = [];
        $currentSum = 0;
    
        for ($i = 0; $i < $numSellers; $i++) {
            if ($i == $numSellers - 1) {
                $payment = $totalAmount - $currentSum;
            } else {
                $payment = rand($minPayment * 100, $maxPayment * 100) / 100;
            }
            $payments[] = $payment;
            $currentSum += $payment;
        }
    
        return $payments;
    }


    public function rebuildSql() {
        $sqls = [];
        $groupedPayments = json_decode(file_get_contents(public_path('grouped_payments.json')), 1);

        foreach ($groupedPayments as $sellerToken => $revenues) {
            $sql = "UPDATE revenue SET seller_token = '{$sellerToken}' , seller_id = {$revenues['seller_id']} WHERE id IN (";
            $ids = array_column($revenues['new_revenues'], 'id');
            $sql .= implode(',', $ids) . ");";
            $sqls[] = $sql;
        }

        return $sqls;
    }

    public function updateProductData() {
        set_time_limit(0);
        $groupedPayments = json_decode(file_get_contents(public_path('grouped_payments.json')), 1);
        $appUrl = 'https://api.printerval.com/';
        $productIds = [];
        foreach ($groupedPayments as $sellerToken => $revenues) {
            foreach ($revenues['new_revenues'] as $revenue) {
                if (empty($productIds[$revenue['product_id']])) {
                    $productIds[$revenue['product_id']] = [];
                }

                $productIds[$revenue['product_id']][] = $sellerToken;
            }
        
            $url = 'https://api.printerval.com/user?filters=seller_token=' . $sellerToken;
            $response = json_decode($this->callAPI($url),1);
            if (!empty($response['result'][0]) && !empty($response['result'][0]['id'])) {
                $actorId = $response['result'][0]['id'];
                $oldData = json_decode(file_get_contents(public_path('processing.json')), 1);
                if (!empty($revenues['new_revenues'])) {
                    $productIds = array_values(array_unique(array_column($revenues['new_revenues'], 'product_id')));
                    foreach ($productIds as $productId) {
                        $key =  $sellerToken . '-' . $productId;
                        if (!empty($oldData) && !empty($oldData[$key])) {
                            continue;
                        }
                        $this->updateInfo($productId, $actorId, $appUrl);
                        $this->storeDesignData($sellerToken, $productId);
                        $logData = [
                            'productId' => $productId,
                            'sellerToken' => $sellerToken,
                        ];
                        \Log::info('processing:'. $sellerToken . '-' . $productId);
                        $oldData[$key] = $logData;
                        file_put_contents(public_path('processing.json'), json_encode($oldData));
                        sleep(15);
                    }
                }
            }
        }
        return response()->json(['message' => 'Update product data successfully']);
    }

    private function updateInfo($productId, $actorId, $appUrl) {
        $productUpdate = $appUrl . 'product/' . $productId . '?service_token=megaads@123&actor_id='. $actorId;
        $method = 'PATCH';
        $productRes = json_decode($this->callAPI($productUpdate, $method, []), true);
        if (!empty($productRes['result'])) {
            $productNUserId = $this->getProductNUser($productId, $appUrl);
            if (!empty($productNUserId)) {
                $productNUserUpdate = $appUrl . 'product_n_user/' . $productNUserId . '?service_token=megaads@123&user_id='. $actorId;
                $method = 'PATCH';
                $productNUserRes = json_decode($this->callAPI($productNUserUpdate, $method, []), true);
                if (!empty($productNUserRes['result'])) {
                    echo 'done-' . $productId . ' ';
                } else {
                    echo 'product n error';
                }
            }
        } else {
            echo 'product error';
        }
    }

    private function storeDesignData($sellerToken, $productId) {

        $seller = \DB::table('seller')
                    ->where('seller_token', $sellerToken)
                    ->first();

        if (!empty($seller->connect_api_token)) {
            \Log::info('store design');
            $appUrl = 'https://api.printerval.com/';
            $productNDesign = $appUrl . 'product_n_design?filters=product_id=' . $productId;
            $response = json_decode($this->callAPI($productNDesign), true);
            if (!empty($response['result'])) {
                \Log::info("message: get product n design");
                $productNDesign = $response['result'][0];
                if (!empty($productNDesign) && !empty($productNDesign['design_id'])) {
                    \Log::info('get design:'. $productNDesign['design_id']);
                    $designId = $productNDesign['design_id'];
                    $designUrl = $appUrl . 'design/' . $designId . '?service_token=megaads@123';
                    $designRes = json_decode($this->callAPI($designUrl), true);
                    if (!empty($designRes['result'])) {
                        $design = $designRes['result'];
                        \Log::info('get design success:'. $design['id']);
                        $this->storeDesign($seller->connect_api_token, $design);
                    } else {
                        \Log::info('design error');
                    }
                } else {
                    \Log::info('product n design error');
                }
            } else {
                echo 'product n design error';
            }
        }

    }

    private function storeDesign($connectApi, $design) {
        $tags = $this->getTagsFromTitle($design['name']);
        $params = [
            'title' => $design['name'],
            'image_url' => $design['image_url'],
            'tags' => $tags
        ];

        \Log::info('call store design:'. $design['id']);
        $uploadUrl = 'https://seller.printerval.com/api/store/design';
        $method = 'POST';
        $data = [
            'title' => $params['title'],
            'image_url' => $params['image_url'],
            'tags' => implode(',', $params['tags'])
        ];
    
        $response = $this->callAPI($uploadUrl, $method, $data, [
            'connect-api-token: ' . $connectApi,
            'Content-Type:application/json'
        ]);
    }

    private function getTagsFromTitle($title) {
        // Remove any special characters from the title
        $cleanTitle = preg_replace('/[^a-zA-Z0-9\s]/', '', $title);
    
        // Convert the title to lowercase
        $lowercaseTitle = strtolower($cleanTitle);
    
        // Split the title into an array of words
        $words = explode(' ', $lowercaseTitle);
    
        // Remove common words and return the remaining words as tags
        $commonWords = ['the', 'and', 'of', 'in', 'to', 'a', 'is'];
        $tags = array_diff($words, $commonWords);
    
        if (count($tags) > 5) {
            $tags = array_slice($tags, 0, 5);
        }
        if (count($tags) < 3) {
            $tags[] = 'trending';
            $tags[] = 'popular';
        }
    
        return $tags;
    }
    
    
    private function getProductNUser($productId, $appUrl) {
        $productNUserId = '';
        $url = $appUrl . 'product_n_user?filters=product_id=' . $productId;
        $method = 'GET';
        $response = json_decode($this->callAPI($url, $method, []), true);
        if (!empty($response['result'])) {
            if ($response['result'][0]['product_id'] == $productId) {
                $productNUserId = $response['result'][0]['id'];
    
            }
        }
        return $productNUserId;
    }
    
    private function callAPI($url, $method = 'GET', $data = array(), $headers = array()) {
        $curl = curl_init();
    
        // Set the request URL
        curl_setopt($curl, CURLOPT_URL, $url);
    
        // Set the request method
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    
        // Set the request data
        if ($method == 'POST' || $method == 'PUT' || $method == 'PATCH') {
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        }
    
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
        // Set the response format
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
        // Execute the request
        $response = curl_exec($curl);
    
        // Close the cURL session
        curl_close($curl);
    
        // Return the response
        return $response;
    }
}
