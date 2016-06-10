<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        .navbar-static-top {
            margin-bottom: 20px;
        }

        i {
            font-size: 18px;
        }

        footer {
            margin-top: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: #efefef;
        }

        .nav > li .count {
            position: absolute;
            top: 10%;
            right: 25%;
            font-size: 10px;
            font-weight: normal;
            background: rgba(41, 200, 41, 0.75);
            color: rgb(255, 255, 255);
            line-height: 1em;
            padding: 2px 4px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -ms-border-radius: 10px;
            -o-border-radius: 10px;
            border-radius: 10px;
        }

        .link-active {
            background-color: #eee;
            text-decoration: none;
            border-color: #eee #eee #ddd;

        }

    </style>
</head>
<body>


<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-toggle"></span>
            </button>
            <a class="navbar-brand" href="#">Control Panel</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ url('/') }}"> Frontend </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="{{ url('backend/profile') }}"><i class="glyphicon glyphicon-user"></i> My
                                Profile</a></li>
                        <li><a href="{{ url('backend/logout') }}"><i class="glyphicon glyphicon-lock"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /container -->
</div>
<!-- /Header -->

<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <h3> Menu</h3>
            <hr>
            <ul class="nav nav-stacked">
                @yield('menu-list')
            </ul>
            <hr>
        </div><!-- /span-3 -->
        <div class="col-sm-10">
            @yield('content')
        </div>
    </div>

</div>

<footer class="text-center">qsd</footer>


<script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
@yield('script')
</body>
</html>