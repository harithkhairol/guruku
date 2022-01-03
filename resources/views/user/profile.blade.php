@extends('layouts.app')
@section('title', 'Profile' )
@section('content')

<style>

    body{
        /* color:#000000E6; */
    }

    p{
        font-size: 14px;
    }

    .desc-card{
        margin-top: 16px;
    }

    .w-95{
        width: 95%;
    }

    .text-gray{
        color: #00000099;
    }
                                                            
</style>


    <div class="row d-flex justify-content-between mt-4">

        <!-- first-colon -->
        <div class="col-lg-9 col-md-7 col-sm-12" >

            <div class="card mx-lg-2">
                <div class="card-head">
                    <div class="first-colon-head rounded-top d-flex">
                        <div class="color-1 d-inline-block ml-auto"></div>
                        <div class="color-2 d-inline-block ml-auto rounded-right"></div>
                    </div>
                    <div class="card-img-top d-flex justify-content-center">
                        <div class="first-colon-image rounded-circle d-flex">

                            <style>

                                .img-container {
                                position: relative;
                                }

                                .overlay {
                                position: absolute;
                                top: 0;
                                bottom: 0;
                                left: 0;
                                right: 0;
                                height: 100%;
                                width: 100%;
                                opacity: 0;
                                transition: .5s ease;
                                background-color: rgba(104 190 203);
                                }

                                .img-container:hover .overlay {
                                opacity: 1;
                                }

                                .text {
                                color: white;
                                font-size: 14px;
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                -webkit-transform: translate(-50%, -50%);
                                -ms-transform: translate(-50%, -50%);
                                transform: translate(-50%, -50%);
                                text-align: center;
                                }
                            </style>

                                @if(Auth::check())

                                    @if($user_id == Auth::user()->id)

                                        <a class="img-container" data-toggle="modal" href="#userPhotoModal" >
                                            
                                            @if($user_picture)

                                                <img src="{{ asset('img/user/'.$user_picture) }}" class="first-colon-img rounded-circle" alt="profil-photo">

                                            @else

                                                <img src="{{ asset('img/user2.png') }}" class="first-colon-img rounded-circle" alt="profil-photo">

                                            @endif

                                            <div class="overlay rounded-circle">
                                                <div class="text">Change Photo</div>
                                            </div>
                                        </a>

                                    @else

                                        <a class="img-container">
                                            
                                            @if($user_picture)

                                                <img src="{{ asset('img/user/'.$user_picture) }}" class="first-colon-img rounded-circle" alt="profil-photo">

                                            @else

                                                <img src="{{ asset('img/user2.png') }}" class="first-colon-img rounded-circle" alt="profil-photo">

                                            @endif

                                        </a>

                                    @endif

                                @else

                                    <a class="img-container">
                                        
                                        @if($user_picture)

                                            <img src="{{ asset('img/user/'.$user_picture) }}" class="first-colon-img rounded-circle" alt="profil-photo">

                                        @else

                                            <img src="{{ asset('img/user2.png') }}" class="first-colon-img rounded-circle" alt="profil-photo">

                                        @endif

                                    </a>

                                @endif

                        </div>
                    </div>
                </div>

                <style>
                    .profile-intro{
                        font-size: 14px;
                    }
                </style>
                <div class="card-body">
                    <div class="first-colon-body">
                        <h6 class="mb-1">
                            <a href="{{ route('user.profile', ['name'=>str_replace( [' ','/', '-'] , ['+','=', ','] , $user_name), 'id'=> $user_id] ) }}" style="color: rgb(26, 26, 26);">
                                <b>{{ $user_name }}</b>
                            </a>    
                            &nbsp;

                            @if(Auth::check())

                                @if($user_id == Auth::user()->id)

                                    <a id="aboutIcon" class="fas fa-edit ml-auto mr-4" data-toggle="modal" href="#introModal" title="About" data-title="about" style="position: absolute;"></a>

                                @endif

                            @endif
                            
                        </h6>

                        @if($user_intro->headline)

                            <h7>{{ $user_intro->headline }}</h7>

                        @endif
                        
                        <div class="profile-intro pt-2 pb-3">

                            <span class="text-gray">
                                @if($user_intro->city)

                                    {{ $user_intro->city }} &bull;

                                @endif
                                <a data-toggle="modal" href="#contactModal" >Contact Info</a>
                            </span>

                        </div>
                    
                    </div>

                    <div class="d-md-block">
                        <!-- <div class="second-colon-body">
                            <div class="viewing d-flex">
                                <p class="viewing-text">
                                    Connection
                                </p>
                                <a class="viewing-link ml-auto" href="#">
                                    0
                                </a>
                            </div>
                        </div> -->
                        <div class="third-colon-body d-none">
                            <p style="color: rgb(102, 101, 101);">
                                Özel araç ve içgörülere erişin
                            </p>
                            <p>
                                <i class="fas fa-square"></i>
                                <b>
                                    Premium’u 1 Ay Ücretsiz Deneyin
                                </b>
                            </p>
                        </div>
                        <div class="card-footer">

                            <a style="display: block; color: rgb(102, 101, 101);" href="{{ route('user.profile.post', ['name'=>str_replace( [' ','/', '-'] , ['+','=', ','] , $user_name), 'id'=> $user_id] ) }}">
                                <i class="fas fa-bookmark mr-2"></i>
                                <span>
                                    <b>Posts</b>
                                </span>
                            </a>

                        </div>
                    </div>
                </div>
                
            </div>


            <div class="card first-colon-bottom rounded-top my-3 mx-lg-2 d-md-block">
                <div class="bottom-body">
                    <div class="bottom-link mb-2">

                        <div class="mt-2 d-flex"> 
                            <h5 href="#">
                                About
                            </h5>

                            @if(Auth::check())

                                @if($user_id == Auth::user()->id)

                                    <a id="aboutIcon" class="fas fa-edit ml-auto mr-4" data-toggle="modal" href="#aboutModal" title="About" data-title="about"></a>

                                @endif

                            @endif

                        </div>

                    </div>

                    <div class="activity mb-3 w-95">
                        @if($profile->about)
                            <p>{{ $profile->about }}</p>
                        @else
                            <p>Empty</p>
                        @endif
                        
                    </div>
       
                </div>

            </div>

            <style>

                .row-card{

                    /* padding-bottom: 15px; */
                    border-bottom: 1px solid rgb(191, 211, 214);

                }

                .row-card b, .row-card p{

                    margin-bottom:0;

                }

            </style>

            <div class="card first-colon-bottom rounded-top my-3 mx-lg-2 d-md-block">
                <div class="bottom-body">

                    <!-- Experience -->

                    <div class="bottom-link mb-2">

                        <div class="mt-2 d-flex"> 
                            <h5 href="#">
                                Experience
                            </h5>

                            @if(Auth::check())

                                @if($user_id == Auth::user()->id)

                                <a id="aboutIcon" class="fas fa-plus ml-auto mr-4" data-toggle="modal" href="#experienceModal" title="About" data-desc="name-abc" data-title="experience" href=""></a>

                                @endif

                            @endif

                        </div>

                    </div>

                    <div class="activity mb-3">

                        @forelse($experience as $experience)

                            <div class="row-card py-3">

                                <div class="row-title-card d-flex">

                                    <b>

                                        <h5 href="#">
                                            {{ $experience->title }}
                                        </h5>
                                        
                                    </b>
                                    
                                    @if(Auth::check())

                                        @if($user_id == Auth::user()->id)

                                            <a id="aboutIcon" class="fas fa-edit ml-auto mr-4" data-toggle="modal" href="#editExperienceModal" title="About" data-update="{{ $experience->id }}" data-title="{{ $experience->title }}" data-type="{{ $experience->employment_type }}" data-company="{{ $experience->company_name }}" data-location="{{ $experience->location }}" data-current="{{ $experience->current }}" data-startmonth='{{ date("m", strtotime($experience->start_date)) }}' data-startyear='{{ date("Y", strtotime($experience->start_date)) }}' data-endmonth='{{ date("m", strtotime($experience->end_date)) }}' data-endyear='{{ date("Y", strtotime($experience->end_date)) }}' data-desc="{{ $experience->description }}"></a>

                                        @endif

                                    @endif
                                    
                                </div>

                                <b><p>{{ $experience->company_name }} &bull; {{ $experience->employment_type }}</p></b> 

                                @if($experience->current == "0")

                                    <p class="text-gray">{{ date("M Y", strtotime($experience->start_date)) }} - {{ date("M Y", strtotime($experience->end_date)) }} &bull; 
                                        
                                        {{ date_diff(new \DateTime($experience->start_date), new \DateTime($experience->end_date))->format("%y Years, %m Months") }}
                                
                                    </p>

                                @else

                                    <p class="text-gray">{{ date("M Y", strtotime($experience->start_date)) }} - Present &bull; 

                                        @if(date_diff(new \DateTime($experience->start_date), new \DateTime())->format("%m") == 0 && date_diff(new \DateTime($experience->start_date), new \DateTime())->format("%y") == 0)

                                            New

                                        @elseif(date_diff(new \DateTime($experience->start_date), new \DateTime())->format("%y") == 0)

                                            {{ date_diff(new \DateTime($experience->start_date), new \DateTime())->format("%m Months") }}

                                        @else

                                            {{ date_diff(new \DateTime($experience->start_date), new \DateTime())->format("%y Years, %m Months") }}

                                        @endif

                                    </p>
                                        
                                    

                                @endif

                                
                                <p class="text-gray">{{ $experience->location }}</p>

                                <div class="desc-card w-95">
                                    <p>{{ $experience->description }}</p>
                                </div>

                            </div>

                        @empty
                
                            Empty

                        @endforelse
                        
                    </div>
       
                </div>

            </div>

            <div class="card first-colon-bottom rounded-top my-3 mx-lg-2 d-md-block">
                <div class="bottom-body">

                    <!-- Experience -->

                    <div class="bottom-link mb-2">

                        <div class="mt-2 d-flex"> 
                            <h5 href="#">
                                Education
                            </h5>

                            @if(Auth::check())

                                @if($user_id == Auth::user()->id)

                                    <a id="aboutIcon" class="fas fa-plus ml-auto mr-4" data-toggle="modal" href="#educationModal" title="About" data-desc="name-abc" data-title="experience" href=""></a>

                                @endif

                            @endif

                        </div>

                    </div>

                    <div class="activity mb-3">

                        @forelse($education as $education)

                            <div class="row-card py-3">

                                <div class="row-title-card d-flex">
                                    <h6 href="#">
                                        <b>{{ $education->school }}</b>
                                    </h6>
                                    
                                    @if(Auth::check())

                                        @if($user_id == Auth::user()->id)

                                            <a id="aboutIcon" class="fas fa-edit ml-auto mr-4" data-toggle="modal" href="#editEducationModal" title="About" data-update="{{ $education->id }}" data-school="{{ $education->school }}" data-degree="{{ $education->degree }}" data-fos="{{ $education->fos }}" data-startmonth='{{ date("m", strtotime($education->start_date)) }}' data-startyear='{{ date("Y", strtotime($education->start_date)) }}' data-endmonth='{{ date("m", strtotime($education->end_date)) }}' data-endyear='{{ date("Y", strtotime($education->end_date)) }}' data-grade="{{ $education->grade }}" data-activities="{{ $education->activities }}" data-desc="{{ $education->description }}"></a>

                                        @endif

                                    @endif

                                </div>

                                <p>{{ $education->degree }}@if(!empty($education->fos)), {{ $education->fos }}@endif<span>@if(!empty($education->grade)), {{ $education->grade }} @endif</span></p>
                                <p class="text-gray">{{ date("M Y", strtotime($education->start_date)) }} - {{ date("M Y", strtotime($education->end_date)) }}</p>

                                @if(isset($education->activities))

                                    <p class="text-gray">Activities & Socities: {{ $education->activities }}</p>

                                @endif
                                
                                <div class="desc-card w-95">
                                    <p>{{ $education->description }}</p>
                                </div>

                            </div>

                        @empty
            
                            Empty

                        @endforelse
                        
                    </div>
       
                </div>

            </div>

        </div>

        <div class="col-lg-3 col-md-5 third-colon-left p-lg-0 rounded-top">
            
            @include('layouts.side-ads')

        </div>

    </div>

@endsection

@section('script')

    @include('modals.contact')

    @if(Auth::check())

        @if($user_id == Auth::user()->id)

            @include('modals.user-photo')
            @include('modals.intro')
            @include('modals.about')
            @include('modals.experience')
            @include('modals.edit-experience')
            @include('modals.education')
            @include('modals.edit-education')

        @endif

    @endif

@endsection