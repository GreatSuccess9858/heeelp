<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heeelp | About us & Privacy Policy </title>
    <link rel="icon" type="image/png" sizes="32x32" href="./fav.png">
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body class="{{App::isLocale('en') ? "":"hp-greek"}}">
    <div class="hp-wrapper hp-innerpage">
        <main class="hp-main">
            <!--================ Header start ================-->
            <section class="hp-scroll" id="about_us">
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

                <!--================ Main start ================-->
                <!--================ About us start ================-->
                <section class="hp-aboutus" id="about_us">
                    <div class="hp-container">
                        <img src="./images/cloud4.svg" alt="cloud iamge" class="hp-cloud hp-cloud4" id="mobile-cloud-about"/>
                        <img src="./images/cloud5.svg" alt="cloud iamge" class="hp-cloud hp-cloud5" />
                        <img src="./images/cloud6.svg" alt="cloud iamge" class="hp-cloud hp-cloud6" />
                        <h2>{{__('about_us')}}</h2>
                        <div class="hp-description">
                            <p>{{__('about_us_content')}}</p>
                        </div>
                    </div>
                </section>
            </section>
            <!--================ Privacy Policy start ================-->
            <section class="hp-privacypolicy" id="privacy_policy">
                <div class="hp-container">
                    <div id="myBtn">
                        <img src="./images/chat-widget.svg" alt="sheep image" id="image2" class="hp-sheeimg">
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
                    <div class="hp-scroll" id="privacy_policy">
                        <h2 style="font-family: 'invasporos-regular';">{{__('privacy_policy')}}</h2>
                        <div class="hp-description">
                            <p>{{__('privacy_policy_content')}}</p>
                        </div>
                    </div>
                </div>
            </section>
            <!--================ Terms And Conditions start ================-->
            <section class="hp-terms-and-condition" id="terms">
                <div class="hp-container">
                    <div class="hp-scroll" id="terms_and_condition">
                        <h2 style="font-family: 'invasporos-regular';">{{__('terms')}}</h2>
                        <div class="hp-description">
                            <p>{{__('terms_content')}}</p>
                            <br> <br> <br> <br> <br> <br>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="/js/home.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.5.2/randomColor.js"></script>
    <script src="https://bundle.run/css-scroll-snap-polyfill@0.1.2"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./js/main.js"></script>
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
    </script>

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
.hp-sheeimg {
  animation-name: fade-down;
  animation-duration: 2s;
  animation-timing-function: linear;
  display: block !important;
}
      </style>
</body>

</html>
