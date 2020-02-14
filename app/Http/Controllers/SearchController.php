<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($tag='india')
    {
        $tagData = curlInstagramTagData($tag);
        if(!empty($tagData->graphql->hashtag))
        {
             $hashtag = $tagData->graphql->hashtag;
             $edge_hashtag_to_media = $hashtag->edge_hashtag_to_media;
             $media_count = $hashtag->edge_hashtag_to_media->count;
        }else{
            $tags = array();
            $edge_hashtag_to_media = array();
            $media_count = 0;
        }
        
        $data = array('tags' => $tagData, 'tagName' => $tag, 'mediaCount' => $media_count, 'edge_hashtag_to_media' => $edge_hashtag_to_media);
        return view('search.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'tag' => 'required'
            ]);
            
            $tagData = curlInstagramTagData(request(['title']));
            //$post = Post::create(request(['title', 'description', 'status', 'createby']));
            
            return redirect()->route('searchs.index',['tag' => request(['title'])]);
                        //->with('success','Post added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
