<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicesPostsRequest;
use App\Http\Requests\ServicesPutsRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostCrudController extends Controller
{

    public function index()
    {
        $posts =  Post::cursorPaginate(5);
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
        $post = Post::findOrFail($id);
        return view('services.show', compact('post'));
    }

    public function edit(Request $request, $id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        return view('services.edit', compact('post', 'categories'));
    }

    public function update(ServicesPutsRequest $request, $id): RedirectResponse
    {

        $post = Post::findOrFail($id);

        if ($request->hasFile('img')) {
            $fileName = time() . '_' . $request->img->getClientOriginalName();
            $filePath = $request->img->storeAs('uploads', $fileName);
            Storage::disk('local')->delete($post->image);
            $post->image = $filePath;
        }

        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->price = $request->price;
        $post->stock = $request->stock;
        $post->save();

        return redirect()->route('services.crud')->with('status', 'Post editado con exito');
    }

    public function destroy($id): RedirectResponse
    {
        $postDelete = Post::findOrFail($id);
        $postDelete->delete();
        return redirect()->route('services.crud')->with('status', 'Post Eliminado con exito');
    }

    public function indexTrashed()
    {
        $countTrashedOnly = Post::onlyTrashed()->count();
        $posts = Post::onlyTrashed()->get();
        return view('services.trashed.index', compact('posts', 'countTrashedOnly'));
    }

    public function trashedAll()
    {

        $countTrashed = Post::onlyTrashed()->count();

        if ($countTrashed == 0) {
            $messageCount = "No se restauro ningun registro";
        } else {
            $messageCount = $countTrashed .  ' Registro restaurado ';
        }
        Post::onlyTrashed()->restore();

        return redirect()->route('services.crud')->with('status', $messageCount);
    }

    public function destroyTrashed($id)
    {

        $i = Post::onlyTrashed()->find($id);
        Storage::disk('local')->delete($i->image);
        $i->forceDelete();
        return redirect()->route('trashed')->with('status', 'Registro eliminado');
    }

    public function recoverTrashed($id)
    {
        Post::onlyTrashed()->find($id)->restore();
        return redirect()->route('trashed')->with('status', 'Registro Recuperado');
    }
}
