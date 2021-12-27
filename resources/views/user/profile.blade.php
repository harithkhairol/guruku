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
                            <img src="{{ asset('img/user2.png') }}" class="first-colon-img rounded-circle" alt="profil-photo">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="first-colon-body">
                        <h6 class="mb-1">
                        <a href="#" style="color: rgb(26, 26, 26);">
                                <b>{{ Auth::user()->name }}</b>
                            </a>    
                        </h6>
                        <p class="job-text">
                            <!-- Bubo Creative Studio şirketinde Intern Frontend Developer -->
                        </p>
                    </div>

                    <div class="d-md-block">
                        <div class="second-colon-body">
                            <div class="viewing d-flex">
                                <p class="viewing-text">
                                    Connection
                                </p>
                                <a class="viewing-link ml-auto" href="#">
                                    6849
                                </a>
                            </div>
                        </div>
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
                                <b>My Items</b>
                            </span>
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

                            <a id="aboutIcon" class="fas fa-edit ml-auto mr-4" data-toggle="modal" href="#aboutModal" title="About" data-title="about" href=""></a>
                        </div>

                    </div>

                    <div class="activity mb-3 fs-14">
                        <p>{{ $profile->about }}</p>
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

                            <a id="aboutIcon" class="fas fa-plus ml-auto mr-4" data-toggle="modal" href="#experienceModal" title="About" data-desc="name-abc" data-title="experience" href=""></a>
                        </div>

                    </div>

                    <div class="activity mb-3">

                        @forelse($experience as $experience)

                            <div class="row-card py-3">

                                <div class="row-title-card d-flex">
                                    <h6 href="#">
                                        {{ $experience->title }}
                                    </h6>
                                    <a id="aboutIcon" class="fas fa-edit ml-auto mr-4" data-toggle="modal" href="#experienceModal" title="About" data-desc="name-abc" data-title="experience" href=""></a>
                                </div>

                                <b><p>{{ $experience->company_name }} &bull; {{ $experience->employment_type }}</p></b> 
                                <p>{{ date("M Y", strtotime($experience->start_date)) }} - {{ date("M Y", strtotime($experience->end_date)) }} &bull; {{ date_diff(new \DateTime($experience->start_date), new \DateTime($experience->end_date))->format("%y Years, %m Months") }}</p>
                                <p>{{ $experience->location }}</p>

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

                            <a id="aboutIcon" class="fas fa-plus ml-auto mr-4" data-toggle="modal" href="#educationModal" title="About" data-desc="name-abc" data-title="experience" href=""></a>
                        </div>

                    </div>

                    <div class="activity mb-3">

                        <div class="row-card py-3">

                            <div class="row-title-card d-flex">
                                <h6 href="#">
                                    Software Developer
                                </h6>
                                <a id="aboutIcon" class="fas fa-edit ml-auto mr-4" data-toggle="modal" href="#experienceModal" title="About" data-desc="name-abc" data-title="experience" href=""></a>
                            </div>

                            <b><p>Pacton Technologies Sdn Bhd</p></b>
                            <p>Oct 2021 - Present &bull; 3 Mos</p>
                            <p>Selangor, Malaysia</p>

                        </div>

                        <div class="row-card py-3">

                            <div class="row-title-card d-flex">
                                <h6 href="#">
                                    Software Developer
                                </h6>
                                <a id="aboutIcon" class="fas fa-edit ml-auto mr-4" data-toggle="modal" href="#experienceModal" title="About" data-desc="name-abc" data-title="experience" href=""></a>
                            </div>

                            <b><p>Pacton Technologies Sdn Bhd</p></b>
                            <p>Oct 2021 - Present &bull; 3 Mos</p>
                            <p>Selangor, Malaysia</p>

                        </div>
                        
                    </div>
       
                </div>

            </div>

        </div>

        <div class="col-lg-3 col-md-5 third-colon-left p-lg-0 rounded-top">
            
            <div class="card">
                <div class="left-bar-top rounded pb-3">
                    <div class="pt-3 pb-2 pl-2 pr-3 d-flex">
                        <b style="display: inline-block;">
                            Today's Top
                        </b>
                        <i class="fas fa-info-circle ml-auto"></i>
                    </div>
                    <div class="heading-left mb-2">
                        <b class="mx-2 d-block" style="font-size: 14px;">1. Discussing Racism with Dr. Christina</b>
                        <div class="d-flex justify-content-between">
                            <small class="mx-4">Christina Greer</small>
                            <i class="fas fa-external-link-alt mr-2 d-none" style="color:rgb(153, 152, 152);"></i>
                        </div>
                    </div>
                    <div class="heading-left mb-2">
                        <b class="mx-2 d-block" style="font-size: 14px;">2. What is Graphic Design?</b>
                        <div class="d-flex justify-content-between">
                            <small class="mx-4">Sean Adams</small>
                            <i class="fas fa-external-link-alt mr-2 d-none" style="color:rgb(153, 152, 152);"></i>
                        </div>
                    </div>
                    <div class="heading-left mb-3">
                        <b class="mx-2 d-block" style="font-size: 14px;">3. Unconscious Bias</b>
                        <div class="d-flex justify-content-between">
                            <small class="mx-4">Stacey Gordon</small>
                            <i class="fas fa-external-link-alt mr-2 d-none" style="color:rgb(153, 152, 152);"></i>
                        </div>
                    </div>

                    <div class="left-bar-bottom row mx-2 pl-2 pr-1" style="color: rgb(153, 152, 152); font-size: 15px;">
                        <div class="col-10 text-center">
                            <span class="pl-1">
                                Guru Learning‘de daha fazlasını göster
                            </span>
                        </div>
                        <div class="col-2 pl-0">
                            <i class="fas fa-arrow-right"></i>
                        </div>                                  
                    </div>
                </div>
            </div>

     
            
        </div>

        <!-- third-colon -->
        <div class="col-lg-12 third-colon-left p-lg-0 rounded-top">
            
            <div class="sticky">
                <div class="left-bar-body rounded mt-2 mb-1">

                </div>

                <div class="left-bar-footer">
                    <div class="row">
                        <div class="col-lg-3 col-2 mr-lg-0 mr-1 left-foot">
                            <a href="#">
                                Hakkında
                            </a>
                        </div>
                        <div class="col-lg-3 col-2 mr-lg-0 mr-1 left-foot">
                            <a href="#">
                                Erişebilirlik
                            </a>
                        </div>
                        <div class="col-lg-6 col-3 mr-lg-0 mr-1 left-foot">
                            <a href="#">
                                Yardım Merkezi
                            </a>
                        </div>
                        <div class="col-lg-7 col-3 left-foot">
                            <div class="dropup">
                                <button type="button" class="dropup-button" style="border: none;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Gizlilik ve Koşullar
                                    <i class="fas fa-chevron-up fa-xs"></i>
                                </button>
                                <div class="dropdown-menu" style="font-size: 12px;">
                                    <a class="dropdown-item" href="#">Gizlilik Politikası</a>
                                    <a class="dropdown-item" href="#">Kullanıcı Anlaşması</a>
                                    <a class="dropdown-item" href="#">Çerez Politikası</a>
                                    <a class="dropdown-item" href="#">Telif Hakkı Politikası</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-3 left-foot">
                            <a href="#">
                                Reklam Tercihleri
                            </a>
                        </div>
                        <div class="col-lg-6 col-2 left-foot">
                            <a href="#">
                                Reklam
                            </a>
                        </div>
                        <div class="col-lg-6 col-3 left-foot">
                            <div class="dropup">
                                <button type="button" class="dropup-button" style="border: none;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ticari Hizmetler
                                    <i class="fas fa-chevron-up fa-xs"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <div class="row pl-1 title-border">
            
                                        <div class="col-12 mb-1">
                                            <a href="#">
                                                <h6 class="dropdown-footer-title">Yetenek ve Çözümleri</h6>
                                                <p class="dropdown-footer-text">Yetenekleri bulun, onların ilgisini çekin ve işe alın</p>
                                            </a>
                                        </div>
            
                                        <div class="col-12 mb-1">
                                            <a href="#">
                                                <h6 class="dropdown-footer-title">Yetenek ve Çözümleri</h6>
                                                <p class="dropdown-footer-text">Yetenekleri bulun, onların ilgisini çekin ve işe alın</p>
                                            </a>
                                        </div>
            
                                        <div class="col-12 mb-1">
                                            <a href="#">
                                                <h6 class="dropdown-footer-title">Satış Çözümleri</h6>
                                                <p class="dropdown-footer-text">Satış fırsatlarının kapısını açın</p>
                                            </a>
                                        </div>
            
                                        <div class="col-12 mb-1">
                                            <a href="#">
                                                <h6 class="dropdown-footer-title">Ücretsiz iş ilanı yayınlayın</h6>
                                                <p class="dropdown-footer-text">İş ilanınızı kalifiye adayların önüne serin</p>
                                            </a>
                                        </div>
            
                                        <div class="col-12 mb-1">
                                            <a href="#">
                                                <h6 class="dropdown-footer-title">Pazarlama Çözümleri</h6>
                                                <p class="dropdown-footer-text">İşinizi büyütün ve yeni müşteriler edinin</p>
                                            </a>
                                        </div>
            
                                        <div class="col-12 mb-1">
                                            <a href="#">
                                                <h6 class="dropdown-footer-title">Eğitim Çözümleri</h6>
                                                <p class="dropdown-footer-text">Organizasyonunuzda yetenekler geliştirin</p>
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="row pl-1">
                                        <div class="col-12 py-2">
                                            <a href="#">
                                                <h6 class="dropdown-footer-title">
                                                    Şirket Sayfası Oluştur
                                                    <i class="fas fa-plus"></i>                                       
                                                </h6>
                                            </a>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-4 left-foot">
                            <a href="#">
                                Guru uygulamasını yükle
                            </a>
                        </div>
                        <div class="col-lg-4 col-2 left-foot">
                            <a href="#">
                                Daha Fazla
                            </a>
                        </div>
                    </div>
                    <div class="left-bar-end mt-3 text-center" style="font-size: 12px;">
                        <div>
                            <b style="color: #0a66c2;">Guru</b> 
                            &bull;
                            <span style="color: rgb(68, 68, 68);">
                                Tinka © 2021
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>

@endsection

@section('script')

    @include('modals.about')
    @include('modals.experience')
    @include('modals.education')

@endsection