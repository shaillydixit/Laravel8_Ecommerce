<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function AllSubCategory()
    {
        $categories = Category::orderBy('category_name', 'DESC')->get();
        $subcategory = SubCategory::latest()->get();
        return view('backend.subcategory.subcategory_view', compact('categories', 'subcategory'));
    }

    public function StoreSubCategory(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_name' => 'required',
        ]);
        SubCategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
        ]);

        $notification = array(
            'message' => 'Subcategory inserted successfully',
            'alert-type' => 'info',
        );

        return redirect()->back()->with($notification);
    }

    public function EditSubCategory($id)
    {
        $categories = Category::orderBy('category_name', 'DESC')->get();
        $subcategory = SubCategory::findOrFail($id);
        return view('backend.subcategory.subcategory_edit', compact('categories', 'subcategory'));
    }

    public function UpdateSubCategory(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_name' => 'required',
        ]);
        SubCategory::findOrFail($id)->update([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
        ]);

        $notification = array(
            'message' => 'Subcategory updated successfully',
            'alert-type' => 'info',
        );

        return redirect()->route('all.subcategory')->with($notification);
    }

    public function DeleteSubCategory($id)
    {
        SubCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Subcategory deleted successfully',
            'alert-type' => 'warning',
        );

        return redirect()->back()->with($notification);
    }
}
