@extends('layouts.master')
{{-- @section('menu')
@extends('sidebar.dashboard')
@endsection --}}
@section('content')

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div class="sidebar-menu">

            </div>
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

            <div class="row" style="padding-top: 10px">
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
                                        <h3 class="card-title" id="welcome">
                                            Welcome back, {{\Illuminate\Support\Facades\Auth::user()->name}}!
                                        </h3>
                                        <p id="welcome-paragraph">
                                            ???? ???????????? ???????????? ?????????????? ???? ?????????????? ???????? ???? ???????????? ???????????????????????? ?? ????????.
                                        </p>
                                    </div>

                                    <div class="img col-md-4 col-lg-4" id="welcome-img">
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
                                    @if(\Illuminate\Support\Facades\Auth::user()->role_name == 'Amsterdam')
                                    <h4 class="card-title" style="color: #4D4BAC">
                                        My Team - Amsterdam
                                    </h4>

                                    <p>Bakytbek - manager on duty</p>
                                    <p>Meruyert - supervisor </p>
                                    <p>Salih - supervisor </p>
                                    <p>Arunaz - supervisor </p>
                                    <p>Zhuldyz - agent</p>
                                    <p>Aizhan - agent</p>
                                    <p>Laura - agent</p>
                                    @endif

                                        @if(\Illuminate\Support\Facades\Auth::user()->role_name == 'Istanbul')
                                            <h4 class="card-title" style="color: #4D4BAC">
                                                My Team - Istanbul
                                            </h4>

                                            <p>Arshat - manager on duty</p>
                                            <p>Nikolay - supervisor </p>
                                            <p>Natasha - supervisor </p>
                                            <p>Alena - supervisor</p>
                                            <p>Aqtoty - agent </p>
                                            <p>Meruert - agent</p>
                                            <p>Zhazira - agent</p>
                                        @endif

                                        @if(\Illuminate\Support\Facades\Auth::user()->role_name == 'Aqtau')
                                            <h4 class="card-title" style="color: #4D4BAC">
                                                My Team - Aqtau
                                            </h4>

                                            <p>Ibrahim - manager on duty(supervisor)</p>
                                            <p>Maksym - supervisor </p>
                                            <p>Ruslan - supervisor </p>
                                            <p>Tanya - supervisor </p>
                                            <p>Umitay - agent</p>
                                            <p>Almagul - agent</p>
                                            <p>Mayra - agent</p>
                                        @endif

                                        @if(\Illuminate\Support\Facades\Auth::user()->role_name == 'Seoul')
                                            <h4 class="card-title" style="color: #4D4BAC">
                                                My Team - Seoul
                                            </h4>

                                            <p>Aygul - manager on duty</p>
                                            <p>Nurzhan - supervisor </p>
                                            <p>Fariza - supervisor </p>
                                            <p>Gulnur - supervisor </p>
                                            <p>Gulnara M - agent</p>
                                            <p>Laura N - agent</p>
                                            <p>Sulu - agent</p>
                                        @endif

                                        @if(\Illuminate\Support\Facades\Auth::user()->role_name == 'Gulnara')
                                            <h4 class="card-title" style="color: #4D4BAC">
                                                My Teams
                                            </h4>

                                            <p>Amsterdam - Bakytbek</p>
                                            <p>Istanbul - Arshat</p>
                                            <p>Aqtau - Ibrahim</p>
                                            <p>Seoul - Aygul
                                            </p>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                        @endif
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="dash-card">
                        <section>
                            <div class="card">
                                <div class="card-body text-center">
                                    <h1 class="clock_header" style="padding-top: 68px; color: #4D4BAC; font-weight: bold">
                                        Until the end:
                                    </h1>
                                    <div class="justify-content-center" id="clockdiv" style="">
                                        <div style="color: #838383">
                                            <span class="days"></span>
                                            <div class="smalltext">Days</div>
                                        </div>
                                        <div style="margin-left: 20px; color: #838383">
                                            <span class="hours"></span>
                                            <div class="smalltext">Hours</div>
                                        </div>
                                        <div style="margin-left: 20px; color: #838383">
                                            <span class="minutes"></span>
                                            <div class="smalltext">Minutes</div>
                                        </div>
                                        <div style="margin-left: 20px; color: #838383">
                                            <span class="seconds"></span>
                                            <div class="smalltext">Seconds</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </div>

    <style>
        #clockdiv
        {
            display: flex; flex-direction: row; font-size: 32px; font-weight: bold; padding-bottom: 99px; padding-left: 109px; padding-right: 109px
        }
        #welcome
        {
            color: #4D4BAC; margin-bottom: 12px; font-size: 32px;font-weight: bold
        }
        #welcome-paragraph
        {
            font-size: 14px;color: #9799D9; width: 260px;
        }
        #welcome-img
        {
            text-align: center
        }
        @media(max-width: 450px){
            #clockdiv{
                font-size: 20px;
            }
            #welcome{
                font-size: 20px;
            }
            #welcome-paragraph{
                font-size: 13px;
            }
            #welcome-img{
                display: none;
            }
        }
    </style>

    <script>
        function getTimeRemaining(endtime) {
            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
            };
        }

        function initializeClock(id, endtime) {
            var clock = document.getElementById(id);
            var daysSpan = clock.querySelector('.days');
            var hoursSpan = clock.querySelector('.hours');
            var minutesSpan = clock.querySelector('.minutes');
            var secondsSpan = clock.querySelector('.seconds');

            function updateClock() {
                var t = getTimeRemaining(endtime);

                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                    clearInterval(timeinterval);
                }
            }

            updateClock();
            var timeinterval = setInterval(updateClock, 1000);
        }

        var deadline = new Date(Date.parse(new Date()) + ((Date.parse('Nov 1, 2022') - Date.parse(new Date())) / 3600000 / 24) * 24 * 60 * 60 * 1000);
        console.log(Date.parse('Nov 1, 2022'));
        initializeClock('clockdiv', deadline);
    </script>
    <!-- /Page Wrapper -->
@endsection
