<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicesPostsRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostCrudController extends Controller
{

    public function index(): View
    {
        $posts = Post::all();
        return view('services.index', compact('posts'));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('services.create', compact('categories'));
    }

    public function store(ServicesPostsRequest $request): RedirectResponse
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
        return view('services.show', compact('post'));
    }

    public function edit(Request $request, $id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        return view('services.edit', compact('post', 'categories'));
    }

    public function update(ServicesPostsRequest $request, $id)
    {

        $post = Post::find($id);
        $fileName = time() . '_' . $request->img->getClientOriginalName();
        $filePath = $request->img->storeAs('uploads', $fileName);

        if ($request->img) {
            Storage::disk('local')->delete($post->image);
        }

        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->price = $request->price;
        $post->stock = $request->stock;
        $post->image = $filePath;
        $post->save();

        return redirect()->route('services.crud')->with('status', 'Post editado con exito');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        Post::destroy($id);
        Storage::disk('local')->delete($post->image);
        return redirect()->route('services.crud')->with('status', 'Post Eliminado con exito');
    }
}
