<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Youth Creator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:500,600,700,900&display=swap" rel="stylesheet">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

        <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
    </head>
    <body>
        <div id="app"></div>

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>
          <!-- icons -->
        {{-- <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script> --}}
        <!-- gsap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"
            integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
        <!-- three js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/108/three.min.js"
            integrity="sha256-3mBEX8I0uMLF7+AUjJeTCelosuorzYpqwBMBPDTyQqY=" crossorigin="anonymous"></script>

        <script src="{{ asset('js/app.js') }}"></script>
        {{-- <script src="{{ asset('js/js-mouse.js') }}"></script> --}}

        <script>
            // new hoverEffect({
            //   parent: document.querySelector('.distortion'),
            //   intensity: 0.2,
            //   image1: 'images/01.png',
            //   image2: 'images/02.png',
            //   displacementImage: './images/diss.png',
            //   imagesRatio: 380 / 300
            // })

            // NAVBAR
            TweenMax.staggerFrom(".navbar div", 1.5, {
              delay: 1.5,
              opacity: 0,
              y: "20",
              ease: Expo.easeInOut
            }, 0.08);

            // MEDIA
            TweenMax.staggerFrom(".media ul li", 1.5, {
              delay: 1.5,
              opacity: 0,
              x: "-20",
              ease: Expo.easeInOut
            }, 0.08);

            // TEXT
            TweenMax.from(".text h1 .hidetext", 1.5, {
              delay: 1,
              y: "100%",
              ease: Expo.easeInOut
            });

            TweenMax.from(".text h3 .hidetext", 1.5, {
              delay: 1.2,
              y: "100%",
              ease: Expo.easeInOut
            });

            TweenMax.from(".text p .hidetext", 1.5, {
              delay: 1.3,
              y: "100%",
              ease: Expo.easeInOut
            });

            TweenMax.from(".text h2", 1.5, {
              delay: 1.5,
              opacity: 0,
              x: "-10000",
              ease: Expo.easeInOut
            });

            // SPONSOR
            TweenMax.from(".sponsor img", 1.5, {
              delay: 1.5,
              opacity: 0,
              y: "20",
              ease: Expo.easeInOut
            });

            TweenMax.from(".sponsor p", 1.5, {
              delay: 1.6,
              opacity: 0,
              y: "20",
              ease: Expo.easeInOut
            });

            // DISTORTION
            TweenMax.from(".distortion", 1.5, {
              delay: 2,
              opacity: 0,
              y: "20",
              ease: Expo.easeInOut
            });

            // OVERLAY
            TweenMax.to(".first", 1.5, {
              delay: .5,
              top: "-100%",
              ease: Expo.easeInOut
            });

            TweenMax.to(".second", 1.5, {
              delay: .7,
              top: "-100%",
              ease: Expo.easeInOut
            });

            TweenMax.to(".third", 1.5, {
              delay: .9,
              top: "-100%",
              ease: Expo.easeInOut
            });

          </script>
    </body>
</html>
