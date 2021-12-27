<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use App\Models\Post;
use App\Models\Experience;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    public function feed()
    {

        $posts = Post::orderByDesc('created_at')->get();

        if(isset($_GET['post'])){

            return redirect()->action([UserController::class, 'feed'])->with('success','You have created a post successfully!');

        }

        return view('user.feed', compact('posts'));
        
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
        //
    }

    public function experienceStore(Request $request)
    {
        
        $request->validate([
            'titleExperience' => 'required',
            'typeExperience' => 'nullable',
            'companyExperience' => 'required',
            'locationExperience' => 'nullable',
            'currentExperience' => 'nullable',
            'monthExperience' => 'required',
            'yearExperience' => 'required',
            'endMonthExperience' => 'nullable',
            'endYearExperience' => 'nullable',
            'descriptionExperience' => 'nullable',
        ]);

        return $request->typeExperience;

        $start_date = $request->yearExperience.'-'.$request->monthExperience.'-01';
        $end_date = $request->endYearExperience.'-'.$request->endMonthExperience.'-01';

        $experience = new Experience;

        $experience->user_id = Auth::user()->id;
        $experience->title = $request->titleExperience;
        $experience->employment_type = $request->typeExperience;
        $experience->company_name = $request->companyExperience;
        $experience->location = $request->location;
        $experience->current = $request->monthExperience;
        $experience->start_date = $start_date;
        $experience->end_date = $end_date;
        $experience->description = $request->description;

        $experience->save();

        return back()->with("success", "Experience ". $request->title ." has been created successfully!");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function profile(User $user)
    {

        $profile = UserProfile::where('user_id', Auth::user()->id)->first();

        $experience = Experience::where('user_id', Auth::user()->id)->get();

        return view('user.profile', compact('profile', 'experience'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    public function updateAbout(Request $request)
    {

        $request->validate([
            'about' => 'nullable',
        ]);

        $profile = UserProfile::where('user_id', Auth::user()->id)->first();

        $profile->about = $request->about;

        $profile->save();

        return back()->with("success", "About has been updated successfully!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
