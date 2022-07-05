
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
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Teams Points History <span id="year"></span></h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Here you can see history of team points</li>
                        </ul>
                    </div>
                    @if(\Illuminate\Support\Facades\Auth::user()->role_name == 'Gulnara')
                        <div class="col-auto float-right ml-auto">
                            <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_point"><i class="fa fa-plus"></i> Add/Remove Points</a>
                        </div>
{{--                        <div class="col-auto float-right ml-auto">--}}
{{--                            <a href="#" class="btn add-btn" data-toggle="modal" data-target="#remove_point"><i class="fa fa-minus"></i> Remove Points</a>--}}
{{--                        </div>--}}
                    @endif
                </div>
            </div>

            <!-- Leave Statistics -->
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="stats-info">--}}
{{--                        <h6>Annual Leave</h6>--}}
{{--                        <h4>12</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="stats-info">--}}
{{--                        <h6>Medical Leave</h6>--}}
{{--                        <h4>3</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="stats-info">--}}
{{--                        <h6>Other Leave</h6>--}}
{{--                        <h4>4</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="stats-info">--}}
{{--                        <h6>Remaining Leave</h6>--}}
{{--                        <h4>5</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- /Leave Statistics -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>Team Name</th>
                                    <th>Amount Of Points</th>
                                    <th>Date</th>
                                    <th>Reason</th>
                                    <th>Approved By</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($points as $point)
                                    <tr>
                                        <td>{{$point->team_name}}</td>
                                        <td>{{$point->amount_of_points}}</td>
                                        <td>{{$point->date}}</td>
                                        <td>{{$point->reason}}</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="#" class="avatar avatar-xs"><img src="{{URL::to('assets/img/profiles/gulnara.jpg')}}" alt=""></a>
                                                <a href="#">Dekeyeva Gulnara</a>
                                            </h2>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Page Content -->

		<!-- Add Leave Modal -->
        @if(\Illuminate\Support\Facades\Auth::user()->role_name == 'Gulnara')
            <div id="add_point" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add/Remove Points</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('form/pointsemployee/save')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Select Team <span class="text-danger">*</span></label>
                                    <select class="select" name="team_name">
                                        <option selected disabled>Select Team To Add Points</option>
                                        @foreach($teams as $team)
                                            <option value="{{$team->role_type}}">{{$team->role_type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>When <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text" name="when_date">
                                    </div>
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <label>To <span class="text-danger">*</span></label>--}}
{{--                                    <div class="cal-icon">--}}
{{--                                        <input class="form-control datetimepicker" type="text">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="form-group">
                                    <label>Number of points <span class="text-danger">*</span></label>
                                    <input class="form-control" type="number" name="points">
                                </div>
                                <div class="form-group">
                                    <label>Reason <span class="text-danger">*</span></label>
                                    <select name="reason" id="reason" class="select">
                                        <option selected disabled>Select Reason of Points</option>
                                        @foreach($reasons as $reason)
                                            <option value="{{$reason->reason_name}}">{{$reason->reason_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <!-- /Add Leave Modal -->

        <!-- Remove Point Modal -->
{{--        @if(\Illuminate\Support\Facades\Auth::user()->role_name == 'Gulnara')--}}
{{--            <div id="remove_point" class="modal custom-modal fade" role="dialog">--}}
{{--                <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                    <div class="modal-content">--}}
{{--                        <div class="modal-header">--}}
{{--                            <h5 class="modal-title">Remove Points</h5>--}}
{{--                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                <span aria-hidden="true">&times;</span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        <div class="modal-body">--}}
{{--                            <form>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Select Team <span class="text-danger">*</span></label>--}}
{{--                                    <select class="select">--}}
{{--                                        <option>Select Team To Add Points</option>--}}
{{--                                        @foreach($teams as $team)--}}
{{--                                            <option>{{$team->role_type}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>When <span class="text-danger">*</span></label>--}}
{{--                                    <div class="cal-icon">--}}
{{--                                        <input class="form-control datetimepicker" type="text">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                --}}{{--                                <div class="form-group">--}}
{{--                                --}}{{--                                    <label>To <span class="text-danger">*</span></label>--}}
{{--                                --}}{{--                                    <div class="cal-icon">--}}
{{--                                --}}{{--                                        <input class="form-control datetimepicker" type="text">--}}
{{--                                --}}{{--                                    </div>--}}
{{--                                --}}{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Number of points <span class="text-danger">*</span></label>--}}
{{--                                    <input class="form-control" readonly type="text">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Reason <span class="text-danger">*</span></label>--}}
{{--                                    <textarea rows="4" class="form-control"></textarea>--}}
{{--                                </div>--}}
{{--                                <div class="submit-section">--}}
{{--                                    <button class="btn btn-primary submit-btn">Submit</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endif--}}
        <!-- /Remove Point Modal-->

        <!-- Edit Leave Modal -->
{{--        <div id="edit_leave" class="modal custom-modal fade" role="dialog">--}}
{{--            <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h5 class="modal-title">Edit Leave</h5>--}}
{{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <form>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Leave Type <span class="text-danger">*</span></label>--}}
{{--                                <select class="select">--}}
{{--                                    <option>Select Leave Type</option>--}}
{{--                                    <option>Casual Leave 12 Days</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>From <span class="text-danger">*</span></label>--}}
{{--                                <div class="cal-icon">--}}
{{--                                    <input class="form-control datetimepicker" value="01-01-2019" type="text">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>To <span class="text-danger">*</span></label>--}}
{{--                                <div class="cal-icon">--}}
{{--                                    <input class="form-control datetimepicker" value="01-01-2019" type="text">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Number of days <span class="text-danger">*</span></label>--}}
{{--                                <input class="form-control" readonly type="text" value="2">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Remaining Leaves <span class="text-danger">*</span></label>--}}
{{--                                <input class="form-control" readonly value="12" type="text">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Leave Reason <span class="text-danger">*</span></label>--}}
{{--                                <textarea rows="4" class="form-control">Going to hospital</textarea>--}}
{{--                            </div>--}}
{{--                            <div class="submit-section">--}}
{{--                                <button class="btn btn-primary submit-btn">Save</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- /Edit Leave Modal -->

        <!-- Delete Leave Modal -->
{{--        <div class="modal custom-modal fade" id="delete_approve" role="dialog">--}}
{{--            <div class="modal-dialog modal-dialog-centered">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-body">--}}
{{--                        <div class="form-header">--}}
{{--                            <h3>Delete Leave</h3>--}}
{{--                            <p>Are you sure want to Cancel this leave?</p>--}}
{{--                        </div>--}}
{{--                        <div class="modal-btn delete-action">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-6">--}}
{{--                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- /Delete Leave Modal -->

    </div>
    <!-- /Page Wrapper -->
@endsection
