<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Models\Post;
use App\Models\Attachment;
use DB;
use Hash;

class PostController extends Controller
{
    public function index(){
        
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }
    
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required',
        ]);
        
        $input = $request->all();

        $post = Post::create($input);
        
        return redirect()->route('posts.edit', array('id' => $post->id))
        ->with('success', 'Post has created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $alert="")
    {
        $post = Post::find($id);
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'name' => 'required',
        ]);
        
        $input = $request->all();
        
        $post = Post::find($id);
        $post->update($input);
        
        return redirect()->route('post.edit', array('id' => $post->id))
        ->with('success', 'Post has updated successfully.');
    }

    public function destroy(Request $request, $id){
        Post::find($id)->delete();
        $request->session()->flash('success', 'Post has successfully deleted.');
        return response()
            ->json(['success' => true]);
    }

}
