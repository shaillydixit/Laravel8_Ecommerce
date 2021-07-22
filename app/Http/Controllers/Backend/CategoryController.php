<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCategory()
    {
        $category = Category::latest()->get();
        return view('backend.category.category_view', compact('category'));
    }

    public function StoreCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'category_icon' => 'required'
        ]);

        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
            'category_icon' => $request->category_icon
        ]);

        $notification = array(
            'message' => 'category added successfully',
            'alert-type' => 'succsess'
        );

        return redirect()->back()->with($notification);
    }

    public function EditCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.category_edit', compact('category'));
    }

    public function UpdateCategory(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
            'category_icon' => 'required'
        ]);
        Category::findOrFail($id)->update([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
            'category_icon' => $request->category_icon
        ]);
        $notification = array(
            'message' => 'category updated successfully',
            'alert-type' => 'succsess'
        );

        return redirect()->route('all.category')->with($notification);
    }

    public function deleteCategory($id)
    {
        Category::findOrFail($id)->delete();
        $notification = array(
            'message' => 'category delete successfully',
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($notification);
    }
}
