<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Datatables;

class CategoryController extends Controller
{
    public function category()
    {
        if(request()->ajax()) {
            return datatables()->of(Category::select('*'))
            ->addColumn('action', 'category-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('dashboard.pages.category');
    }

    public function store_category(Request $request)
    {

        $categoryId = $request->id;

        $category   =   Category::updateOrCreate(
                    [
                     'id' => $categoryId
                    ],
                    [
                    'main_category' => $request->main_category,
                    'sub_category' => $request->sub_category,
                    'product_category' => $request->product_category,
                    ]);


        // Set success message in session
    session()->flash('success', 'Category created successfully!');

    // Return a JSON response with the category data and success message
    return response()->json(['status' => 'success', 'category' => $category, 'message' => 'Category created successfully']);
    }

    public function edit_category(Request $request)
    {
        $where = array('id' => $request->id);
        $category  = Category::where($where)->first();

        // Set success message in session
        session()->flash('success', 'Category edit successfully!');
        return Response()->json($category);

    }

    public function destroy_category(Request $request)
    {
        $category = Category::where('id',$request->id)->delete();

        return Response()->json($category);
    }



}
