<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicesPostsRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostCrudController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('services.Services', compact('posts'));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('services.Create', compact('categories'));
    }

    public function store(Request $request)
    {

        $fileName = time() . '_' . $request->img->getClientOriginalName();
        $filePath = $request->img->storeAs('uploads', $fileName);
        Post::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $filePath
        ]);
        return redirect()->route('services.crud')->with('status', 'creado con exito el Post');
    }
}
