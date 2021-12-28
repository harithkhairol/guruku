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

        
        $experience = new Experience;

        $experience->user_id = Auth::user()->id;
        $experience->title = $request->titleExperience;
        $experience->employment_type = $request->typeExperience;
        $experience->company_name = $request->companyExperience;
        $experience->location = $request->location;
        

        if(isset($request->yearExperience)){

            $start_date = $request->yearExperience.'-'.$request->monthExperience.'-01';
            $experience->start_date = $start_date;

        }

        if(isset($request->currentExperience)){

            $end_date = '2100-12-01';
            $experience->end_date = $end_date;
            $experience->current = $request->currentExperience;

        }

        elseif(isset($request->endYearExperience)){

            $end_date = $request->endYearExperience.'-'.$request->endMonthExperience.'-01';
            $experience->end_date = $end_date;
            $experience->current = "0";

        }

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

        $experience = Experience::where('user_id', Auth::user()->id)->orderByDesc('start_date')->get();

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

    public function updateExperience(Request $request, $id)
    {

        $request->validate([
            'editTitleExperience' => 'required',
            'editTypeExperience' => 'nullable',
            'editCompanyExperience' => 'required',
            'editLocationExperience' => 'nullable',
            'editCurrentExperience' => 'nullable',
            'editMonthExperience' => 'required',
            'editYearExperience' => 'required',
            'editEndMonthExperience' => 'nullable',
            'editEndYearExperience' => 'nullable',
            'editDescriptionExperience' => 'nullable',
        ]);

        $experience = Experience::where('id', $id)->first();

        $experience->title = $request->editTitleExperience;
        $experience->employment_type = $request->editTypeExperience;
        $experience->company_name = $request->editCompanyExperience;
        $experience->location = $request->editLocationExperience;
        

        if(isset($request->editYearExperience)){

            $start_date = $request->editYearExperience.'-'.$request->editMonthExperience.'-01';
            $experience->start_date = $start_date;

        }

        if(isset($request->editCurrentExperience)){

            $experience->current = $request->editCurrentExperience;

            $end_date = '2100-12-01';
            $experience->end_date = $end_date;

        }

        elseif(isset($request->editEndYearExperience)){

            $end_date = $request->editEndYearExperience.'-'.$request->editEndMonthExperience.'-01';
            $experience->end_date = $end_date;
            $experience->current = "0";

        }

        $experience->description = $request->editDescriptionExperience;

        $experience->save();

        return back()->with("success", "Experience has been updated successfully!");

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

    public function destroyExperience(Request $request, $id)
    {

        $experience = Experience::where('id', $id)->first();

        $company_name = $experience->company_name;

        $experience->delete();

        return back()->with('success', 'Experience at '.$company_name.' has been deleted successfully!');

    }
}
