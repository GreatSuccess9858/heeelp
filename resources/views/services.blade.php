<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heeelp | Services </title>
    <link rel="icon" type="image/png" sizes="32x32" href="./fav.png">
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    
</head>

<body class="{{App::isLocale('en') ? "":"hp-greek"}}">
    <div class="hp-wrapper hp-innerpage">
        <!--================ Main start ================-->
        <main class="hp-main">
            <!--================ Header start ================-->
            <section class="hp-scroll">
                <header class="hp-header">
                    <div class="hp-container">
                        <div class="hp-headerarea">
                            <h1>
                                <a href="/">
                                    <img src="./images/logo.png" id="image1" alt="logo" />
                                </a>
                            </h1>
                            <div class="hp-lang">
                                <span>En</span>
                                <label class="hp-switch" for="at-locale">
                                    <input type="checkbox" role="switch" {{App::isLocale('en') ? "":"checked"}} id="at-locale">
                                    <span class="hp-slider hp-round"></span>
                                    <span style="display: none">switch language</span>
                                </label>
                                <span>Gr</span>
                            </div>
                        </div>
                    </div>
                </header>
                <!--================ Data Science start ================-->
                <section class="hp-datascience" >
                    <div class="hp-container position-relative">
                        <img src="./images/cloud-python.svg" alt="cloud python" class="hp-cloud hp-cloud-python" />
                        <img src="./images/cloud-machine-learning.svg" alt="cloud machine learning" class="hp-cloud hp-cloud-machine-learning" />
                        <img src="./images/cloud-statistics.svg" alt="cloud statistics" class="hp-cloud hp-cloud-statistics" />
                        <img src="./images/cloud-r.svg" alt="cloud r" class="hp-cloud hp-cloud-r" />
                        <img src="./images/cloud-matlab.svg" alt="cloud matlab" class="hp-cloud hp-cloud-matlab" />
                        <div class="row align-items-center hp-scroll" id="section-1">
                            <div class="col-lg-6">
                                <div class="hp-datascience-content">
                                    <i class="hp-icon">
                                        <img src="./images/icon-data-science.svg" alt="{{__('data_science')}}" />
                                    </i>
                                    <h2>{{__('data_science')}}</h2>
                                    <div class="hp-description">
                                        <p>{{__('data_science_content')}}</p>
                                    </div>
                                </div>
                            </div>
                             
                               <div class="col-lg-6" id="hp-datascience">
                                <figure class="hp-datascience-img">
                                    <div class="grid-container">
                                        <div class="grid-item" style="height:240px" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                          <div class="image-overlay-data">
                                            <img src="./images/data1.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                          </div>
                                        </div>
                                    
                                      
                                        <div class="grid-item span-two-rows" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                          <div class="image-overlay-data">
                                             <img class="video-button" src="./images/video.png"/>
                                            <img src="./images/data4.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                          </div>
                                        </div>
                                        <div class="grid-item" style="height:240px" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                          <div class="image-overlay-data" >
                                            <img src="./images/data3.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                          </div>
                                        </div>
                                        <div class="grid-item" style="height:240px" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                          <div class="image-overlay-data" >
                                            <img src="./images/data5.jpg" alt="{{__('data_science')}}" class="img-inner"/>
                                          </div>
                                        </div>
                                        <div class="grid-item" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                          <div class="image-overlay-data">
                                            <img src="./images/data2.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                          </div>
                                        </div>
                                      </div>


                                       {{-- for mobile devices --}}
                                   <div class="d-md-none data-mobile">
                                    <div class="row flex-nowrap overflow-auto py-2" >
                                      <div class="col-6 col-md-4 p-2">
                                        <div class="image-overlay">
                                          <img src="./images/data1.jpg" alt="{{__('data_science')}}" height="270px" data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="0"/>
                                        </div>
                                      </div>
                                      <div class="col-6 col-md-4 p-2">
                                        <div class="image-overlay">
                                          <img src="./images/data4.jpg" alt="{{__('data_science')}}" height="270px" data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="1"/>
                                        </div>
                                      </div>
                                      <div class="col-6 col-md-4 p-2">
                                        <div class="image-overlay">
                                          <img src="./images/data3.jpg" alt="{{__('data_science')}}" height="270px" data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="2"/>
                                        </div>
                                      </div>
                                      <div class="col-6 col-md-4 p-2">
                                        <div class="image-overlay">
                                          <img src="./images/data5.jpg" alt="{{__('data_science')}}" height="270px" data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="3"/>
                                        </div>
                                      </div>
                                      <div class="col-6 col-md-4 p-2">
                                        <div class="image-overlay">
                                          <img src="./images/data2.jpg" alt="{{__('data_science')}}" height="270px" data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="4"/>
                                        </div>
                                      </div>
                                    </div>
                                  </div>



                                  

                                  <div class="modal fade" id="carouselModal" tabindex="-1" aria-labelledby="carouselModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                      <div class="modal-content">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                          <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                            <!-- add more indicators for each image -->
                                          </div>
                                          <div class="carousel-inner">
                                            <div class="carousel-item active">
                                              <img src="./images/data1.jpg" class="d-block vh-100" id="img-modal" alt="{{__('data_science')}}" />
                                            </div>
                                            <div class="carousel-item">
                                              <img src="./images/data4.jpg" class="d-block vh-100" id="img-modal" alt="{{__('data_science')}}" />
                                            </div>
                                            <div class="carousel-item">
                                              <img src="./images/data3.jpg" class="d-block vh-100" id="img-modal" alt="{{__('data_science')}}" />
                                            </div>
                                            <div class="carousel-item">
                                              <img src="./images/data5.jpg" class="d-block vh-100" id="img-modal" alt="{{__('data_science')}}" />
                                            </div>
                                            <div class="carousel-item">
                                              <img src="./images/data2.jpg" class="d-block vh-100" id="img-modal" alt="{{__('data_science')}}" />
                                            </div>
                                          </div>
                                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                          </button>
                                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                          </button>
                                          <button type="button" class="btn-close close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </figure>
                            </div>

                            
                        </div>
                    </div>
                </section>
              </section>
            <!--================ Development start ================-->
       
            <section class="hp-development" >
                <div class="hp-container">
                    <div id="myBtn">
                        <img src="./images/sheep-widget.png" alt="sheep image" id="image2" class="hp-sheeimg">
                        <audio id="heartbeat" src="./images/help.mp3" preload="auto">
                            Your browser does not support the <code>audio</code> element.
                        </audio>
                        <div class="hp-formarea hp-formareas animate__bounceIn bounce_inner" id="myModal">
                            <button class="hp-closebtn">
                                <img src="./images/close-btn.svg" alt="btn image" />
                            </button>
                            @include('form')
                            <div class="hp-shap hp-shaps"></div>
                        </div>
                    </div>
                    <div class="row align-items-center hp-scroll" id="section-2">
                        <div class="col-lg-6">
                            <div class="hp-development-content">
                                <i class="hp-icon">
                                    <img src="./images/development-icon.svg" alt="{{__('development')}}" />
                                </i>
                                <h2 style="font-family: 'Gloria Hallelujah', Arial, Helvetica, sans-serif; !important">{{__('development')}}</h2>
                                <div class="hp-description">
                                    <p>{{__('development_content')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" id="hp-development">
                            <figure class="hp-development-img">
                                <div class="grid-container">
                                    <div class="grid-item" style="height:240px" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                      <div class="image-overlay-dev">
                                        <img src="./images/data1.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                      </div>
                                    </div>
                                    <div class="grid-item span-two-rows" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                      <div class="image-overlay-dev">
                                        <img class="video-button" src="./images/video.png"/>
                                        <img src="./images/data4.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                      </div>
                                    </div>
                                    <div class="grid-item" style="height:240px" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                      <div class="image-overlay-dev">
                                        <img src="./images/data3.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                      </div>
                                    </div>
                                    <div class="grid-item" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                      <div class="image-overlay-dev">
                                        <img src="./images/data5.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                      </div>
                                    </div>
                                    <div class="grid-item" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                      <div class="image-overlay-dev">
                                        <img src="./images/data2.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                      </div>
                                    </div>
                                  </div>


                                      {{-- for mobile devices --}}
                                   <div class="d-md-none dev-mobile">
                                    <div class="row flex-nowrap overflow-auto py-2" >
                                      <div class="col-6 col-md-4 p-2">
                                        <div class="image-overlay">
                                          <img src="./images/data1.jpg" alt="{{__('data_science')}}" height="270px" data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="0"/>
                                        </div>
                                      </div>
                                      <div class="col-6 col-md-4 p-2">
                                        <div class="image-overlay">
                                          <img src="./images/data4.jpg" alt="{{__('data_science')}}" height="270px"  data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="1"/>
                                        </div>
                                      </div>
                                      <div class="col-6 col-md-4 p-2">
                                        <div class="image-overlay">
                                          <img src="./images/data3.jpg" alt="{{__('data_science')}}" height="270px"  data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="2"/>
                                        </div>
                                      </div>
                                      <div class="col-6 col-md-4 p-2">
                                        <div class="image-overlay">
                                          <img src="./images/data5.jpg" alt="{{__('data_science')}}" height="270px"  data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="3"/>
                                        </div>
                                      </div>
                                      <div class="col-6 col-md-4 p-2">
                                        <div class="image-overlay">
                                          <img src="./images/data2.jpg" alt="{{__('data_science')}}" height="270px"  data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="4"/>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
       
            <!--================ Content Services start ================-->
        
            <section class="hp-content-services" >
                <div class="hp-container">
                    <div class="row align-items-center hp-scroll" id="section-3">
                        <div class="col-lg-6">
                            <div class="hp-contentservices-content">
                                <i class="hp-icon">
                                    <img src="./images/content-services-icon.svg" alt="{{__('content_services')}}" />
                                </i>
                                <h2>{{__('content_services')}}</h2>
                                <div class="hp-description">
                                    <p>{{__('content_services_content')}}.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" id="hp-content-services">
                            <figure class="hp-content-services-img">
                                <div class="grid-container">
                                    <div class="grid-item" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                      <div class="image-overlay-content">
                                        <img src="./images/data1.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                      </div>
                                    </div>
                                    <div class="grid-item span-two-rows" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                      <div class="image-overlay-content">
                                        <img class="video-button" src="./images/video.png"/>
                                        <img src="./images/data4.jpg" alt="{{__('data_science')}}" class="img-inner"/>
                                      </div>
                                    </div>
                                    <div class="grid-item" style="height:240px" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                      <div class="image-overlay-content">
                                        <img src="./images/data3.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                      </div>
                                    </div>
                                    <div class="grid-item" style="height:240px" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                      <div class="image-overlay-content">
                                        <img src="./images/data5.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                      </div>
                                    </div>
                                    <div class="grid-item" style="height:240px" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                      <div class="image-overlay-content">
                                        <img src="./images/data2.jpg" alt="{{__('data_science')}}" class="img-inner"/>
                                      </div>
                                    </div>
                                  </div>

                                   {{-- for mobile devices --}}
                                   <div class="d-md-none content-mobile">
                                    <div class="row flex-nowrap overflow-auto py-2" >
                                      <div class="col-6 col-md-4 p-2">
                                        <div class="image-overlay">
                                          <img src="./images/data1.jpg" alt="{{__('data_science')}}" height="270px"  data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="0"/>
                                        </div>
                                      </div>
                                      <div class="col-6 col-md-4 p-2">
                                        <div class="image-overlay">
                                          <img src="./images/data4.jpg" alt="{{__('data_science')}}" height="270px"  data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="1"/>
                                        </div>
                                      </div>
                                      <div class="col-6 col-md-4 p-2">
                                        <div class="image-overlay">
                                          <img src="./images/data3.jpg" alt="{{__('data_science')}}" height="270px"  data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="2"/>
                                        </div>
                                      </div>
                                      <div class="col-6 col-md-4 p-2">
                                        <div class="image-overlay">
                                          <img src="./images/data5.jpg" alt="{{__('data_science')}}" height="270px"  data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="3"/>
                                        </div>
                                      </div>
                                      <div class="col-6 col-md-4 p-2">
                                        <div class="image-overlay">
                                          <img src="./images/data2.jpg" alt="{{__('data_science')}}" height="270px"  data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="4"/>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </figure>
                        </div>
                    </div>
                </div>
       
            </section>
            <!--================ Creative Services start ================-->
         
            <section class="hp-creative-services" >
                <div class="hp-container">
                    <div class="row align-items-center hp-scroll" id="section-4">
                        <div class="col-lg-6"  style="margin-top:120px;">
                            <div class="hp-creativeservices-content">
                             
                                <i class="hp-icon">
                                    <img src="./images/creative-icon.svg" alt="{{__('creative')}}" />
                                </i>
                                <h2>{{__('creative')}}</h2>
                                <div class="hp-description">
                                    <p>{{__('creative_content')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6"  id="hp-creative-services">
                            <figure class="hp-content-services-img">
                                <div class="grid-container">
                                    <div class="grid-item" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                      <div class="image-overlay-creative">
                                        <img src="./images/data1.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                      </div>
                                    </div>
                                    <div class="grid-item span-two-rows" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                      <div class="image-overlay-creative">
                                        <img class="video-button" src="./images/video.png"/>
                                        <img src="./images/data4.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                      </div>
                                    </div>
                                    <div class="grid-item" style="height:240px" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                      <div class="image-overlay-creative">
                                        <img src="./images/data3.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                      </div>
                                    </div>
                                    <div class="grid-item" style="height:240px" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                      <div class="image-overlay-creative">
                                        <img src="./images/data5.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                      </div>
                                    </div>
                                    <div class="grid-item" style="height:240px" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                      <div class="image-overlay-creative">
                                        <img src="./images/data2.jpg" alt="{{__('data_science')}}" class="img-inner" />
                                      </div>
                                    </div>
                                  </div>


                                    {{-- for mobile devices --}}
                                    <div class="d-md-none service-mobile">
                                      <div class="row flex-nowrap overflow-auto py-2" >
                                        <div class="col-6 col-md-4 p-2">
                                          <div class="image-overlay">
                                            <img src="./images/data1.jpg" alt="{{__('data_science')}}" height="270px"  data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="0"/>
                                          </div>
                                        </div>
                                        <div class="col-6 col-md-4 p-2">
                                          <div class="image-overlay">
                                            <img src="./images/data4.jpg" alt="{{__('data_science')}}" height="270px"  data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="1"/>
                                          </div>
                                        </div>
                                        <div class="col-6 col-md-4 p-2">
                                          <div class="image-overlay">
                                            <img src="./images/data3.jpg" alt="{{__('data_science')}}" height="270px"  data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="2"/>
                                          </div>
                                        </div>
                                        <div class="col-6 col-md-4 p-2">
                                          <div class="image-overlay">
                                            <img src="./images/data5.jpg" alt="{{__('data_science')}}" height="270px"  data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="3"/>
                                          </div>
                                        </div>
                                        <div class="col-6 col-md-4 p-2">
                                          <div class="image-overlay">
                                            <img src="./images/data2.jpg" alt="{{__('data_science')}}" height="270px"  data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="4"/>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
         
        </main>
        <!--================ Footer start ================-->
        <!-- <footer class="hp-footer">
        <div class="hp-container">
            <div class="hp-footermain">
                <div class="col hp-col1">
                    <h2> Get in touch
                        <img src="./images/icon-angleup.svg" alt="icon" />
                    </h2>
                    <p>info@heeelp.eu</p>
                </div>
                <div class="col hp-col2">
                    <h2> Company
                        <img src="./images/icon-angleup.svg" alt="icon" />
                    </h2>
                    <ul>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">Privacy policy</a>
                        </li>
                        <li>
                            <a href="#">Terms & conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="col hp-col3">
                    <h2> Socials
                        <img src="./images/icon-angleup.svg" alt="icon" />
                    </h2>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="./images/icon-facebook.svg" alt="icon" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./images/icon-instagram.svg" alt="icon" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./images/icon-twitter.svg" alt="icon" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./images/icon-linkedin.svg" alt="icon" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hp-bottombar">
                <p>© 2023, HEEELP, ICT & Research services.</p>
            </div>
        </div>
    </footer> -->
    </div>
    {{-- <script src="/js/home.js"></script> --}}
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.5.2/randomColor.js"></script>
    <script src="https://bundle.run/css-scroll-snap-polyfill@0.1.2"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./js/main.js"></script>
    <script src="/js/home.js"></script>
    <script>
        function playAudioOnHover() {
            var audios = document.querySelectorAll('audio');

            // this.addEventListener('mouseover', function() {
            [].forEach.call(audios, function(audio) {
                audio.play();
            });
            // }, false);

            this.addEventListener('mouseleave', function() {
                [].forEach.call(audios, function(audio) {
                    audio.pause();
                    audio.currentTime = 0;
                });
            }, false);
        }

        var image1 = document.getElementById('image1');
        image1.addEventListener('mouseover', playAudioOnHover);

        var image2 = document.getElementById('image2');
        image2.addEventListener('mouseover', playAudioOnHover);

        AOS.init();

        $('a[href*="#"]').on('click', function(e) {
            e.preventDefault();

            $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top,
                },
                500,
                'linear'
            );
        });
    </script>

    <style>
     .hp-main ::-webkit-scrollbar {
        width: 1px !important;
      }

      /* For Firefox */
      .hp-main ::-moz-scrollbar {
        width: 1px !important;
      }

      /* For Microsoft Edge */
      .hp-main ::-ms-scrollbar {
        width: 1px !important;
      }

      .data-mobile ::-webkit-scrollbar {
        width: 10px;
      }

      .data-mobile ::-webkit-scrollbar-track {
        background-color: #FFF2E5;
      }

      .data-mobile ::-webkit-scrollbar-thumb {
        background-color: #EEE7D3;
        border-radius: 5px;
      }

      .data-mobile ::-moz-scrollbar {
        width: 10px;
      }

      .data-mobile ::-moz-scrollbar-track {
        background-color:#FFF2E5;
      }

      .data-mobile ::-moz-scrollbar-thumb {
        background-color: #EEE7D3;
        border-radius: 5px;
      }

      /* For Internet Explorer */
      .data-mobile .scrollbar {
        scrollbar-width: thin;
        scrollbar-color: #EEE7D3 #FFF2E5;
      }

      





      .content-mobile ::-webkit-scrollbar {
        width: 10px;
      }

      .content-mobile ::-webkit-scrollbar-thumb {
        background-color: #ffcc99;
        border-radius: 5px;
      }

      .content-mobile ::-moz-scrollbar {
        width: 10px;
      }

  

      .content-mobile ::-moz-scrollbar-thumb {
        background-color: #ffcc99;
        border-radius: 5px;
      }

      /* For Internet Explorer */
      .content-mobile .scrollbar {
        scrollbar-width: thin;
        scrollbar-color: #ffcc99 ;
      }



      .service-mobile ::-webkit-scrollbar {
        width: 10px;
      }

      .service-mobile ::-webkit-scrollbar-thumb {
        background-color: #D7C8A5;
        border-radius: 5px;
      }

      .service-mobile ::-moz-scrollbar {
        width: 10px;
      }

  

      .service-mobile ::-moz-scrollbar-thumb {
        background-color: #D7C8A5;
        border-radius: 5px;
      }

      /* For Internet Explorer */
      .service-mobile .scrollbar {
        scrollbar-width: thin;
        scrollbar-color: #D7C8A5 ;
      }


      /* Define the keyframes for the animation */
@keyframes fade-down {
  from {
    opacity: 0;
    transform: translateY(-50px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Apply the animation to the element */
.hp-sheeimg {
  animation-name: fade-down;
  animation-duration: 2s;
  animation-timing-function: linear;
  display: block !important;
}

.close-btn {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 10;
  background-color: #FFF2E5;
  height: 32px;
  width: 32px;
  border-radius: 50%;
  margin: 6px 12px 12px 12px;
}
      </style>
</body>

</html>
