<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubSubCategoryController extends Controller
{
    public function AllSubSubCategory()
    {
        $categories = Category::orderBy('category_name', 'ASC')->get();
        $subsubcategory = SubSubCategory::latest()->get();
        // Log::info($subsubcategory);
        return view('backend.subsubcategory.subsubcategory_view', compact('categories', 'subsubcategory'));
    }

    public function GetSubCategory($category_id)
    {
        $subcat = SubCategory::where('category_id', $category_id)->orderBy('subcategory_name', 'ASC')->get();
        return json_encode($subcat);
    }

    public function StoreSubSubCategory(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'subsubcategory_name' => 'required'
        ]);

        SubSubCategory::insert([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_name' => $request->subsubcategory_name,
            'subsubcategory_slug' => strtolower(str_replace(' ', '_', $request->subsubcategory_name)),
        ]);

        $notification = array(
            'message' => 'SubSubCategory Inserted Successfully!',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function EditSubSubCategory($id)
    {
        $categories = Category::orderBy('category_name', 'ASC')->get();
        $subcategories = SubCategory::orderBy('subcategory_name', 'ASC')->get();
        $subsubcategories = SubSubCategory::findOrFail($id);

        return view('backend.subsubcategory.subsubcategory_edit', compact('categories', 'subcategories', 'subsubcategories'));
    }

    public function UpdateSubSubCategory(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'subsubcategory_name' => 'required'
        ]);

        SubSubCategory::findOrFail($id)->update([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_name' => $request->subsubcategory_name,
            'subsubcategory_slug' => strtolower(str_replace(' ', '_', $request->subsubcategory_name)),
        ]);

        $notification = array(
            'message' => 'SubSubCategory Updated Successfully!',
            'alert-type' => 'info'
        );
        return redirect()->route('all.subsubcategory')->with($notification);
    }
    public function DeleteSubSubCategory($id)
    {
        SubSubCategory::findOrFail($id)->delete();
        $notification = array(
            'message' => 'SubSubCategory Deleted Successfully!',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }
}
