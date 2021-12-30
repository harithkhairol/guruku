<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserIntro;
use App\Models\UserProfile;
use App\Models\Post;
use App\Models\Experience;
use App\Models\Education;
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

    public function educationStore(Request $request)
    {
        $request->validate([
            'schoolEducation' => 'required',
            'degreeEducation' => 'nullable',
            'fosEducation' => 'nullable',
            'monthEducation' => 'nullable',
            'yearEducation' => 'nullable',
            'endMonthEducation' => 'nullable',
            'endYearEducation' => 'nullable',
            'gradeEducation' => 'nullable',
            'activitiesEducation' => 'nullable',
            'descriptionEducation' => 'nullable',
        ]);

        $start_date = $request->yearEducation.'-'.$request->monthEducation.'-01';
        $end_date = $request->endYearEducation.'-'.$request->endMonthEducation.'-01';

        $education = new Education;

        $education->user_id = Auth::user()->id;
        $education->school = $request->schoolEducation;
        $education->degree = $request->degreeEducation;
        $education->fos = $request->fosEducation;
        $education->start_date = $start_date;
        $education->end_date = $end_date;
        $education->grade = $request->gradeEducation;
        $education->activities = $request->activitiesEducation;
        $education->description = $request->descriptionEducation;

        $education->save();

        return back()->with("success", "Education ". $request->schoolEducation ." has been created successfully!");

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

        $education = Education::where('user_id', Auth::user()->id)->orderByDesc('start_date')->get();

        $user_intro = UserIntro::where('user_id', Auth::user()->id)->first();

        if(isset($_GET['upload'])){

            return redirect()->action([UserController::class, 'profile'])->with('success','You have upload profile photo successfully!');

        }

        return view('user.profile', compact('profile', 'experience', 'education', 'user_intro'));
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

    public function updateImage(Request $request)
    {

        $request->validate([
            'uploadProfileImage' => 'required',
        ]);
 
        $name = time().'.'.request()->uploadProfileImage->getClientOriginalExtension();
    
        $request->uploadProfileImage->move(public_path('img/user'), $name);


        $user = User::where('id', Auth::user()->id)->first();

        $profile_picture = $user->profile_picture;

        $user->profile_picture = $name;

        $user->save();

        unlink(env('USER_IMAGE_STORAGE').$profile_picture);
        
    
        return response()->json(['success'=>'Successfully uploaded.']);
        
    }

    public function updateIntro(Request $request)
    {

        $request->validate([
            'nameIntro' => 'required',
            'headlineIntro' => 'nullable',
            'industryIntro' => 'nullable',
            'cityIntro' => 'nullable',
        ]);

        $user = User::where('id', Auth::user()->id)->first();

        $user->name = $request->nameIntro;

        $user->save();


        $user_intro = UserIntro::where('user_id', Auth::user()->id)->first();

        $user_intro->headline = $request->headlineIntro;
        $user_intro->industry = $request->industryIntro;
        $user_intro->city = $request->cityIntro;

        $user_intro->save();

        return back()->with("success", "Intro has been updated successfully!");

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

    public function updateEducation(Request $request, $id)
    {

        $request->validate([
            'editSchoolEducation' => 'required',
            'editDegreeEducation' => 'nullable',
            'editFosEducation' => 'nullable',
            'editMonthEducation' => 'nullable',
            'editYearEducation' => 'nullable',
            'editEndMonthEducation' => 'nullable',
            'editEndYearEducation' => 'nullable',
            'editGradeEducation' => 'nullable',
            'editActivitiesEducation' => 'nullable',
            'editDescriptionEducation' => 'nullable',
        ]);

        $start_date = $request->editYearEducation.'-'.$request->editMonthEducation.'-01';
        $end_date = $request->editEndYearEducation.'-'.$request->editEndMonthEducation.'-01';

        $education = Education::where('id', $id)->first();

        $education->school = $request->editSchoolEducation;
        $education->degree = $request->editDegreeEducation;
        $education->fos = $request->editFosEducation;
        $education->start_date = $start_date;
        $education->end_date = $end_date;
        $education->grade = $request->editGradeEducation;
        $education->activities = $request->editActivitiesEducation;
        $education->description = $request->editDescriptionEducation;

        $education->save();

        return back()->with("success", "Education ". $request->schoolEducation ." has been updated successfully!");

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

    public function destroyEducation(Request $request, $id)
    {

        $education = Education::where('id', $id)->first();

        $school = $education->school;

        $education->delete();

        return back()->with('success', 'Education at '.$school.' has been deleted successfully!');

    }
}
