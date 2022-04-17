<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show($slug )
    {
        $category= Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->orderBy('id', 'desc')->paginate(3);

        return view('categories.show', [
            'category' =>$category,
            'posts' =>$posts
        ]);
    }
}
