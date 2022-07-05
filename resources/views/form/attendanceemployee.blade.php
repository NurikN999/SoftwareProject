
@extends('layouts.master')
@section('content')
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-star"></i>
                            <span> Achievements</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('form/holidays/new') }}">Holidays</a></li>
                            <li><a href="{{route('form/pointsemployee/new')}}">Points of Employee</a></li>
                            <li><a href="{{ route('teams/standings/page') }}">Standings of Teams</a></li>
                        </ul>
                    </li>

{{--                    <li class="submenu"> <a href="#"><i class="la la-times-circle"></i>--}}
{{--                            <span> Reports </span> <span class="menu-arrow"></span></a>--}}
{{--                        <ul style="display: none;">--}}
{{--                            <li><a href="{{ route('form/leave/reports/page') }}"> Leave Report </a></li>--}}
{{--                            <li><a href="{{ route('form/daily/reports/page') }}"> Daily Report </a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Team Standings</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Teams Position Table</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
{{--                <div class="col-md-4">--}}
{{--                    <div class="card recent-activity">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Today Activity</h5>--}}
{{--                            <ul class="res-activity-list">--}}
{{--                                <li>--}}
{{--                                    <p class="mb-0">Punch In at</p>--}}
{{--                                    <p class="res-activity-time">--}}
{{--                                        <i class="fa fa-clock-o"></i>--}}
{{--                                        10.00 AM.--}}
{{--                                    </p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <p class="mb-0">Punch Out at</p>--}}
{{--                                    <p class="res-activity-time">--}}
{{--                                        <i class="fa fa-clock-o"></i>--}}
{{--                                        11.00 AM.--}}
{{--                                    </p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <p class="mb-0">Punch In at</p>--}}
{{--                                    <p class="res-activity-time">--}}
{{--                                        <i class="fa fa-clock-o"></i>--}}
{{--                                        11.15 AM.--}}
{{--                                    </p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <p class="mb-0">Punch Out at</p>--}}
{{--                                    <p class="res-activity-time">--}}
{{--                                        <i class="fa fa-clock-o"></i>--}}
{{--                                        1.30 PM.--}}
{{--                                    </p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <p class="mb-0">Punch In at</p>--}}
{{--                                    <p class="res-activity-time">--}}
{{--                                        <i class="fa fa-clock-o"></i>--}}
{{--                                        2.00 PM.--}}
{{--                                    </p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <p class="mb-0">Punch Out at</p>--}}
{{--                                    <p class="res-activity-time">--}}
{{--                                        <i class="fa fa-clock-o"></i>--}}
{{--                                        7.30 PM.--}}
{{--                                    </p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

            <!-- Search Filter -->
{{--            <div class="row filter-row">--}}
{{--                <div class="col-sm-3">--}}
{{--                    <div class="form-group form-focus">--}}
{{--                        <div class="cal-icon">--}}
{{--                            <input type="text" class="form-control floating datetimepicker">--}}
{{--                        </div>--}}
{{--                        <label class="focus-label">Date</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-3">--}}
{{--                    <div class="form-group form-focus select-focus">--}}
{{--                        <select class="select floating">--}}
{{--                            <option>-</option>--}}
{{--                            <option>Jan</option>--}}
{{--                            <option>Feb</option>--}}
{{--                            <option>Mar</option>--}}
{{--                            <option>Apr</option>--}}
{{--                            <option>May</option>--}}
{{--                            <option>Jun</option>--}}
{{--                            <option>Jul</option>--}}
{{--                            <option>Aug</option>--}}
{{--                            <option>Sep</option>--}}
{{--                            <option>Oct</option>--}}
{{--                            <option>Nov</option>--}}
{{--                            <option>Dec</option>--}}
{{--                        </select>--}}
{{--                        <label class="focus-label">Select Month</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-3">--}}
{{--                    <div class="form-group form-focus select-focus">--}}
{{--                        <select class="select floating">--}}
{{--                            <option>-</option>--}}
{{--                            <option>2022</option>--}}
{{--                            <option>2021</option>--}}
{{--                            <option>2020</option>--}}
{{--                            <option>2019</option>--}}
{{--                            <option>2018</option>--}}
{{--                            <option>2017</option>--}}
{{--                            <option>2016</option>--}}
{{--                            <option>2015</option>--}}
{{--                        </select>--}}
{{--                        <label class="focus-label">Select Year</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-3">--}}
{{--                    <a href="#" class="btn btn-success btn-block"> Search </a>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- /Search Filter -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Team Name</th>
                                    <th>Total Points </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allPoints as $name=>$points)
                                    <tr>
                                        <td>{{$name}}</td>
                                        <td>{{$points}}</td>
{{--                                        <td>{{$attendance->punch_in}}</td>--}}
{{--                                        <td>{{$attendance->punch_out}}</td>--}}
{{--                                        <td>{{$attendance->production}}</td>--}}
{{--                                        <td>{{$attendance->break}}</td>--}}
{{--                                        <td>{{$attendance->overtime}}</td>--}}
{{--                                        <td>{{$attendance->type}}</td>--}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        </div>
        <!-- /Page Content -->


    </div>
    <!-- /Page Wrapper -->
    @section('script')
    @endsection
@endsection
