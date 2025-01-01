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
}
