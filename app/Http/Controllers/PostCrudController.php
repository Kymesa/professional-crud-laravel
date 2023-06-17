<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicesPostsRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostCrudController extends Controller
{
    public function index(): View
    {
        $posts = Post::all();
        return view('services.Services', compact('posts'));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('services.Create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
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

    public function show($id): View
    {
        $post = Post::find($id);
        return view('services.Show', compact('post'));
    }

    public function edit(Request $request, $id)
    {

        $categories = Category::all();

        $post = Post::find($id);
        // $post->title = $request->title;
        // $post->category_id = $request->category_id;
        // $post->price = $request->price;
        // $post->stock = $request->stock;
        // $post->image = $request->img;
        // $post->save()

        return view('services.Edit', compact('post', 'categories'));
    }
}
