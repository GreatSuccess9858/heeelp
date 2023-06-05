<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heeelp | Home</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./fav.png">
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-icons/font/bootstrap-icons.css">

</head>

<body class="{{App::isLocale('en') ? "":"hp-greek"}}">

    <div class="hp-wrapper hp-home">
        <!--================ Header start ================-->
        <header class="hp-header">
            <div class="hp-container">
                <div class="hp-headerarea">
                    <h1>
                        <a href="javascript:void(0);">
                            <img src="./images/logo.png" id="image1" alt="logo" />
                            <audio id="heartbeat" src="./images/help.mp3" preload="auto">
                                Your browser does not support the <code>audio</code> element.
                            </audio>
                        </a>
                    </h1>
                 

                    <div class="hp-lang lang-mobile-sponsor" style="display:none;cursor:pointer">
                        @if(App::isLocale('en'))
                        <img src="./images/sponsor-airdrop-mobile.png" alt="sponsor-airdrop" style="display:none;relative" id="hp-dr-mob" onclick="window.open('./storage/english.pptx', '_blank', 'fullscreen=yes')"/>
                        @else
                        <img src="./images/sponsor-airdrop-mobile-greek.png" alt="sponsor-airdrop" style="display:none;relative" id="hp-dr-mob" onclick="window.open('./storage/greek.pptx', '_blank', 'fullscreen=yes')"/>
                        @endif
                    </div>

                    <div class="hp-lang lang-mobile-desktop">
                        <span>En</span>
                        <div class="form-check form-switch">
                            <label class="hp-switch" for="at-locale">
                                <input type="checkbox" role="switch" {{App::isLocale('en') ? "":"checked"}} id="at-locale">
                                <span class="hp-slider hp-round"></span>
                                <span style="display: none">switch language</span>
                            </label>
                        </div>
                        <span>Gr</span>
                    </div>
                    
                  

                </div>
            </div>
        </header>
        <!--================ Main start ================-->
        <main class="hp-main">
            <div class="hp-container">
                <div class="hp-content">
                    <img src="./images/cloud1.svg" alt="cloud iamge" class="hp-cloud1" />
                    <img src="./images/cloud2.svg" alt="cloud iamge" class="hp-cloud2" />
                    <img src="./images/cloud3.svg" alt="cloud iamge" class="hp-cloud3" />
                    @if(App::isLocale('en'))
                    <img src="./images/sponsor-airdrop.png" alt="sponsor-airdrop" class="hp-airdrop web" id="hp-airdrop-web" style="cursor:pointer;z-index:9999" onclick="window.open('./storage/english.pptx', '_blank')" />
                    @else
                    <img src="./images/sponsor-airdrop-greek.png" alt="sponsor-airdrop" class="hp-airdrop web" id="hp-airdrop-web" style="cursor:pointer;z-index:9999" onclick="window.open('./storage/greek.pptx', '_blank')"/>
                    @endif

                    <div class="billborad" >
                        <div class="billboard-card" id="billboard">
                            <div class="cards" id="dt-details-card">
                                <button style="display:none" id="btn-mb-card" type="button" class="btn btn-primary btn-transparent bg-transparent" onclick="showDetails('dt-details')">
                                    <i class="bi bi-caret-down-fill"></i>
                                  </button>
                                  <a id="hp-datascience" href="/services#hp-datascience">
                                    <div class="inner">
                                        <img src="./images/data_science.svg" alt="{{__('data_science')}}">
                                        <h3 style="margin-bottom:10px;">{{__('data_science')}} <br>
                                            <span style="display:none;font-size:14px;margin-top:12px" id="dt-details"> {{__('data_science_details')}}</span>
                                        </h3>
                                        <p>{{__('data_science_details')}}</p>
                                    </div>
                                </a>
                            </div>
                            <div class="cards" id="dv-details-card">
                                <button style="display:none" id="btn-mb-card"  type="button" class="btn btn-primary btn-transparent bg-transparent" onclick="showDetails('dv-details')">
                                    <i class="bi bi-caret-down-fill"></i>
                                  </button>
                                <a id="hp-development" href="/services#hp-development">
                                    <div class="inner">
                                        <img src="./images/development.svg" alt="{{__('development')}}">
                                        <h3>{{__('development')}}<br>
                                            <span style="display:none;font-size:14px;margin-top:12px" id="dv-details"> {{__('development_details')}}</span></h3>
                                        <p>{{__('development_details')}}</p>
                                    </div>
                                </a>
                            </div>
                            <div class="cards" id="cn-details-card">
                                <button style="display:none" id="btn-mb-card"  type="button" class="btn btn-primary btn-transparent bg-transparent" onclick="showDetails('cn-details')">
                                    <i class="bi bi-caret-down-fill"></i>
                                  </button>
                                <a id="hp-content-services" href="/services#hp-content-services">
                                    <div class="inner">
                                        <img src="./images/content_services.svg" alt="{{__('content_services')}}">
                                        <h3>{{__('content_services')}}<br>
                                            <span style="display:none;font-size:14px;margin-top:12px" id="cn-details"> {{__('content_services_details')}}</span></h3>
                                        <p>{{__('content_services_details')}}</p>
                                    </div>
                                </a>
                            </div>
                            <div class="cards" id="cr-details-card">
                                <button style="display:none" id="btn-mb-card"  type="button" class="btn btn-primary btn-transparent bg-transparent" onclick="showDetails('cr-details')">
                                    <i class="bi bi-caret-down-fill"></i>
                                  </button>
                                <a id="hp-creative-services" href="/services#hp-creative-services">
                                    <div class="inner">
                                        <img src="./images/creative.svg" alt="{{__('creative')}}">
                                        <h3>{{__('creative')}}<br>
                                            <span style="display:none;font-size:14px;margin-top:12px" id="cr-details"> {{__('creative_details')}}</span></h3>
                                        <p>{{__('creative_details')}}</p>
                                    </div>
                                </a>
                            </div>
                          

                        </div>
                    </div>

                    

                    <div class="hp-sheepbox">
                        <div class="face hp-sheep" id="myBtn">
                            <img src="./images/floating-sheep2.png" id="image2" alt="floating-sheep" class="sheep-desk">
                            
                           
                            <img src="./images/chat-widget.svg" id="image2-mobile" alt="floating-sheep" style="display:none;height:120px!important;width:auto!important;">
                            

                            <audio id="heartbeat" src="./images/help.mp3" preload="auto">
                                Your browser does not support the <code>audio</code> element.
                            </audio>
                            <div class="eyes">
                                <div class="eye"></div>
                                <div class="eye"></div>
                            </div>
                        </div>
                        <div class="hp-popup popupdesk">
                            <span>{{__('hp_popup')}}</span>
                        </div>
                        <div class="hp-popup popupmob" style="display:none">
                            <span>{{__('hp_popup')}}</span>
                        </div>
                    </div>

                 

                    <div class="hp-formarea animate__bounceIn" id="myModal">
                        <button class="hp-closebtn">
                            <img src="./images/close-btn.svg" alt="btn image" />
                        </button>
                        @include('form')
                        <div class="hp-shap"></div>
                    </div>
                     
                </div>
                <div class="wave" id="wave1"></div>
            </div>
            
        </main>
        <!--================ Footer start ================-->
        <footer class="hp-footer">
            <div class="hp-container">
                <div class="hp-footermain">
                    <div class="col hp-col1">
                        <div class="faq-drawer">
                            <input class="faq-drawer__trigger" id="faq-drawer" type="checkbox" /><label class="faq-drawer__title" for="faq-drawer">{{__('get_in_touch')}}
                            </label>
                            <div class="faq-drawer__content-wrapper">
                                <div class="faq-drawer__content">
                                    <ul>
                                        <li><a href="mailto:info@heeelp.eu">info@heeelp.eu</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col hp-col2">
                        <div class="faq-drawer">
                            <input class="faq-drawer__trigger" id="faq-drawer-2" type="checkbox" /><label class="faq-drawer__title" for="faq-drawer-2">{{__('company')}}
                            </label>
                            <div class="faq-drawer__content-wrapper">
                                <div class="faq-drawer__content">
                                    <ul>
                                        <li>
                                            <a id="about_us" href="/aboutus-privacypolicy#about_us">{{__('about_us')}}</a>
                                        </li>
                                        <li>
                                            <a id="privacy_policy" href="/aboutus-privacypolicy#privacy_policy">{{__('privacy_policy')}}</a>
                                        </li>
                                        <li>
                                            <a id="terms" href="/aboutus-privacypolicy#terms">{{__('terms')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col hp-col3">
                        <div class="faq-drawer">
                            <input class="faq-drawer__trigger" id="faq-drawer-3" type="checkbox" /><label class="faq-drawer__title" for="faq-drawer-3">{{__('socials')}}
                            </label>
                            <div class="faq-drawer__content-wrapper">
                                <div class="faq-drawer__content">
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
                        </div>
                    </div>
                </div>
                <div class="hp-bottombar">
                    <p>{{__('footer')}}</p>
                </div>
            </div>
            <div class="wave" id="wave1"></div>
        </footer>
    </div>
    <script src="/js/home.js"></script>

    <style>
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
  #image2-mobile {
    animation-name: fade-down;
    animation-duration: 2s;
    animation-timing-function: linear;
  }

  
        </style>
    <script>
        const main = document.getElementById('billboard');
        const two = document.getElementById('image2-mobile');
        const mainHeight = main.offsetHeight;
        two.style.setProperty('--main-height', mainHeight + 'px');
      </script>
    <script>
var flag = false; // Flag to ensure the code inside window.onload runs only once

window.onload = function() {
  if (!flag) {
    flag = true;
    var browserLanguage = window.navigator.userLanguage || window.navigator.language;
    if (browserLanguage.indexOf('el') === 0) {
      setLocale('gr');
    }
  }
};

function setLocale(locale) {
  var currentLocale = getCookie('locale'); // Check if locale cookie already exists
  if (currentLocale !== locale) {
    document.cookie = 'locale=' + locale + '; path=/';
    window.location.reload(); // Reload the page to apply the locale
  }
}

function getCookie(name) {
  var cookies = document.cookie.split('; ');
  for (var i = 0; i < cookies.length; i++) {
    var cookie = cookies[i].split('=');
    if (cookie[0] === name) {
      return cookie[1];
    }
  }
  return null;
}

        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("hp-closebtn")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.classList.add("modal-close");
            setTimeout(function() {
                modal.style.display = "none";
                modal.classList.remove("modal-close");
            }, 750);
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.classList.add("modal-close");
                setTimeout(function() {
                    modal.style.display = "none";
                    modal.classList.remove("modal-close");
                }, 1000);
            }
        }


        document.querySelector("body").addEventListener("mousemove", eyeball);

        function eyeball() {
            'use strict';
            var eye = document.querySelectorAll(".eye");
            eye.forEach(function(eye) {
                let x = (eye.getBoundingClientRect().left) + (eye.clientWidth / 2)
                let y = (eye.getBoundingClientRect().top) + (eye.clientHeight / 2);
                let radian = Math.atan2(event.pageX - x, event.pageY - y) * 2;
                let rot = (radian * (180 / Math.PI) * -1) + 270;
                eye.style.transform = "rotate(" + rot + "deg)"
            })
        }

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

        // var card1 = document.getElementById('card1');
        // card1.addEventListener('mouseover', playAudioOnHover);
        // var card2 = document.getElementById('card2');
        // card2.addEventListener('mouseover', playAudioOnHover);
        // var card3 = document.getElementById('card3');
        // card3.addEventListener('mouseover', playAudioOnHover);
        // var card4 = document.getElementById('card4');
        // card4.addEventListener('mouseover', playAudioOnHover);

        const accordionBtns = document.querySelectorAll(".accordion");

        accordionBtns.forEach((accordion) => {
            accordion.onclick = function() {
                this.classList.toggle("is-open");

                let content = this.nextElementSibling;
                console.log(content);

                if (content.style.maxHeight) {
                    //this is if the accordion is open
                    content.style.maxHeight = null;
                } else {
                    //if the accordion is currently closed
                    content.style.maxHeight = content.scrollHeight + "px";
                    console.log(content.style.maxHeight);
                }
            };
        });

        function showDetails(id) {
            var span_detail=document.getElementById(id);
            var main_card=document.getElementById(id+'-card');
            
            if(span_detail.style.display=='none')
            {
                span_detail.style.display='block'
                main_card.style.height="100px";
            }
            else{
                span_detail.style.display='none'
                main_card.style.height="40px";
            }
        }
        /*
            $('a[href*="#"]').on('click', function (e) {
                e.preventDefault();

                $('html, body').animate(
                    {
                        scrollTop: $($(this).attr('href')).offset().top,
                    },
                    500,
                    'linear'
                );
            });

        */
    </script>
</body>

</html>
