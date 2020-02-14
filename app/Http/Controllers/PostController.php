<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all(); 
        $data = array('posts' => $posts);
        return view('posts.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate(request(), [
            'title' => 'required|unique:posts',
            'description' => 'required',
            'status' => 'required',
            'createby' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            
        //$imageName = time().'.'.$request->image->extension();  

        if ($files = $request->file('image')) {
           $destinationPath = 'public/image/'; // upload path
           $Image = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $Image);
           $post = new Post;

            $post->title = $request->title;
            $post->description = $request->description;
            $post->image = $Image;
            $post->status = $request->status;
            $post->createby = $request->createby;
            

            $post->save();
        }

            //$post = Post::create(request(['title', 'description', 'status', 'createby','image']));
            
            return redirect()->route('posts.index')
                        ->with('success','Post added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $data = array('post' => $post);
        return view('posts.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $data = array('post' => $post);
        return view('posts.edit')->with($data);
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
         $this->validate(request(), [
            'title' => 'required|unique:posts,title,'.$id,
            'description' => 'required',
            'status' => 'required',
            'createby' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            if ($files = $request->file('image')) {
                $destinationPath = 'public/image/'; // upload path
                $Image = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $Image);
            }else{
                 $Image = '';
            }

            $post = Post::find($id);  // Find the post using model and hold its reference
            $post->title=$request->input('title');
            $post->description=$request->input('description');
            $post->status=$request->input('status');
            $post->createby=$request->input('createby');
            $post->image = $Image;

            $post->save(); 
            
            return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
  
        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }
}
