@extends('backend.layouts')


@section('title')
Backend
@endsection

@section('menu-list')
    <li class="link-active"><a href="{{ url('backend') }}">Dashboard</a></li>
    <li><a href="{{ url('backend/post') }}">Posts</a></li>
    <li><a href="{{ url('backend/categories') }}">Categories</a></li>
    <li><a href="{{ url('backend/users') }}">Users</a></li>
    <li><a href="{{ url('backend/settings') }}">Settings</a></li>
@endsection

@section('content')
    <h3> Dashboard</h3>

    <hr>

    <div class="row">

        <div class="row">
            <div class="col-md-7">
                <div class="well">Inbox Messages <span class="badge pull-right">3</span></div>

                <hr>

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Processing Status</h4></div>
                    <div class="panel-body">

                        <small>Complete</small>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                                <span class="sr-only">72% Complete</span>
                            </div>
                        </div>
                        <small>In Progress</small>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                        <small>At Risk</small>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>

                    </div><!--/panel-body-->
                </div><!--/panel-->

            </div><!--/col-->

            <!--center-right-->
            <div class="col-md-5">

                <ul class="nav nav-justified">
                    <li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-heart"></i></a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="glyphicon glyphicon-comment"></i><span class="count">3</span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">1. Is there a way..</a></li>
                            <li><a href="#">2. Hello, admin. I would..</a></li>
                            <li><a href="#"><strong>All messages</strong></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
                    <li><a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><span
                                    class="glyphicon glyphicon-plus-sign"></span></a></li>
                </ul>

                <hr>

                <p>
                    This is a responsive dashboard-style layout that uses <a href="http://www.getbootstrap.com">Bootstrap
                        3</a>. You can use this template as a starting point to create something more unique.
                </p>
                <p>
                    Visit the Bootstrap Playground at <a href="http://www.bootply.com">Bootply</a> to tweak this
                    layout, or discover 1000's of Bootstrap code examples and snippets.
                </p>

                <hr>

                <div class="btn-group btn-group-justified">
                    <a href="#" class="btn btn-info col-sm-3">
                        <i class="glyphicon glyphicon-plus"></i><br>
                        Service
                    </a>
                    <a href="#" class="btn btn-info col-sm-3">
                        <i class="glyphicon glyphicon-cloud"></i><br>
                        Cloud
                    </a>
                    <a href="#" class="btn btn-info col-sm-3">
                        <i class="glyphicon glyphicon-cog"></i><br>
                        Tools
                    </a>
                    <a href="#" class="btn btn-info col-sm-3">
                        <i class="glyphicon glyphicon-question-sign"></i><br>
                        Help
                    </a>
                </div>

            </div><!--/col-span-6-->

        </div><!--/row-->
    </div><!--/col-span-9-->



@endsection
