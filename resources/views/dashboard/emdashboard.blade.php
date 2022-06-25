@extends('layouts.master')
{{-- @section('menu')
@extends('sidebar.dashboard')
@endsection --}}
@section('content')

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="submenu">
                        <a href="#" class="noti-dot">
                            <i class="la la-dashboard"></i>
                            <span> Dashboard</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a class="active" href="{{ route('em/dashboard') }}">Employee Dashboard</a></li>
                        </ul>
                    </li>
                    @if (Auth::user()->role_name=='Admin')
                        <li class="menu-title"> <span>Authentication</span> </li>
                        <li class="submenu">
                            <a href="#">
                                <i class="la la-user-secret"></i>
                                <span> User Controller</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul style="display: none;">
                                <li><a href="{{ route('userManagement') }}">All User</a></li>
                                <li><a href="{{ route('activity/log') }}">Activity Log</a></li>
                                <li><a href="{{ route('activity/login/logout') }}">Activity User</a></li>
                            </ul>
                        </li>
                    @endif
                    <li class="menu-title"> <span>Employees</span> </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-user"></i>
                            <span> Employees</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('all/employee/card') }}">All Employees</a></li>
                            <li><a href="{{ route('form/holidays/new') }}">Holidays</a></li>
                            <li><a href="{{route('form/leavesemployee/new')}}">Leaves (Employee)</a></li>
                            <li><a href="{{ route('form/leavesettings/page') }}">Leave Settings</a></li>
                            <li><a href="{{ route('attendance/employee/page') }}">Attendance (Employee)</a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> <span>HR</span> </li>

                    <li class="submenu"> <a href="#"><i class="la la-pie-chart"></i>
                            <span> Reports </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{ route('form/leave/reports/page') }}"> Leave Report </a></li>
                            <li><a href="{{ route('form/daily/reports/page') }}"> Daily Report </a></li>
                        </ul>
                    </li>

                    <li class="menu-title"> <span>Pages</span> </li>
                    <li class="submenu"> <a href="#"><i class="la la-user"></i>
                            <span> Profile </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="profile.html"> Employee Profile </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">

            <div class="row">
                <div class="col-lg-8 col-md-8 card-img">
                    <img src="{{url('assets/img/airastana.png')}}" alt="" width="180px"; height="120px">
                </div>
                <div class="col-lg-4 col-md-4 align-self-center">
                    <p>
                        {{$todayDate}}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="dash-card">
                        <section>
                            <div class="card">
                                <div class="card-body" style="display:flex; flex-direction: row; width: 80%; margin: 0 auto">
                                    <div class="text col-lg-8 col-md-8" style="display: flex; flex-direction: column; justify-content: center;">
                                        <h3 class="card-title" style="color: #4D4BAC; margin-bottom: 12px; font-size: 32px;font-weight: bold">
                                            Welcome back, {{\Illuminate\Support\Facades\Auth::user()->name}}!
                                        </h3>
                                        <p style="font-size: 12px;color: #9799D9; width: 260px;">
                                            Из самого сердца Евразии мы создаем одну из лучших авиакомпаний в мире.
                                        </p>
                                    </div>

                                    <div class="img col-md-4 col-lg-4" style="text-align: center">
                                        <img src="{{url('assets/img/discussion-test.svg')}}" alt="" class="card-img" style="width: 170px; height: 170px">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="dash-card">
                        <section>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="color: #4D4BAC">
                                        My Team
                                    </h4>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="dash-card">
                        <section>
                            <div class="card">
                                <div class="card-body"></div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->
@endsection
