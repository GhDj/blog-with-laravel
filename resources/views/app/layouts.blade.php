<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/normalize.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icons.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/component.css') }}"/>

    <style>
        header{
            background: url("{{ asset($data->blog_header_link)  }}");
        }

        img.resize {
            width: 0px;
            height: 450px;
        }
        .page-footer{
            padding-top: 0px !important;
            margin-top: 0px !important;
        }
        .trigger {
            top:0;
        }
    </style>
</head>

<body>


<div id="st-container" class="st-container">
    <div class="st-pusher">
        @yield('nav')
        <div class="st-content"><!-- this is the wrapper for the content -->
            <div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
                <!-- Top Navigation -->
                <div>

                        @yield('header')

                    <main class="container">


                        @yield('content')
                    </main>


                    <footer class="page-footer">
                        <div class="footer-copyright">
                            <div class="container">
                                © 2016 Copyright Text
                                <a class="grey-text text-lighten-4 right" href="backend">Backend</a>
                            </div>
                        </div>
                    </footer>
                </div><!-- /main -->
            </div><!-- /st-content-inner -->
        </div><!-- /st-content -->
    </div><!-- /st-pusher -->
</div><!-- /st-container -->


<script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/materialize.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/classie.js') }}"></script>
<script src="{{ asset('assets/js/sidebarEffects.js') }}"></script>


</body>

</html>