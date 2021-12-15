{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>        
    </body>
</html>
 --}}
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pico Futbol Club</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/images/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.6.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo lg-auto me-lg-0"><a href="{{ url('/') }}">
        <img src="assets/images/lgo.png" style="max-height: 2.5em;">
        </a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Historia</a></li>                    
          <li><a class="nav-link scrollto" href="#services">Instalaciones</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Disciplinas</a></li>          
          <li><a class="nav-link scrollto" href="#contact">Contactos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">    
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Bienvenidos al sitio web de Pico Futbol Club</h1>
          <h2>Celebramos 100 años con nuestra gente</h2>
        </div>
      </div>    
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Historia</h2>
          <p>Nuestros inicios</p>
        </div>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/images/historia-1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            
            <p class="fst-italic">
              Tres meses antes de la fundación de General Pico, el 11 de agosto de 1905 se jugó el primer partido de fútbol entre empleados ferroviarios y el resto de la aldea. Los años posteriores siguieron armándose equipos cuyos colores eran blanco y negro.
            </p>
            <p class="fst-italic">
              En 1911, el Ingeniero Tomás Allan fundó "Club de Foot Ball de General Pico". Inmediato antecedente de PFC. Jugaban partidos con pueblos vecinos vistiendo la camiseta blanca y negra a franjas verticales. Dos años más tarde, la comisión integrada por Eduardo Berros y Aurelio Martí realizaron la primera fundación de "Pico Foot Ball Club" pero carecía de un estatuto. Lo mismo sucedió en 1914, la segunda fundación del club presidido por Pedro Maffoni y Frank Allan, sin inscribir su estatuto. A pesar de esto, participaron y ganaron la Copa Ciudad de Trenque Lauquen venciendo a Porteños Unidos.
              Desde allí en más durante varios años un equipo vinculado al FFCC Pacífico con colores blanco y negro, fue denominándose alternativamente "Pico Foot Ball Club", "Club de Fútbol de General Pico", "Blanco y Negro" o "Pico Athletic".
            </p>            
          </div>          
        </div>        
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row pt-1">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/images/historia-2.jpg" class="img-fluid" alt="">            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <div class="section-title">              
              <p>Fundacion del club</p>
            </div>            
            <p class="fst-italic">
              Fue fundado el 1 de Abril 1919 por iniciativa de Mario Rudoni, empleado ferroviario quién fusionó el Pico Athletic Club y Atlético F.C.O., dando nacimiento formal a Pico Foot Ball Club.
              La primera sede social se encontraba en la calle 18 y el primer estadio en las calles 16, 14, 9 y 11. En mayo de 1920, según consta en el Acta Nº 21, se adquirió el terreno actual, donde funcionó la "cancha de chapas" por estar cercado el perímetro con chapas.
              En la década del 20 y tras una visita de Gimnasia y Esgrima de La Plata, de grandes éxitos por aquel tiempo, se adoptó una camiseta semejante, dejando atrás la de rayas verticales por una blanca con una única franja negra sobre el pecho.
            </p>                                  
          </div>
        </div>        
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row pt-1">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/images/historia-3.jpg" class="img-fluid" alt="">            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <div class="section-title">              
              <p>El club crece...</p>
            </div>            
            <p class="fst-italic">
              En 1936 se jugó el último partido en cancha de chapas contra Boca Juniors. Debido a la inquietud de Ángel Larrea, se le encargaron a Nino Caraffini las obras edilicias del Parque.
              La cancha de fútbol se trasladó, el Primer Estadio Olímpico, dos manzanas con frente en calle 24 y contrafrente en calle 26 entre 103 y 107.
              En 1938 se inauguró la pileta contando con la presencia de campeones sudamericanos y argentinos. El primer instructor fue Carlos Sos. Curiosidad: carecía de una pierna.
              Se fueron sumando nuevas obras, dos canchas de tenis, cancha de básquet con piso de tierra, cancha de pelota a paleta y cancha de bochas.
            </p>                                  
          </div>
        </div>        
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row pt-1">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/images/historia-4.jpg" class="img-fluid" alt="">            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <div class="section-title">              
              <p>Más eventos para recordar</p>
            </div>            
            <p class="fst-italic">
              En 1939 se inauguró el salón social en la calle 17 Nº 950 y antigua sede social. Hoy galería donde funciona un restaurante.
              En 1949, se corrió la Primera Vuelta de La Pampa. En total se corrieron doce: 49, 50, 51, 54, 59, 60, 61, 63, 64, 65, 66, 67.
              Fuimos campeones en básquet 25 años seguidos, de 1950 a 1974.
              En el año 1955 ganamos nuestro primer campeonato de fútbol de la Liga Pampeana.
              Durante quince años, organizamos la Fiesta del Caldén, su primera edición fue en el año 1968.
            </p>                                  
          </div>
        </div>        
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row pt-1">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/images/historia-5.jpg" class="img-fluid" alt="">            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">            
            <p class="fst-italic">
              En pleno invierno del año 1976, con el gimnasio semicerrado ya que aún faltaba construir una pared...se realizó la primera pelea de box.
              El gimnasio Ángel Larrea en 1982 fue sede del Campeonato Argentino de Básquet. En 1988, se obtuvo el ascenso a la Liga B de Básquetbol. Y en 1994, por invitación participamos en la Liga Nacional A de Básquetbol. Dimos una estrella a la Selección Nacional, Jorge Racca.
              El 7 de abril de 1990 se creó el Instituto Superior de Educación Física.
            </p>                                  
          </div>
        </div>        
      </div>
    </section><!-- End About Section -->     

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Instalaciones</h2>
          <p>Predios del club</p>
        </div>
        <div class="row">
          <video controls="" class="embed-responsive embed-responsive-16by9 padb20">
            <source src="http://www.picofc.com.ar/Archivos/Index/Instalaciones/Video-institucional.mp4" type="video/mp4">
        </video>
        <div class="content pt-4">            
          <p class="fst-italic">
            A largo de la historia se practicaron más de 20 deportes en nuestras instalaciones: fútbol, básquetbol, automovilismo, atletismo, natación, voleibol, hockey, patinaje, gimnasia, handbol, water polo, ajedrez, bochas, pelota a paleta, tenis, paddle, rugby, cestobol, boxeo, diversas artes marciales como tae–kwondo, karate, yudo.
            También se desarrollan actividades sociales: bailes, elección reinas, carnavales, lotería familiar, torneos de juegos de mesa y naipes en "la cueva" de la calle 17.
            En cuanto a actividades culturales, hemos organizado la Fiesta del Caldén, espectáculos musicales y a partir de 1990 mediante el I.S.E.F. formando profesionales de la Educación Física, dictándose Licenciatura en Educación Física.
          </p>                                  
        </div>
        <div class="alert alert-warning no-bg pb-2"> 
          Contribuimos a la contención social de jóvenes, en actividades deportivas que promueven desarrollo físico y espiritual, inculcándoles respeto al prójimo y cultura intelectual. Tenemos cerca de 200 chicos en fútbol de los que cerca de 120 están becados. Contamos con programas de natación donde aprenden a nadar 400 chicos por año. Contribuimos con el estado brindando nuestras instalaciones a los programas sociales y deportivos.
          </div>
          {{--  --}}
          <ul class="row dez-gallery-listing gallery-grid-4 gallery mfp-gallery">
            {{-- <li class="card-container col-lg-3 col-lg-3 col-sm-3 col-6 jumping">
              <div class="dez-box dez-gallery-box">
                  <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> 
                      <a href="javascript:void(0);"> <img src="assets/images/instalaciones-1.jpg" alt="Instalaciones" width="95%"> </a>
                      <div class="overlay-bx">
                          <div class="overlay-icon"> 
                              <a href="assets/images/instalaciones-1.jpg" class="mfp-link">
                                  <i class="far fa-image icon-bx-xs fa-2x padt8"></i>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
            </li> --}}
            <li class="card-container col-lg-3 col-lg-3 col-sm-3 col-6 jumping">
              <div class="dez-box dez-gallery-box">
                  <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> 
                      <a href="javascript:void(0);"> <img src="assets/images/instalaciones-2.jpg" width="95%" alt="Instalaciones"> </a>
                      <div class="overlay-bx">
                          <div class="overlay-icon"> 
                              <a href="assets/images/instalaciones-2.jpg" class="mfp-link">
                                  <i class="far fa-image icon-bx-xs fa-2x padt8"></i>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
            </li>
            <li class="card-container col-lg-3 col-lg-3 col-sm-3 col-6 jumping">
              <div class="dez-box dez-gallery-box">
                  <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> 
                      <a href="javascript:void(0);"> <img src="assets/images/instalaciones-3.jpg" width="95%" alt="Instalaciones"> </a>
                      <div class="overlay-bx">
                          <div class="overlay-icon"> 
                              <a href="assets/images/instalaciones-3.jpg" class="mfp-link">
                                  <i class="far fa-image icon-bx-xs fa-2x padt8"></i>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
            </li>
            <li class="card-container col-lg-3 col-lg-3 col-sm-3 col-6 jumping">
              <div class="dez-box dez-gallery-box">
                  <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> 
                      <a href="javascript:void(0);"> <img src="assets/images/instalaciones-4.jpg" width="95%" alt="Instalaciones"> </a>
                      <div class="overlay-bx">
                          <div class="overlay-icon"> 
                              <a href="assets/images/instalaciones-4.jpg" class="mfp-link">
                                  <i class="far fa-image icon-bx-xs fa-2x padt8"></i>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
            </li>
            <li class="card-container col-lg-3 col-lg-3 col-sm-3 col-6 jumping">
              <div class="dez-box dez-gallery-box">
                  <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> 
                      <a href="javascript:void(0);"> <img src="assets/images/instalaciones-5.jpg" width="95%" alt="Instalaciones"> </a>
                      <div class="overlay-bx">
                          <div class="overlay-icon"> 
                              <a href="assets/images/instalaciones-5.jpg" class="mfp-link">
                                  <i class="far fa-image icon-bx-xs fa-2x padt8"></i>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
            </li>            
          </ul>


          {{--  --}}
          {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>
 --}}
        </div>

      </div>
    </section><!-- End Services Section -->

  

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Disciplinas</h2>
          <p>Algunas de nuestras actividades</p>
        </div>
          <div class="row">            
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item pt-2">
                  <a  data-bs-toggle="tab" href="#tab-1">Futbol</a>
                </li>
                <li class="nav-item pt-2">
                  <a  data-bs-toggle="tab" href="#tab-2">Basquet</a>
                </li>
                <li class="nav-item pt-2">
                  <a  data-bs-toggle="tab" href="#tab-3">Natacion</a>
                </li>
                <li class="nav-item pt-2">
                  <a  data-bs-toggle="tab" href="#tab-4">Hockey</a>
                </li>
                <li class="nav-item pt-2">
                  <a  data-bs-toggle="tab" href="#tab-5">Voley</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Futbol</h3>
                      <p class="fst-italic">Actualmente más de 200 personas en este deporte, divididos en las categorías infantiles y primera división, participando en diferentes torneos con resultados positivos.</p>
                      <p>El fútbol como juego recreativo brinda posibilidades creativas y eleva el nivel motivacional en aras de encontrar nuevas formas de solución a una tarea motora 
                        en una situación real y contextual; de ello se deriva que, jugando se puede aprender y ejercitar 
                        las habilidades deportivas y básicas de una forma libre</p>                      
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/images/futbol.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-2">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Basquet</h3>
                      <p class="fst-italic">Actualmente más de 150 personas practican este deporte, divididos en las categorías U13, U15, U17 y primera división, participando en diferentes torneos con resultados positivos.</p>
                      <p>El basquet es uno de los deportes más practicados del mundo. Se juegan numerosas ligas y campeonatos en el mundo entero, sobre todo en Europa y más recientemente en Asia, donde el deporte 
                        ha despuntado en el siglo XXI.</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/images/basquet.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-3">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Natacion</h3>
                      <p class="fst-italic">Actualmente más de 700 personas utilizan la pileta tanto para actividades deportivas, recreativas y uso terapéutico. 400 niños por año aprenden a nadar en nuestras instalaciones.</p>
                      <p>la natación engloba “desde la mejora de la movilidad articular y elasticidad, al aumento de la fuerza muscular”, al ser una actividad que se practica en el agua, con la presión hidrostática 
                        que ejerce ésta sobre el cuerpo, también presenta un efecto de drenaje o antiinflamatorio, siendo especialmente 
                        importante para aquellas personas que padecen problemas de circulación.</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/images/natacion.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-4">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Hockey</h3>
                      <p class="fst-italic">Actualmente más de 200 personas en este deporte, divididos en las categorías sexta, séptima, octava, novena, décima, y primera división de damas y caballeros; y mamis. Participando en diferentes torneos con resultados positivos.</p>
                      <p>La práctica recreativa del hockey estimula la expresividad y creatividad, en el sentido de que cada jugador se ve más 
                        liberado del nivel de eficacia de la acción. La no dependencia de la organización federativa supone mayor movilidad para establecer los equipos y las competiciones.
                        </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/images/hockey.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-5">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Voley</h3>
                      <p class="fst-italic">Actualmente más de 200 personas en este deporte, divididos en las categorís sexta, séptima, octava, novena, décima, y primera división de damas y caballeros. Participando en diferentes torneos con resultados positivos.</p>
                      <p>El voleibol es uno de los deportes donde mayor es la paridad entre las competiciones femeninas y masculinas. Hasta 1998 el balón era de color claro y a partir de ese año se presentaron en combinaciones de colores.
                        Cuba, Brasil, Estados Unidos, Italia y Rusia son los países que encabezan el ránking de este deporte
                        </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/images/voley.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contactos</h2>
          <p>Comuniquese con nosotros</p>
        </div>

        <div>
	  <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12967.258776314575!2d-63.7605656!3d-35.6569369!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9f67b27d9df9f8!2sClub%20Pico%20Foot%20Ball!5e0!3m2!1ses-419!2sar!4v1637163509339!5m2!1ses-419!2sar" frameborder="0" allowfullscreen></iframe>
          
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Direcciones:</h4>
                <p class="pt-1">Sede social:</p>
                <p>Av. San Martín 147, Gral. Pico, La Pampa</p>
                <p class="pt-1">Estadio Olímpico:</p>
                <p>Calle 109 esq. 26, Gral. Pico, La Pampa</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contacto@picofc.com.ar</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefonos:</h4>
                <p class="pt-1">Sede social:</p>
                <p>02302 336388</p>
                <p class="pt-1">Estadio Olímpico:</p>
                <p>02302 427517</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            {{-- enviar comentario --}}
            {{-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form> --}}   
            <div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
                  Gracias por su mensaje, saludos!
            </div>         
            <form id="SubmitForm">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">                  
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              {{-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> --}}
              <div class="text-center pt-2">
                <button class="btn btn-outline-warning" type="submit" id="enviarComentario">Enviar mensaje</button>
              </div>
            </form>
            {{-- final del formulario --}}
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">    

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span></span></strong>. Todos los derechos reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Diseñado por: <a href="#">Julio Caba</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script type="text/javascript">
 $('#SubmitForm').on('submit',function(e){
    e.preventDefault();

    let name = $('#name').val();
    let email = $('#email').val();
    let subject = $('#subject').val();
    let message = $('#message').val();
    
    $.ajax({
      url: "{{ url('admin/submit-form')}}",
      type:"POST",
      data:{
        "_token": "{{ csrf_token() }}",
        name:name,
        email:email,
        subject:subject,
        message:message,
      },
      success:function(response){
        $('#successMsg').show();
        $('#name').val('');
        $('#email').val('');
        $('#subject').val('');
        $('#message').val('');
        console.log(response);
      },
      error: function(response) {        
        /* nada */
      },
      });
    });
</script>
  {{-- <script src="assets/js/mensajes.js"></script> --}}
</body>

</html>