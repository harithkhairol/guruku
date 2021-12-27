<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    public function test()
    {
        return view('test');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validator = $request->validate([
            'post' => 'required',
        ]);

        $post = new Post;

        $post->user_id = Auth::user()->id;
        $post->post = $request->post;

        $post->save();

        return back()->with("success", "You're post has been created successfully!");

    }

    public function storeImage(Request $request)
    {

        $request->validate([
            'uploadImage' => 'required',
            'post' => 'required',
        ]);
 
        $name = time().'.'.request()->uploadImage->getClientOriginalExtension();
    
        $request->uploadImage->move(public_path('img/post'), $name);

        $post = new Post;

        $post->user_id = Auth::user()->id;
        $post->post = $request->post;
        $post->picture = $name;

        $post->save();
    
        return response()->json(['success'=>'Successfully uploaded.']);
        
    }

    public function storeVideo(Request $request)
    {

        $request->validate([
            'uploadVideo' => 'required',
            'post' => 'required',
        ]);
 
        $name = time().'.'.request()->uploadVideo->getClientOriginalExtension();
    
        $request->uploadVideo->move(public_path('video/post'), $name);

        $post = new Post;

        $post->user_id = Auth::user()->id;
        $post->post = $request->post;
        $post->video = $name;

        $post->save();
    
        return response()->json(['success'=>'Successfully uploaded.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'deleteUpload' => 'nullable',
            'postUpdate' => 'required',
            'updateUploadImage' => 'nullable',
            'updateUploadVideo' => 'nullable',
        ]);

        $post = Post::where('id', $id)->first();

        $picture = $post->picture;

        $video = $post->video;

        if(!empty($request->deleteUpload)){

            if(!empty($picture)){

                unlink(env('POST_IMAGE_STORAGE').$picture);
                $post->picture = null;
                
            }
    
            if(!empty($video)){
    
                unlink(env('POST_VIDEO_STORAGE').$video);
                $post->video = null;
    
            }

        }

        if(!empty($request->updateUploadImage)){

            $image_name = time().'.'.request()->updateUploadImage->getClientOriginalExtension();
    
            $request->updateUploadImage->move(public_path('img/post'), $image_name);

            $post->picture = $image_name;

        }
        
        elseif(!empty($request->updateUploadVideo)){

            $video_name = time().'.'.request()->updateUploadVideo->getClientOriginalExtension();
    
            $request->updateUploadVideo->move(public_path('video/post'), $video_name);

            $post->video = $video_name;

        }

        $post->post = $request->postUpdate;

        $post->save();

        return back()->with("success", "You're post has been updated successfully!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        $post = Post::where('id', $id)->first();

        $picture = $post->picture;

        $video = $post->video;

        $post->delete();

        if(!empty($picture)){

            unlink(env('POST_IMAGE_STORAGE').$picture);

        }

        if(!empty($video)){

            unlink(env('POST_VIDEO_STORAGE').$video);

        }

        return back()->with('success', 'Your post has been deleted successfully!');

    }

    public function fileUpload()
    {
    	return view('test');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);
 
       $name = time().'.'.request()->file->getClientOriginalExtension();
  
       $request->file->move(public_path('img/post'), $name);
  
        return response()->json(['success'=>'Successfully uploaded.']);

    }
}
