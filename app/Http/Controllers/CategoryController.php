<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        dd(Category::all());
    }
    public function store()
    {
        /* $category = new Category();
        $category->name = "English";
        dd($category->save()); */
        // $data = ['name' => 'level 1', 'category_id' => 4];
        $data = ['name' => 'level 2', 'category_id' => 4];
        dd(Category::create($data));
    }

    public function update($id)
    {
        /* $category =  Category::find($id);
        $category->name = "English123";
        dd($category->save()); */

        $data = ['name' => 'level 22 update'];
        // dd(Category::find($id)->update($data));
        dd(Category::where('category_id', 4)->update($data));
    }

    public function delete($id)
    {
        // dd(Category::destroy($id));
        dd(Category::where('category_id', 4)->delete());
    }
}
