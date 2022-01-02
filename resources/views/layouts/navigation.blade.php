<!-- navbar-->

<div class="border-bottom fixed-top">
        <div class="container">
         

            <!-- start -->

            <nav class="navbar navbar-expand-lg navbar-light mb-1">
                <a class="navbar-brand" href="/"><img src="{{ asset('img/guru.png') }}" width="100px" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <form class="form-inline my-2 my-lg-0" action="{{ route('search') }}">
                        <input class="form-control mr-sm-2" name="result" type="search" placeholder="Search for guru" aria-label="Search">
                        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                    </form>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>

                        @if(Auth::check())

                            <li class="nav-item dropdown">

                                

                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                User
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item disabled" href="#">{{ Auth::user()->name }}</a>

                                
                                <a class="dropdown-item" href="{{ route('user.profile', ['name'=>str_replace( [' ','/', '-'] , ['+','=', ','] , Auth::user()->name), 'id'=> Auth::user()->id] ) }}">View Profile</a>
                                
                                <div class="dropdown-divider"></div>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();" class="dropdown-item">Sign Out</a>
                                </form>
                                </div>
                            </li>
                                
                        @else

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            
                        @endif

                    </ul>
                    
                </div>
            </nav>

            <!-- end -->
        </div>
    </div>