<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;


class CategoryController extends Controller
{

    public function index()
    {
        return CategoryResource::collection(Category::select('id', 'name')->get());

    }


    public function store(StoreCategoryRequest $request)
    {
        // $category = Category::create($request->validated() + ['user_id' => auth()->id()]);
        $category = auth()->user()->categories()->create($request->validated());

        return new CategoryResource($category);
    }


    // public function show(Category $category)
    // {
    //     // return Category::findOrFail($category->id);
    //     return new CategoryResource($category);
    // }

    public function show($id)
    {
        $category = Category::find($id);
        if (!$category){
            abort(404,'Category not found');
        }
        return new CategoryResource($category);
    }



    // public function update(StoreCategoryRequest $request, $id)
    // {
    //     $category = Category::find($id);
    //     if (!$category){
    //         abort(404,'Category not found');
    //     }
        // $category->update($request->validated());
        // return new CategoryResource($category);
    // }


    public function update(StoreCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return new CategoryResource($category);
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return response()->noContent();
    }
}
