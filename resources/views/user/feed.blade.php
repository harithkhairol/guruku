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
                            <img src="{{ asset('img/user2.png') }}" class="first-colon-img rounded-circle" alt="profil-photo">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="first-colon-body">
                        <p class=" mb-1">
                        <a href="#" style="color: rgb(26, 26, 26);">
                                <b>{{ Auth::user()->name }}</b>
                            </a>    
                        </p>
                        <p class="job-text">
                            <!-- Bubo Creative Studio şirketinde Intern Frontend Developer -->
                        </p>
                    </div>

                    <div class="d-none d-md-block">
                        <!-- <div class="second-colon-body">
                            <div class="viewing d-flex">
                                <p class="viewing-text">
                                    Connection
                                </p>
                                <a class="viewing-link ml-auto" href="#">
                                    6849
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
                            <i class="fas fa-bookmark mr-2"></i>
                            <span>
                                <b> My items</b>
                            </span>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- acordion -->

            <div class="acordion d-block d-md-none mt-2">
                <p class="acordion-button" style="text-align: center;">
                    <a style="color: rgb(124, 123, 123); font-size: 14px; text-decoration: none;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <b>
                        Show More
                        <i class="fas fa-chevron-down"></i>
                        </b>
                    </a>
                </p>
                <div class="collapse mb-3" id="collapseExample">
                    <div>
                        <div class="card mb-2">
                            <!-- <div class="second-colon-body">
                                <div class="viewing d-flex">
                                    <p class="viewing-text">
                                        Connection
                                    </p>
                                    <a class="viewing-link ml-auto" href="#">
                                        6849
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
                                <i class="fas fa-bookmark mr-2"></i>
                                <span>
                                    <b>My items</b>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- second-colon -->
        <div class="col-lg-6 col-md-8 col-sm-12">
            <div class="second-bar mr-0 mr-lg-3">
                <div class="card">
                <div class="second-bar-top rounded" style="background-color: white;">
                    <div class="row pt-3 mr-2 pl-4 pl-sm-0">
                        <div class="col-2" style="padding-right: 0px !important;">
                            <img src="{{ asset('img/user2.png') }}" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
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

                @forelse($posts as $post)

                    <div class="second-bar-post mb-2">
                        <div class="card">
                            <div class="card-top">
                                <div class="row pt-2 mr-2 ml-xs-4 pl-4 pl-sm-0">
                                    <div class="col-2" style="padding-right: 0px !important;">
                                        <img src="https://picsum.photos/id/19/200/300" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
                                    </div>
                                    <div class="col-8 second-bar-posttop pl-0" style="font-size: 14px;">
                                        <a href="#" style="color: rgb(61, 60, 60);">
                                            <b>{{ $post->user->name }}</b>
                                        </a>
                                        <small class="d-block" style="margin-top: 1px; color: rgb(102, 101, 101);">
                                            {{ $post->created_at->diffForHumans() }}
                                            
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                            </svg>
                                            
                                            <i class="fas fa-globe-americas"></i> -->
                                            
                                        </small>
                                    </div>
                                    <div class="col-2 pr-0 pt-1" style="color: rgb(121, 121, 121);">
                                        <i class="fas fa-ellipsis-h float-right p-2 p-xs-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                        <div class="ml-auto mr-3 d-inline-block" style="font-size: 12px;">
                                            <div class="dropdown-menu" style="font-size: 12px;" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Save</a>

                                                @if(Auth::user()->id == $post->user_id)

                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editPost" data-post="{{ $post->post }}" data-picture="{{ $post->picture }}" data-video="{{ $post->video }}" data-edit="{{ $post->id }}">Edit</a>

                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deletePost" data-post="{{ $post->post }}" data-picture="{{ $post->picture }}" data-video="{{ $post->video }}" data-delete="{{ $post->id }}">Delete</a>

                                                @endif
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <p class="card-body-text">{{ $post->post }}</p>
                                @if(isset($post->picture))
                                    <img class="card-body-img" style="width: 100%;" src="{{ env('APP_URL') }}/img/post/{{ $post->picture }}" alt="post">
                                @endif

                                @if(isset($post->video))
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe class="embed-responsive-item" src="{{ env('APP_URL') }}/video/post/{{ $post->video }}"></iframe>
                                    </div>
                                @endif

                                <!-- <div class="second-bar-icons ml-3 my-1">
                                    <div class="d-inline-block mr-1">
                                        <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #eef7ff; background-color: #0a66c2; height: 16px; width: 16px;">
                                            <i class="fas fa-thumbs-up fa-xs"></i>
                                        </span>
                                    </div>
                                    <div class="d-inline-block mr-1">
                                        <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #cbf0d1; background-color: #0ac25d; height: 16px; width: 16px;">
                                            <i class="fas fa-hands-wash fa-xs"></i>
                                        </span>
                                    </div>
                                    <div class="d-inline-block mr-1" style="color: rgb(153, 152, 152); font-size: 14px;">
                                        <span>37</span>
                                    </div>
                                </div> -->
                            </div>

                            <!-- <div class="card-footer-second mx-3 my-2 pt-1">
                                <div class="second-bar-button d-inline-block p-2">
                                    <i class="far fa-thumbs-up"></i>
                                    <span>Like</span>
                                </div>
                                <div class="second-bar-button d-inline-block p-2" style="color: rgb(177, 175, 175);">
                                    <i class="far fa-comment-dots"></i>
                                    <span>Comment</span>
                                </div>
                                <div class="second-bar-button d-inline-block p-2">
                                    <i class="fas fa-share"></i>
                                    <span>Share</span>
                                </div>
                                <div class="second-bar-button d-inline-block p-2">
                                    <i class="fas fa-location-arrow"></i>
                                    <span>Send</span>
                                </div>
                            </div> -->
                        </div>
                    </div>

                @empty
                
                    No Post

                @endforelse

               
                <!-- end post -->

                 <!-- start post -->

                 <div class="second-bar-post mb-2">
                    <div class="card">
                        <div class="card-top">
                            <div class="row pt-2 mr-2 ml-xs-4 pl-4 pl-sm-0">
                                <div class="col-2" style="padding-right: 0px !important;">
                                    <img src="https://picsum.photos/id/19/200/300" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
                                </div>
                                <div class="col-8 second-bar-posttop pl-0" style="font-size: 14px;">
                                    <a href="#" style="color: rgb(61, 60, 60);">
                                        <b>Ipsa Hic</b>
                                    </a>
                                    <small class="d-block mr-1" style="margin-top: -4px; color: rgb(102, 101, 101);">lorem ipsum dolor</small>
                                    <small class="d-block" style="margin-top: -4px; color: rgb(102, 101, 101);">
                                        7 saat
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                        </svg>
                                        
                                        <i class="fas fa-globe-americas"></i>
                                    </small>
                                </div>
                                <div class="col-2 pr-0 pt-1" style="color: rgb(121, 121, 121);">
                                    <i class="fas fa-ellipsis-h float-right p-2 p-xs-0"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <p class="card-body-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure possimus quo nostrum sint incidunt quis eos numquam quam eligendi, voluptatibus laudantium? Similique inventore illo cupiditate voluptatibus atque quod doloribus iste voluptate eius itaque. Tempora laboriosam facere, incidunt ipsa minus nam eveniet, doloribus totam dolores libero consequuntur eum nemo asperiores sit. Natus dolor dignissimos reprehenderit culpa tempora, soluta magni aliquid sequi?</p>
                            <div class="second-bar-icons ml-3 my-1">
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #eef7ff; background-color: #0a66c2; height: 16px; width: 16px;">
                                        <i class="fas fa-thumbs-up fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #cbf0d1; background-color: #0ac25d; height: 16px; width: 16px;">
                                        <i class="fas fa-hands-wash fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1" style="color: rgb(153, 152, 152); font-size: 14px;">
                                    <span>37</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer-second mx-3 my-2 pt-1">
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-thumbs-up"></i>
                                <span>Beğen</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2" style="color: rgb(177, 175, 175);">
                                <i class="far fa-comment-dots"></i>
                                <span>Yorum Yap</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-share"></i>
                                <span>Paylaş</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-location-arrow"></i>
                                <span>Gönder</span>
                            </div>
                        </div>

                        <div class="pl-2 py-2" style="font-size: 12px; color: rgb(153, 152, 152); background-color: rgba(243, 242, 239);">
                            <i class="fas fa-comment-slash"></i>
                            <span>Bu gönderi için yorumlar kapatıldı. Ancak farklı bir reaksiyon verebilir veya paylaşabilirsiniz.</span>
                        </div>
                    </div>
                </div>

                <div class="second-bar-post mb-2">
                    <div class="card">
                        <div class="card-top">
                            <div class="row pt-2 mr-2 ml-xs-4 pl-4 pl-sm-0">
                                <div class="col-2" style="padding-right: 0px !important;">
                                    <img src="https://picsum.photos/id/1019/200/300" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
                                </div>
                                <div class="col-8 second-bar-posttop pl-0" style="font-size: 14px;">
                                    <a href="#" style="color: rgb(61, 60, 60);">
                                        <b>Dolor Amet</b>
                                    </a>
                                    <small class="d-block mr-1" style="margin-top: -4px; color: rgb(102, 101, 101);">sequi non voluptatem</small>
                                    <small class="d-block" style="margin-top: -4px; color: rgb(102, 101, 101);">
                                        1 saat
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                        </svg>
                                        
                                        <i class="fas fa-globe-americas"></i>
                                    </small>
                                </div>
                                <div class="col-2 pr-0 pt-1" style="color: rgb(121, 121, 121);">
                                    <i class="fas fa-ellipsis-h float-right p-2 p-xs-0"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <p class="card-body-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam veniam, nostrum a fuga natus dolor itaque ducimus corrupti laborum error fugit ut unde ea dolorem!😍😂</p>
                            <img class="card-body-img" style="width: 100%;" src="https://picsum.photos/id/1011/468/568" alt="post">
                            <div class="second-bar-icons ml-3 my-1">
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #eef7ff; background-color: #0a66c2; height: 16px; width: 16px;">
                                        <i class="fas fa-thumbs-up fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #cbf0d1; background-color: #0ac25d; height: 16px; width: 16px;">
                                        <i class="fas fa-hands-wash fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #f3d3d3; background-color: #c73838; height: 16px; width: 16px;">
                                        <i class="fas fa-heart fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1" style="color: rgb(153, 152, 152); font-size: 14px;">
                                    <a href="#" style="color: rgb(153, 152, 152);">567</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                    </svg>
                                    
                                    <span>58 Yorum</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer-second mx-3 my-2 pt-1">
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-thumbs-up"></i>
                                <span>Beğen</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-comment-dots"></i>
                                <span>Yorum Yap</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-share"></i>
                                <span>Paylaş</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-location-arrow"></i>
                                <span>Gönder</span>
                            </div>
                        </div>

                        <div class="row py-3 mr-2 ml-xs-4 pl-4 pl-sm-0">
                            <div class="col-2" style="padding-right: 0px !important;">
                                <img src="{{ asset('img/user2.png') }}" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
                            </div>
                            <div class="col-10 pl-0" >
                                <button type="button" class="second-bar-top-button">Yorum ekle...
                                    <span class="float-right ml-2 mr-2">
                                        <i class="far fa-image fa-lg"></i>
                                    </span>
                                    <span class="float-right">
                                        <i class="far fa-smile fa-lg"></i>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="ml-3" style="font-size: 13px;">
                            <button class="second-bar-sorting dropdown-toggle" style="background-color: white !important;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <b style="color: rgb(110, 110, 110);">En İlgili</b>
                            </button>
                            <div class="dropdown-menu" style="font-size: 13px;" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">
                                    <b class="d-block">En İlgili</b>
                                    <small>En ilgili yorumları gör</small>
                                </a>
                                <a class="dropdown-item" href="#">
                                <b class="d-block">Latest</b>
                                <small>Latest yorumları gör</small>
                                </a>
                            </div>
                        </div>

                        <div class="row pt-2 mr-2 ml-xs-4 pl-4 pl-sm-0">
                            <div class="col-2" style="padding-right: 0px !important;">
                                <img src="https://picsum.photos/id/1015/200/300" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
                            </div>
                            <div class="col-10 second-bar-posttop pt-2 rounded" style="font-size: 14px; background-color: rgba(243, 242, 239);">
                                <a href="#" style="color: rgb(61, 60, 60);">
                                    <b>Sit Amet</b>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                    </svg>
                                    <span style="color: rgb(153, 152, 152); font-size: 13px;">1</span>
                                </a>
                                <span class="pr-0 pt-1" style="color: rgb(121, 121, 121);">
                                    <i class="fas fa-ellipsis-h float-right p-2 p-xs-0"></i>
                                </span>
                                <span class="d-block mr-1" style="margin-top: -2px; color: rgb(102, 101, 101); font-size: 13px;">lorem ipsum dolor</span>        
                                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nulla alias rem saepe vitae repudiandae minus quae quod! Fugiat, esse.</p>
                            </div>
                            
                        </div>

                        <div class="row mb-4">
                            <div class="col offset-2" style="font-size: 13px; color: rgb(153, 152, 152);">
                                <span>Beğen</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                </svg>
                                <div class="d-inline-block">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #eef7ff; background-color: #0a66c2; height: 15px; width: 15px;">
                                        <i class="fas fa-thumbs-up fa-xs"></i>
                                    </span>
                                </div>
                                <span class="mx-1">1</span>
                                <span class="mr-1">|</span>
                                <span>Yanıtla</span>
                            </div>
                        </div>
                    </div>
                </div>

               

                <!-- post-1 -->

                <div class="second-bar-post mb-2">
                    <div class="card">
                        <div class="card-top">
                            <div class="row pt-2 mr-2 ml-xs-4 pl-4 pl-sm-0">
                                <div class="col-2" style="padding-right: 0px !important;">
                                    <img src="https://picsum.photos/id/58/200/300" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
                                </div>
                                <div class="col-8 second-bar-posttop pl-0" style="font-size: 14px;">
                                    <a href="#" style="color: rgb(61, 60, 60);">
                                        <b>Sit Amet</b>
                                    </a>
                                    <small class="d-block mr-1" style="margin-top: -4px; color: rgb(102, 101, 101);">lorem ipsum dolor</small>
                                    <small class="d-block" style="margin-top: -4px; color: rgb(102, 101, 101);">
                                        2 saat
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                        </svg>
                                        
                                        <i class="fas fa-globe-americas"></i>
                                    </small>
                                </div>
                                <div class="col-2 pr-0 pt-1" style="color: rgb(121, 121, 121);">
                                    <i class="fas fa-ellipsis-h float-right p-2 p-xs-0"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <p class="card-body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio eaque molestias ad eligendi adipisci! Molestiae saepe labore ad nihil accusamus?</p>
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="https://ak.picdn.net/shutterstock/videos/1056506843/preview/stock-footage-happy-people-using-smartphone-devices-in-world-wide-connected-social-network-diverse-people-do-e.webm"></iframe>
                            </div>
                            <div class="second-bar-icons ml-3 my-1">
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #eef7ff; background-color: #0a66c2; height: 16px; width: 16px;">
                                        <i class="fas fa-thumbs-up fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #e8d1f1; background-color: #785085; height: 20px; width: 20px;">
                                        <i class="fas fa-hand-holding-heart fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #f3d3d3; background-color: #c73838; height: 16px; width: 16px;">
                                        <i class="fas fa-heart fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1" style="color: rgb(153, 152, 152); font-size: 14px;">
                                    <span>958</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer-second mx-3 my-2 pt-1">
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-thumbs-up"></i>
                                <span>Beğen</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-comment-dots"></i>
                                <span>Yorum Yap</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-share"></i>
                                <span>Paylaş</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-location-arrow"></i>
                                <span>Gönder</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- post-2 -->

                <div class="second-bar-post mb-2">
                    <div class="card">
                        <div class="card-top">
                            <div class="row pt-2 mr-2 mx-2 pl-4 pl-sm-0" style="border-bottom: 1px solid rgb(219, 219, 219);">
                                <div class="col-10">
                                    <b class="like-person">Adipisicing Elit</b> <small style="color: rgb(153, 152, 152);">bunu beğendi</small>
                                </div>
                                <div class="col-2 pr-0 pt-1" style="color: rgb(121, 121, 121);">
                                    <i class="fas fa-ellipsis-h float-right p-2 p-xs-0"></i>
                                </div>
                            </div>
                            <div class="row pt-3 mr-2 ml-xs-4 pl-4 pl-sm-0">
                                <div class="col-2" style="padding-right: 0px !important;">
                                    <img src="https://picsum.photos/id/169/200/300" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
                                </div>
                                <div class="col-10 second-bar-posttop pl-0" style="font-size: 14px;">
                                    <a href="#" style="color: rgb(61, 60, 60);">
                                        <b>Ipsum consectetur</b>
                                    </a>
                                    <small class="d-block mr-1" style="margin-top: -4px; color: rgb(102, 101, 101);">Eaque voluptas ab quidem</small>
                                    <small class="d-block" style="margin-top: -4px; color: rgb(102, 101, 101);">
                                        5 saat
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                        </svg>
                                        
                                        <i class="fas fa-globe-americas"></i>
                                    </small>
                                </div>
                                
                            </div>
                        </div>

                        <div class="card-body">
                            <p class="card-body-text">Lorem, ipsum dolor. ❤👌</p>
                            <img class="card-body-img" style="width: 100%;" src="https://picsum.photos/id/65/468/568" alt="post">
                            <div class="second-bar-icons ml-3 my-1">
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #eef7ff; background-color: #0a66c2; height: 16px; width: 16px;">
                                        <i class="fas fa-thumbs-up fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #cbf0d1; background-color: #0ac25d; height: 16px; width: 16px;">
                                        <i class="fas fa-hands-wash fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #f3d3d3; background-color: #c73838; height: 16px; width: 16px;">
                                        <i class="fas fa-heart fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1" style="color: rgb(153, 152, 152); font-size: 14px;">
                                    <span>1143</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                    </svg>
                                    29 Yorum
                                </div>
                            </div>
                        </div>

                        <div class="card-footer-second mx-3 my-2 pt-1">
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-thumbs-up"></i>
                                <span>Beğen</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-comment-dots"></i>
                                <span>Yorum Yap</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-share"></i>
                                <span>Paylaş</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-location-arrow"></i>
                                <span>Gönder</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- post-3 -->

                <div class="second-bar-post mb-2">
                    <div class="card">
                        <div class="card-top">
                            <div class="row pt-2 mr-2 ml-xs-4 pl-4 pl-sm-0">
                                <div class="col-2" style="padding-right: 0px !important;">
                                    <img src="https://picsum.photos/id/19/200/300" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
                                </div>
                                <div class="col-8 second-bar-posttop pl-0" style="font-size: 14px;">
                                    <a href="#" style="color: rgb(61, 60, 60);">
                                        <b>Ipsa Hic</b>
                                    </a>
                                    <small class="d-block mr-1" style="margin-top: -4px; color: rgb(102, 101, 101);">lorem ipsum dolor</small>
                                    <small class="d-block" style="margin-top: -4px; color: rgb(102, 101, 101);">
                                        7 saat
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                        </svg>
                                        
                                        <i class="fas fa-globe-americas"></i>
                                    </small>
                                </div>
                                <div class="col-2 pr-0 pt-1" style="color: rgb(121, 121, 121);">
                                    <i class="fas fa-ellipsis-h float-right p-2 p-xs-0"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <p class="card-body-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure possimus quo nostrum sint incidunt quis eos numquam quam eligendi, voluptatibus laudantium? Similique inventore illo cupiditate voluptatibus atque quod doloribus iste voluptate eius itaque. Tempora laboriosam facere, incidunt ipsa minus nam eveniet, doloribus totam dolores libero consequuntur eum nemo asperiores sit. Natus dolor dignissimos reprehenderit culpa tempora, soluta magni aliquid sequi?</p>
                            <div class="second-bar-icons ml-3 my-1">
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #eef7ff; background-color: #0a66c2; height: 16px; width: 16px;">
                                        <i class="fas fa-thumbs-up fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #cbf0d1; background-color: #0ac25d; height: 16px; width: 16px;">
                                        <i class="fas fa-hands-wash fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1" style="color: rgb(153, 152, 152); font-size: 14px;">
                                    <span>37</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer-second mx-3 my-2 pt-1">
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-thumbs-up"></i>
                                <span>Beğen</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2" style="color: rgb(177, 175, 175);">
                                <i class="far fa-comment-dots"></i>
                                <span>Yorum Yap</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-share"></i>
                                <span>Paylaş</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-location-arrow"></i>
                                <span>Gönder</span>
                            </div>
                        </div>

                        <div class="pl-2 py-2" style="font-size: 12px; color: rgb(153, 152, 152); background-color: rgba(243, 242, 239);">
                            <i class="fas fa-comment-slash"></i>
                            <span>Bu gönderi için yorumlar kapatıldı. Ancak farklı bir reaksiyon verebilir veya paylaşabilirsiniz.</span>
                        </div>
                    </div>
                </div>

                <!-- post-4 -->

                <div class="second-bar-post mb-2">
                    <div class="card">
                        <div class="card-top">
                            <div class="row pt-2 mr-2 ml-xs-4 pl-4 pl-sm-0">
                                <div class="col-2" style="padding-right: 0px !important;">
                                    <img src="https://picsum.photos/id/1018/200/300" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
                                </div>
                                <div class="col-8 second-bar-posttop pl-0" style="font-size: 14px;">
                                    <a href="#" style="color: rgb(61, 60, 60);">
                                        <b>Beatae Unde</b>
                                    </a>
                                    <small class="d-block mr-1" style="margin-top: -4px; color: rgb(102, 101, 101);">lorem ipsum dolor</small>
                                    <small class="d-block" style="margin-top: -4px; color: rgb(102, 101, 101);">
                                        11 saat
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                        </svg>
                                        
                                        <i class="fas fa-globe-americas"></i>
                                    </small>
                                </div>
                                <div class="col-2 pr-0 pt-1" style="color: rgb(121, 121, 121);">
                                    <i class="fas fa-ellipsis-h float-right p-2 p-xs-0"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <img class="card-body-img" style="width: 100%;" src="https://picsum.photos/id/1010/468/568" alt="post">
                            <div class="second-bar-icons ml-3 my-1">
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #eef7ff; background-color: #0a66c2; height: 16px; width: 16px;">
                                        <i class="fas fa-thumbs-up fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #cbf0d1; background-color: #0ac25d; height: 16px; width: 16px;">
                                        <i class="fas fa-hands-wash fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #fffec2; background-color: #e4ca39; height: 20px; width: 20px;">
                                        <i class="fas fa-lightbulb fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1" style="color: rgb(153, 152, 152); font-size: 14px;">
                                    <span>67</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer-second mx-3 my-2 pt-1">
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-thumbs-up"></i>
                                <span>Beğen</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-comment-dots"></i>
                                <span>Yorum Yap</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-share"></i>
                                <span>Paylaş</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-location-arrow"></i>
                                <span>Gönder</span>
                            </div>
                        </div>

                        <div class="pl-4 py-2" style="font-size: 12px; color: rgb(153, 152, 152); background-color: rgba(243, 242, 239);">
                            <span>Buna yorum yapan ilk kişi olun</span>
                        </div>
                        
                    </div>
                </div>

                <!-- post-5 -->

                <div class="second-bar-post mb-2">
                    <div class="card">
                        <div class="card-top">
                            <div class="row pt-2 mr-2 ml-xs-4 pl-4 pl-sm-0">
                                <div class="col-2" style="padding-right: 0px !important;">
                                    <img src="https://picsum.photos/id/1013/200/300" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
                                </div>
                                <div class="col-8 second-bar-posttop pl-0" style="font-size: 14px;">
                                    <a href="#" style="color: rgb(61, 60, 60);">
                                        <b>Mollitia Aliquid</b>
                                    </a>
                                    <small class="d-block mr-1" style="margin-top: -4px; color: rgb(102, 101, 101);">et nesciunt dolores</small>
                                    <small class="d-block" style="margin-top: -4px; color: rgb(102, 101, 101);">
                                        24 saat
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                        </svg>
                                        
                                        <i class="fas fa-globe-americas"></i>
                                    </small>
                                </div>
                                <div class="col-2 pr-0 pt-1" style="color: rgb(121, 121, 121);">
                                    <i class="fas fa-ellipsis-h float-right p-2 p-xs-0"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <p class="card-body-text">😎</p>
                            <img class="card-body-img" style="width: 100%;" src="https://picsum.photos/id/879/468/568" alt="post">
                            <div class="second-bar-icons ml-3 my-1">
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #eef7ff; background-color: #0a66c2; height: 16px; width: 16px;">
                                        <i class="fas fa-thumbs-up fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #f3d3d3; background-color: #c73838; height: 16px; width: 16px;">
                                        <i class="fas fa-heart fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1" style="color: rgb(153, 152, 152); font-size: 14px;">
                                    <a href="#" style="color: rgb(153, 152, 152);">7567</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                    </svg>
                                    
                                    <span>1124 Yorum</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer-second mx-3 my-2 pt-1">
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-thumbs-up"></i>
                                <span>Beğen</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-comment-dots"></i>
                                <span>Yorum Yap</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-share"></i>
                                <span>Paylaş</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-location-arrow"></i>
                                <span>Gönder</span>
                            </div>
                        </div>

                        <div class="row py-3 mr-2 ml-xs-4 pl-4 pl-sm-0">
                            <div class="col-2" style="padding-right: 0px !important;">
                                <img src="{{ asset('img/user2.png') }}" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
                            </div>
                            <div class="col-10 pl-0" >
                                <button type="button" class="second-bar-top-button">Yorum ekle...
                                    <span class="float-right ml-2 mr-2">
                                        <i class="far fa-image fa-lg"></i>
                                    </span>
                                    <span class="float-right">
                                        <i class="far fa-smile fa-lg"></i>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="ml-3" style="font-size: 13px;">
                            <button class="second-bar-sorting dropdown-toggle" style="background-color: white !important;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <b style="color: rgb(110, 110, 110);">En İlgili</b>
                            </button>
                            <div class="dropdown-menu" style="font-size: 13px;" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">
                                    <b class="d-block">En İlgili</b>
                                    <small>En ilgili yorumları gör</small>
                                </a>
                                <a class="dropdown-item" href="#">
                                <b class="d-block">Latest</b>
                                <small>Latest yorumları gör</small>
                                </a>
                            </div>
                        </div>

                        <div class="row pt-2 mr-2 ml-xs-4 pl-4 pl-sm-0">
                            <div class="col-2" style="padding-right: 0px !important;">
                                <img src="https://picsum.photos/id/1011/200/300" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
                            </div>
                            <div class="col-10 second-bar-posttop pt-2 rounded" style="font-size: 14px; background-color: rgba(243, 242, 239);">
                                <a href="#" style="color: rgb(61, 60, 60);">
                                    <b>Elit Perspiciatis</b>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                    </svg>
                                    <span style="color: rgb(153, 152, 152); font-size: 13px;">1</span>
                                </a>
                                <span class="pr-0 pt-1" style="color: rgb(121, 121, 121);">
                                    <i class="fas fa-ellipsis-h float-right p-2 p-xs-0"></i>
                                </span>
                                <span class="d-block mr-1" style="margin-top: -2px; color: rgb(102, 101, 101); font-size: 13px;">lorem ipsum dolor</span>        
                                <p class="mt-2">Lorem, ipsum dolor.🥰</p>
                            </div>
                            
                        </div>

                        <div class="row mb-4">
                            <div class="col offset-2" style="font-size: 13px; color: rgb(153, 152, 152);">
                                <span>Beğen</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                </svg>
                                <div class="d-inline-block">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #eef7ff; background-color: #0a66c2; height: 15px; width: 15px;">
                                        <i class="fas fa-thumbs-up fa-xs"></i>
                                    </span>
                                </div>
                                <span class="mx-1">1</span>
                                <span class="mr-1">|</span>
                                <span>Yanıtla</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- post-6 -->

                <div class="second-bar-post mb-2">
                    <div class="card">
                        <div class="card-top">
                            <div class="row pt-2 mr-2 ml-xs-4 pl-4 pl-sm-0">
                                <div class="col-2" style="padding-right: 0px !important;">
                                    <img src="https://picsum.photos/id/99/200/300" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
                                </div>
                                <div class="col-8 second-bar-posttop pl-0" style="font-size: 14px;">
                                    <a href="#" style="color: rgb(61, 60, 60);">
                                        <b>Similique earum</b>
                                    </a>
                                    <small class="d-block mr-1" style="margin-top: -4px; color: rgb(102, 101, 101);">Quas illo quos quibusdam</small>
                                    <small class="d-block" style="margin-top: -4px; color: rgb(102, 101, 101);">
                                        2 gün
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                        </svg>
                                        
                                        <i class="fas fa-globe-americas"></i>
                                    </small>
                                </div>
                                <div class="col-2 pr-0 pt-1" style="color: rgb(121, 121, 121);">
                                    <i class="fas fa-ellipsis-h float-right p-2 p-xs-0"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <p class="card-body-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur exercitationem dolorum illo quos iusto? Id distinctio dicta reprehenderit voluptates quia obcaecati quos sint dolore at adipisci, ea delectus exercitationem perferendis animi magni sunt deleniti aperiam velit unde illo ab. Et eaque placeat impedit alias perferendis asperiores a dolor. Voluptates, molestiae.🤑</p>
                            <div class="second-bar-icons ml-3 my-1">
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #eef7ff; background-color: #0a66c2; height: 16px; width: 16px;">
                                        <i class="fas fa-thumbs-up fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1" style="color: rgb(153, 152, 152); font-size: 14px;">
                                    <span>7</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer-second mx-3 my-2 pt-1">
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-thumbs-up"></i>
                                <span>Beğen</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-comment-dots"></i>
                                <span>Yorum Yap</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-share"></i>
                                <span>Paylaş</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-location-arrow"></i>
                                <span>Gönder</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- post-7 -->

                <div class="second-bar-post mb-2">
                    <div class="card">
                        <div class="card-top">
                            <div class="row pt-2 mr-2 ml-xs-4 pl-4 pl-sm-0">
                                <div class="col-2" style="padding-right: 0px !important;">
                                    <img src="https://picsum.photos/id/58/200/300" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
                                </div>
                                <div class="col-8 second-bar-posttop pl-0" style="font-size: 14px;">
                                    <a href="#" style="color: rgb(61, 60, 60);">
                                        <b>Dolor Sit Distinctio</b>
                                    </a>
                                    <small class="d-block mr-1" style="margin-top: -4px; color: rgb(102, 101, 101);">lorem ipsum dolor</small>
                                    <small class="d-block" style="margin-top: -4px; color: rgb(102, 101, 101);">
                                        5 gün
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                        </svg>
                                        
                                        <i class="fas fa-globe-americas"></i>
                                    </small>
                                </div>
                                <div class="col-2 pr-0 pt-1" style="color: rgb(121, 121, 121);">
                                    <i class="fas fa-ellipsis-h float-right p-2 p-xs-0"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="https://ak.picdn.net/shutterstock/videos/1055921918/preview/stock-footage-slow-motion-of-happy-young-lady-in-headphones-dancing-and-singing-in-remore-control-having-fun-in.webm"></iframe>
                                </div>
                            <div class="second-bar-icons ml-3 my-1">
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #eef7ff; background-color: #0a66c2; height: 16px; width: 16px;">
                                        <i class="fas fa-thumbs-up fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #e8d1f1; background-color: #785085; height: 20px; width: 20px;">
                                        <i class="fas fa-hand-holding-heart fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #f3d3d3; background-color: #c73838; height: 16px; width: 16px;">
                                        <i class="fas fa-heart fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1" style="color: rgb(153, 152, 152); font-size: 14px;">
                                    <span>58</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer-second mx-3 my-2 pt-1">
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-thumbs-up"></i>
                                <span>Beğen</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-comment-dots"></i>
                                <span>Yorum Yap</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-share"></i>
                                <span>Paylaş</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-location-arrow"></i>
                                <span>Gönder</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- post-8 -->

                <div class="second-bar-post mb-2">
                    <div class="card">
                        <div class="card-top">
                            <div class="row pt-3 mr-2 ml-xs-4 pl-4 pl-sm-0">
                                <div class="col-2" style="padding-right: 0px !important;">
                                    <img src="https://picsum.photos/id/169/200/300" class="second-bar-top-img rounded-circle float-right mr-2" alt="profil-photo">
                                </div>
                                <div class="col-10 second-bar-posttop pl-0" style="font-size: 14px;">
                                    <a href="#" style="color: rgb(61, 60, 60);">
                                        <b>Maxime voluptatem</b>
                                    </a>
                                    <small class="d-block mr-1" style="margin-top: -4px; color: rgb(102, 101, 101);">Laborum repudiandae repellendus iste suscipit</small>
                                    <small class="d-block" style="margin-top: -4px; color: rgb(102, 101, 101);">
                                        1 hafta
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                        </svg>
                                        
                                        <i class="fas fa-globe-americas"></i>
                                    </small>
                                </div>
                                
                            </div>
                        </div>

                        <div class="card-body">
                            <img class="card-body-img" style="width: 100%;" src="https://picsum.photos/id/1000/468/568" alt="post">
                            <div class="second-bar-icons ml-3 my-1">
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #eef7ff; background-color: #0a66c2; height: 16px; width: 16px;">
                                        <i class="fas fa-thumbs-up fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #cbf0d1; background-color: #0ac25d; height: 16px; width: 16px;">
                                        <i class="fas fa-hands-wash fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1">
                                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #f3d3d3; background-color: #c73838; height: 16px; width: 16px;">
                                        <i class="fas fa-heart fa-xs"></i>
                                    </span>
                                </div>
                                <div class="d-inline-block mr-1" style="color: rgb(153, 152, 152); font-size: 14px;">
                                    <span>43</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer-second mx-3 my-2 pt-1">
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-thumbs-up"></i>
                                <span>Beğen</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="far fa-comment-dots"></i>
                                <span>Yorum Yap</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-share"></i>
                                <span>Paylaş</span>
                            </div>
                            <div class="second-bar-button d-inline-block p-2">
                                <i class="fas fa-location-arrow"></i>
                                <span>Gönder</span>
                            </div>
                        </div>
                    </div>
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


    @include('modals.post')
    @include('modals.photo')
    @include('modals.video')
    @include('modals.post-edit')
    @include('modals.post-delete')

@endsection
