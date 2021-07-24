<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\MultiImage;
use App\Models\Product;
use App\Models\SubSubCategory;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function AddProduct()
    {
        $categories = Category::latest()->get();
        $brand = Brand::latest()->get();
        return view('backend.product.product_add', compact('categories', 'brand'));
    }

    public function StoreProduct(Request $request)
    {
        $image = $request->file('product_thumbnail');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(917, 1000)->save('upload/thumbnail' . $name_gen);
        $save_img = 'upload/thumbnail' . $name_gen;


        $product_id = Product::insertGetId([
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_id' => $request->subsubcategory_id,
            'product_name' => $request->product_name,
            'product_slug' => strtolower(str_replace(' ', '-', $request->product_name)),
            'product_code' => $request->product_code,
            'product_quantity' => $request->product_quantity,
            'product_tags' => $request->product_tags,
            'product_size' => $request->product_size,
            'product_color' => $request->product_color,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'special_offer' => $request->special_offer,
            'special_deals' => $request->special_deals,
            'product_thumbnail' => $save_img,
            'status' => 1,
            'created_at' => carbon::now()
        ]);

        $images = $request->file('multi_image');
        foreach ($images as $img) {
            $name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            Image::make($img)->resize(917, 1000)->save('upload/multi_images' . $name);
            $save_imgs = 'upload/multi_images' . $name;

            MultiImage::insert([
                'product_id' => $product_id,
                'photo_name' => $save_imgs,
                'created_at' => carbon::now()
            ]);
        }
        $notification = array(
            'message' => 'Product Added Successfully!',
            'alert' => 'info'
        );
        return redirect()->route('manage.product')->with($notification);
    }

    public function GetBrand($category_id)
    {
        $brands = Brand::where('category_id', $category_id)->orderBy('brand_id', 'ASC')->get();
        return json_encode($brands);
    }

    public function ManageProduct()
    {
        return view('backend.product.manage_product');
    }
}
