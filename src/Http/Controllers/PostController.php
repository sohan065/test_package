<?php

namespace Sohan065\Crud\Http\Controllers;

use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Sohan065\Crud\Models\Post;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Sohan065\Crud\Http\Requests\PostCreateRequest;
use Sohan065\Crud\Http\Requests\PostUpdateRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('is_active', true)->get();
        return view('crud::dashboard.pages.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud::dashboard.pages.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostCreateRequest $request)
    {
        $validated = $request->only(['user', 'title', 'text']);

        try {
            $post =  Post::create([
                'user' => $validated['user'],
                'title' => $validated['title'],
                'text' => $validated['text'],
            ]);
        } catch (Exception $e) {
            Log::error($e);
        }
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('crud::dashboard.pages.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $validated = $request->only(['user', 'title', 'text']);
        try {
            Post::where('id', $id)->update([
                'user' => $validated['user'],
                'title' => $validated['title'],
                'text' => $validated['text'],
            ]);
            return redirect()->route('dashboard');
        } catch (Exception $e) {
            log::error($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();
        return redirect()->route('dashboard')->with('success', 'Post status toggled successfully.');
    }
}
