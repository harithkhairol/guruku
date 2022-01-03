@extends('layouts.app')
@section('title', 'Guru.Tinka' )
@section('content')

    <div class="row d-flex justify-content-between mt-4">

        <!-- first-colon -->
        <div class="col-lg-3 col-md-4 col-sm-12" >

            <div class="card mx-lg-2">
                <div class="card-head">
                    <div class="first-colon-head rounded-top d-flex">
                        <div class="color-1 d-inline-block ml-auto"></div>
                        <div class="color-2 d-inline-block ml-auto rounded-right"></div>
                    </div>
                    <div class="card-img-top d-flex justify-content-center">
                        <div class="first-colon-image rounded-circle d-flex">

                            @if(Auth::check())

                                @if(Auth::user()->profile_picture)

                                    <img src="{{ asset('img/user/'.Auth::user()->profile_picture) }}" class="first-colon-img rounded-circle" alt="profil-photo">

                                @else

                                    <img src="{{ asset('img/user2.png') }}" class="first-colon-img rounded-circle" alt="profil-photo">

                                @endif

                            @else

                                <img src="{{ asset('img/user2.png') }}" class="first-colon-img rounded-circle" alt="profil-photo">

                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="first-colon-body">
                        <p class=" mb-1">
                            <a href="#" style="color: rgb(26, 26, 26);">
                                @if(Auth::check())
                                    <b>{{ Auth::user()->name }}</b>
                                @else
                                    <b>Guest</b>
                                @endif
                            </a>    
                        </p>
                        <p class="job-text">
                            <!-- Bubo Creative Studio şirketinde Intern Frontend Developer -->
                        </p>
                    </div>

                    <div class="d-none d-md-block">
           
                        <div class="card-footer">

                            @if(Auth::check())
                                <a class="mb-2" style="display: block; color: rgb(102, 101, 101);" href="{{ route('user.profile', ['name'=>str_replace( [' ','/', '-'] , ['+','=', ','] , Auth::user()->name), 'id'=> Auth::user()->id] ) }}">
                                    <i class="fas fa-user mr-2"></i>
                                    <span>
                                        <b>Edit Profile</b>
                                    </span>
                                </a>
                                <a style="display: block; color: rgb(102, 101, 101);" href="{{ route('user.profile.post', ['name'=>str_replace( [' ','/', '-'] , ['+','=', ','] , Auth::user()->name), 'id'=> Auth::user()->id] ) }}">
                                    <i class="fas fa-bookmark mr-2"></i>
                                    <span>
                                        <b>My Posts</b>
                                    </span>
                                </a>
                            @else

                                <a class="text-center" style="display: block; color: rgb(102, 101, 101);" href="#">
                                
                                    <span>
                                        <b>Welcome to guru!</b>
                                    </span>
                                </a>
                            
                            @endif

                        </div>
                    </div>
                </div>
                
            </div>

            <!-- acordion -->

            <div class="acordion d-block d-md-none mt-2">
                <div class="card mb-2">
                    <div class="card-footer">

                        @if(Auth::check())
                            <a style="display: block; color: rgb(102, 101, 101);" href="{{ route('user.profile', ['name'=>str_replace( [' ','/', '-'] , ['+','=', ','] , Auth::user()->name), 'id'=> Auth::user()->id] ) }}">
                                <i class="fas fa-user mr-2"></i>
                                <span>
                                    <b>Edit Profile</b>
                                </span>
                            </a>
                            <a style="display: block; color: rgb(102, 101, 101);" href="{{ route('user.profile.post', ['name'=>str_replace( [' ','/', '-'] , ['+','=', ','] , Auth::user()->name), 'id'=> Auth::user()->id] ) }}">
                                <i class="fas fa-bookmark mr-2"></i>
                                <span>
                                    <b>My Posts</b>
                                </span>
                            </a>
                        @else

                            <a class="text-center" style="display: block; color: rgb(102, 101, 101);" href="#">

                                <span>
                                    <b>Welcome to guru!</b>
                                </span>
                            </a>

                        @endif
                        
                    </div>
                </div>
            </div>

        </div>

        <!-- second-colon -->
        <div class="col-lg-6 col-md-8 col-sm-12">
            <div class="second-bar mr-0 mr-lg-3">
                
                @if(Auth::check())
                    <div class="card">
                        <div class="second-bar-top rounded" style="background-color: white;">
                            <div class="row pt-3 mr-2 pl-4 pl-sm-0">
                                <div class="col-2" style="padding-right: 0px !important;">

                                    @if(Auth::check())

                                        @if(Auth::user()->profile_picture)

                                            <img src="{{ asset('img/user/'.Auth::user()->profile_picture) }}" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">

                                        @else

                                            <img src="{{ asset('img/user2.png') }}" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">

                                        @endif
                                    
                                    @else

                                        <img src="{{ asset('img/user2.png') }}" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">

                                    @endif

                                </div>
                                <div class="col-10 pl-0" >
                                    <button type="button" class="second-bar-top-button" data-toggle="modal" data-target="#aboutPost">Start a post</button>
                                </div>
                            </div>

                            
                            <div class="row ml-md-2 mr-md-2 text-center">
                                <div class="col-md-3 col-6 py-1" data-toggle="modal" data-target="#postPicture">
                                    <div class="second-bar-top-foot px-sm-1">
                                        <i class="fas fa-image fa-lg mr-2" style="color: #3883ce;"></i>
                                        <span style="font-weight:bold; font-size: .9rem; color: rgb(133, 133, 133);">Photo</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 py-1" data-toggle="modal" data-target="#postVideo">
                                    <div class="second-bar-top-foot px-sm-1">
                                        <i class="fab fa-youtube fa-lg mr-2" style="color: rgb(107, 175, 107);"></i>
                                        <span style="font-weight:bold; font-size: .9rem; color: rgb(133, 133, 133);">Video</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                    
                <div class="row my-1 ml-auto">
                    <div class="sorting-line d-inline-block position-absolute">

                    </div>
                    <div class="ml-auto mr-3 d-inline-block" style="font-size: 12px;">
                        <button class="second-bar-sorting dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sort By: <b style="color: rgb(75, 75, 75);">Recent</b>
                        </button>
                        <div class="dropdown-menu" style="font-size: 12px;" aria-labelledby="dropdownMenuButton">
                            <!-- <a class="dropdown-item" href="#">Top</a> -->
                            <a class="dropdown-item" href="#">Recent</a>
                        </div>
                    </div>
                        
                </div>

                <!-- Second-Bar-Post -->

                 <!-- start post -->
                 
                <div id="results" class="second-bar-post animate-bottom">

              
                </div>

                <div class="parent-loading">
                    <div class="ajax-loading" id="loader"></div>
                </div>

        
          

            </div>
        </div>

        <!-- third-colon -->
        <div class="col-lg-3 third-colon-left p-lg-0 rounded-top">
            
            @include('layouts.side-ads')
            
        </div>
    </div>


@endsection

@section('script')

    <script src="{{ asset('vendor/jquery.form.min.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script> -->

    @if(Auth::check())

        @include('modals.post')
        @include('modals.photo')
        @include('modals.video')
        @include('modals.post-edit')
        @include('modals.post-delete')

    @endif

    <script>

        var SITEURL = "{{ route('ajax.feed') }}";

        var page = 1;

        load_more(page);

         //  load_more(page); //2nd load
        $(window).scroll(function() { //detect page scroll

            if($(window).scrollTop() + $(window).height() >= $(document).height()) { //if user scrolled from top to bottom of the page

            // if($(window).scrollTop() + $(window).height() >= ($(document).height()-100)) { //if user scrolled from top to bottom of the page
                page++; //page number increment
                load_more(page); //load content   
            }
            
        });     

        function load_more(page){
            $.ajax({
            url: SITEURL + "?page=" + page,
            type: "get",
            datatype: "html",
            beforeSend: function()
            {
                $('.ajax-loading').show();
                }
            })
            .done(function(data)
            {
                if(data.length == 0){
                console.log(data.length);
                //notify user if nothing to load
                $('.parent-loading').html("No More Post...");
                return;
            }
            $('.ajax-loading').hide(); //hide loading animation once data is received
            $("#results").append(data); //append data into #results element          
            console.log('data.length');
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server');
        });
        }

    </script>

@endsection
