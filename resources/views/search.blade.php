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

                <div class="card pt-1 pb-2 mb-2">
                    <div class="card-top">
                        <div class="row pt-2 mr-2 ml-xs-4 pl-4 pl-sm-0">
                            <!-- <div class="col-2" style="padding-right: 0px !important;">
                            </div> -->
                            <div class="col-12 pl-4" style="font-size: 14px;">
                                <h6><b>Search for: 
                                    @if($_GET['result'])

                                        {{ $_GET['result']; }}

                                    @else

                                        All

                                    @endif
    
                                </b></h6>
                            </div>
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


<script>

    @if($_GET['result'])


        @php
            $result = $_GET['result'];
        @endphp

    @else

        @php
            $result = '-';
        @endphp

    @endif


    var SITEURL = "{{ route('ajax.search', ['result' => $result ]) }}";

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
            $('.parent-loading').html("No More Guru...");
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
