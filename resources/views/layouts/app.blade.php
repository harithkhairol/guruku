<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('img/guru.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
</head>
<body>

    @include('layouts.navigation')

    <!-- body-content -->

    <div class="body-content">
        <div class="container pt-5">

            <!-- container-body -->

            <div class="container-body">

                @include('layouts.alert')

                @yield('content')

            </div>

        </div>
    </div>
    
    
    <!-- icons -->

    <!--
        <div>
                <div class="d-inline-block">
                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #eef7ff; background-color: #0a66c2; height: 20px; width: 20px;">
                        <i class="fas fa-thumbs-up fa-xs"></i>
                    </span>
                </div>
                <div class="d-inline-block">
                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #cbf0d1; background-color: #0ac25d; height: 20px; width: 20px;">
                        <i class="fas fa-hands-wash fa-xs"></i>
                    </span>
                </div>
                <div class="d-inline-block">
                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #e8d1f1; background-color: #785085; height: 20px; width: 20px;">
                        <i class="fas fa-hand-holding-heart fa-xs"></i>
                    </span>
                </div>
                <div class="d-inline-block">
                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #f3d3d3; background-color: #c73838; height: 20px; width: 20px;">
                        <i class="fas fa-heart fa-xs"></i>
                    </span>
                </div>
                <div class="d-inline-block">
                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #fffec2; background-color: #e4ca39; height: 20px; width: 20px;">
                        <i class="fas fa-lightbulb fa-xs"></i>
                    </span>
                </div>
                <div class="d-inline-block">
                    <span class="rounded-circle justify-content-center align-items-center d-flex " style="color: #e8d1f1; background-color: #785085; height: 20px; width: 20px;">
                        <i class="far fa-frown-open fa-xs"></i>
                    </span>
                </div>
            </div>
    -->
    
    <!-- js -->
     <!-- <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script> -->
    <!--<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> -->

    <!-- Jquery JS--> 
    <!-- <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>     -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <!-- Bootstrap JS-->
    <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    

    @yield('script')
    
</body>
</html>