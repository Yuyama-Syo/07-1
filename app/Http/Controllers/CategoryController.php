<?php
namespace App\Http\Controllers;

use App\posts;
use App\Category;
use App\Http\Requests\PostRequest;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('categories.index')->with(['posts' => $category->getByCategory()]);
    }
    
}