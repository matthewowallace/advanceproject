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
        <link rel="shortcut icon" href="{{ asset('images/YCv2.png') }}" />
        <link rel="icon" href="{{ asset('images/YCv2.png') }}" />

        <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    </head>
    <body>
        <div id="app">
            <App></App>
        </div>

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
          </script>
    </body>
</html>
