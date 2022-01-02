<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    public function test(Request $request)
    {

        $posts = Post::paginate(8);
        $data = '';
        if ($request->ajax()) {
            foreach ($posts as $post) {
                $data.='<li>'.$post->id.' <strong>'.$post->post.'</strong> : '.$post->post.'</li>';
            }
            return $data;
        }
        // return view('posts');

        return view('test');
    }

    public function ajaxPost(Request $request, $name, $id)
    {

        $posts = Post::where('user_id', $id)->orderByDesc('created_at')->paginate(8);

        $data = '';

        if ($request->ajax()) {

            foreach ($posts as $post) {

                $profile_image = asset('img/user2.png');

                $image = '';
                $video = '';
                $menu = "";

                if($post->user->profile_picture){

                    $profile_image = asset('img/user/'.$post->user->profile_picture);

                }

                if($post->picture){

                    $image = '<img class="card-body-img" style="width: 100%;" src="'.env('APP_URL').'/img/post/'.$post->picture .'" alt="post">';

                }

                if($post->video){

                    $video = 
                    
                    '<div class="embed-responsive embed-responsive-4by3">'.
                        '<iframe class="embed-responsive-item" src="'. env('APP_URL') .'/video/post/'. $post->video .'"></iframe>'.
                    '</div>';

                }

                if(Auth::user()->id == $post->user_id){

                    $menu = 

                    '<div class="col-2 pr-0 pt-1" style="color: rgb(121, 121, 121);">'.
                        '<i class="fas fa-ellipsis-h float-right p-2 p-xs-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>'.
                        '<div class="ml-auto mr-3 d-inline-block" style="font-size: 12px;">'.
                            '<div class="dropdown-menu" style="font-size: 12px;" aria-labelledby="dropdownMenuButton">'.
                                
                                '<a class="dropdown-item" href="#" data-toggle="modal" data-target="#editPost" data-post="'.$post->post.'" data-picture="'.$post->picture.'" data-video="'.$post->video.'" data-edit="'.$post->id.'">Edit</a>'.

                                '<a class="dropdown-item" href="#" data-toggle="modal" data-target="#deletePost" data-post="'.$post->post.'" data-picture="'.$post->picture.'" data-video="'.$post->video.'" data-delete="'.$post->id.'">Delete</a>'.
                            
                            '</div>'.
                        '</div>'.
                    '</div>';

                }

                $data.= '<div class="second-bar-post mb-2">'.
                    '<div class="card">'.
                        '<div class="card-top">'.
                            '<div class="row pt-2 mr-2 ml-xs-4 pl-4 pl-sm-0">'.
                                '<div class="col-2" style="padding-right: 0px !important;">'.
                                    '<img src="'.$profile_image.'" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">'.
                                '</div>'.
                                '<div class="col-8 second-bar-posttop pl-0" style="font-size: 14px;">'.
                                    '<a href="'.route('user.profile', ['name'=>str_replace( [' ','/', '-'] , ['+','=', ','] , $post->user->name), 'id'=> $post->user->id] ).'" style="color: rgb(61, 60, 60);">'.
                                        '<b>'.$post->user->name.'</b>'.
                                    '</a>'.
                                    '<small class="d-block" style="margin-top: 1px; color: rgb(102, 101, 101);">'.
                                        $post->created_at->diffForHumans().
                                    '</small>'.
                                '</div>'.

                                $menu.
                                
                            '</div>'.
                        '</div>'.

                        '<div class="card-body">'.
                            '<p class="card-body-text">'.$post->post.'</p>'.

                                $image.

                                $video.

                        '</div>'.
                    '</div>'.
                '</div>';

            }

            return $data;
        }

    }

    public function ajaxFeed(Request $request)
    {

        $posts = Post::orderByDesc('created_at')->paginate(8);

        $data = '';

        if ($request->ajax()) {

            foreach ($posts as $post) {

                $profile_image = asset('img/user2.png');

                $image = '';
                $video = '';

                if($post->user->profile_picture){

                    $profile_image = asset('img/user/'.$post->user->profile_picture);

                }

                if($post->picture){

                    $image = '<img class="card-body-img" style="width: 100%;" src="'.env('APP_URL').'/img/post/'.$post->picture .'" alt="post">';

                }

                if($post->video){

                    $video = 
                    
                    '<div class="embed-responsive embed-responsive-4by3">'.
                        '<iframe class="embed-responsive-item" src="'. env('APP_URL') .'/video/post/'. $post->video .'"></iframe>'.
                    '</div>';

                }

                $data.= '<div class="second-bar-post mb-2">'.
                    '<div class="card">'.
                        '<div class="card-top">'.
                            '<div class="row pt-2 mr-2 ml-xs-4 pl-4 pl-sm-0">'.
                                '<div class="col-2" style="padding-right: 0px !important;">'.
                                    '<img src="'.$profile_image.'" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">'.
                                '</div>'.
                                '<div class="col-8 second-bar-posttop pl-0" style="font-size: 14px;">'.
                                    '<a href="'.route('user.profile', ['name'=>str_replace( [' ','/', '-'] , ['+','=', ','] , $post->user->name), 'id'=> $post->user->id] ).'" style="color: rgb(61, 60, 60);">'.
                                        '<b>'.$post->user->name.'</b>'.
                                    '</a>'.
                                    '<small class="d-block" style="margin-top: 1px; color: rgb(102, 101, 101);">'.
                                        $post->created_at->diffForHumans().
                                    '</small>'.
                                '</div>'.
                                
                            '</div>'.
                        '</div>'.

                        '<div class="card-body">'.
                            '<p class="card-body-text">'.$post->post.'</p>'.

                                $image.

                                $video.

                        '</div>'.
                    '</div>'.
                '</div>';

            }

            return $data;
        }

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
