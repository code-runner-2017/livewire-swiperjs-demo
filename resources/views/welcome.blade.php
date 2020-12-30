<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <!-- Styles -->
        <style>

        </style>

        <livewire:styles/>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

        <style>
            body {
                font-family: 'Nunito';
            }

            .swiper-container {
                width: 600px;
                height: 600px;
            }

            .swiper-slide {
                text-align: center;
            }
        </style>
    </head>
    <body class="antialiased m-3">
        <div class="row">
            <div class="col">
                <h1 class="display-2 text-center">Swiperjs Demo</h1>

                <livewire:swiper/>

            </div>
        </div>

        <livewire:scripts/>
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script type="text/javascript">
            window.addEventListener('onContentChanged', () => {
                initializeSwiper();
            });

            function initializeSwiper() {
                var mySwiper = new Swiper('.swiper-container', {
                    // Optional parameters
                    // direction: 'vertical',
                    loop: true,

                    // If we need pagination
                    pagination: {
                        el: '.swiper-pagination',
                    },

                    // Navigation arrows
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },

                    // And if we need scrollbar
                    scrollbar: {
                        el: '.swiper-scrollbar',
                    },
                })
            }

            $(document).ready(function() {
                initializeSwiper();
            });
        </script>
    </body>
</html>
