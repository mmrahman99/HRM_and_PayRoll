@extends('hrms.layouts.base')

@section('content')

        <!-- -------------- Topbar -------------- -->
<header id="topbar" class="alt">
    <div class="topbar-left">
        <ol class="breadcrumb">
            <li class="breadcrumb-icon">
                <a href="/dashboard">
                    <span class="fa fa-home"></span>
                </a>
            </li>
            <li class="breadcrumb-active">
                <a href="/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-link">
                <a href="/dashboard">Home</a>
            </li>
            <li class="breadcrumb-current-item">Dashboard</li>
        </ol>
    </div>

</header>
<!-- -------------- /Topbar -------------- -->

<!-- -------------- Content -------------- -->
<section id="content" class="table-layout animated fadeIn">

    <!-- -------------- Column Center -------------- -->
    <div class="chute chute-center">

        <!-- -------------- Quick Links -------------- -->
        <div class="row">
            @if(Auth::user()->isHR())
            <div class="col-sm-6 col-xl-3">
                <div class="panel panel-tile">
                    <div class="panel-body">
                        <div class="row pv10">
                            <div class="col-xs-5 ph10">
                                <img src="/assets/img/pages/clipart2.png" class="img-responsive mauto" alt=""/></div>
                            <div class="col-xs-7 pl5">
                                <h3 class="text-muted"><a href="{{route('employee-manager')}}"> EMPLOYEE MANAGER</a></h3>
                                {{--<h2 class="fs50 mt5 mbn">385</h2>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="panel panel-tile">
                    <div class="panel-body">
                        <div class="row pv10">
                            <div class="col-xs-5 ph10"><img src="/assets/img/pages/clipart0.png"
                                                            class="img-responsive mauto" alt=""/></div>
                            <div class="col-xs-7 pl5">
                                <h3 class="text-muted"> <a href="{{route('total-leave-list')}}"> LEAVE <br/> MANAGER </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10"><img src="/assets/img/pages/Laptop Sketch-64x64"
                                                                class="img-responsive mauto" style="height: 100px; width: 100px;" alt=""/></div>
                                <div class="col-xs-7 pl5">
                                    <h3 class="text-muted"> <a href="{{route('asset-listing')}}"> ASSET <br /> MANAGER </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10"><img src="/assets/img/pages/dollar.jpg"
                                                                class="img-responsive mauto" style="height: 100px; width: 100px;" alt=""/></div>
                                <div class="col-xs-7 pl5">
                                    <h3 class="text-muted"> <a href="{{route('expense-list')}}"> EXPENSE <br /> MANAGER </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-sm-6 col-xl-3">
                <div class="panel panel-tile">
                    <div class="panel-body">
                        <div class="row pv10">
                            <div class="col-xs-5 ph10"><img src="/assets/img/pages/clipart5.png"
                                                            class="img-responsive mauto" alt=""/></div>
                            <div class="col-xs-7 pl5">
                                <h3 class="text-muted"><a href="{{route('attendance-manager')}}"> ATTENDANCE MANAGER </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @endif
                @if(!Auth::user()->isHR())
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10"><img src="/assets/img/pages/clipart0.png"
                                                                class="img-responsive mauto" alt=""/></div>
                                <div class="col-xs-7 pl5">
                                    <h3 class="text-muted"><a href="{{route('my-leave-list')}}"> LEAVES </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            <div class="col-sm-6 col-xl-3">
                <div class="panel panel-tile">
                    <div class="panel-body">
                        <div class="row pv10">
                            <div class="col-xs-5 ph10"><img src="/assets/img/pages/clipart6.png"
                                                            class="img-responsive mauto" alt=""/></div>
                            <div class="col-xs-7 pl5">
                                <h3 class="text-muted"><a href="{{route('hr-policy')}}"> HR POLICIES </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                @if($events)
                <div class="col-md-12">
                    <h3 class="mb10 mr5 notification" data-note-style="primary" style="color: darkturquoise">Latest &nbsp; Events </h3>
                @foreach (array_chunk($events, 3, true) as $results)
                    <table class="table">
                        <tr>
                            @foreach($results as $event)
                            <td>
                                <div class='fc-event fc-event-primary' data-event="primary">
                                <div class="fc-event-icon" style="color: darkslateblue">
                                    <span class="fa fa-exclamation"></span>
                                </div>
                                <div class="fc-event-desc blink" id="blink">
                                    <a href="{{route('create-event')}}" ><b>{{ \Carbon\Carbon::createFromTimestamp(strtotime($event->date))->diffForHumans()}} </b> {{$event->name}}</a>
                                </div>
                                    </div>
                            </td>
                            @endforeach
                        </tr>
                    </table>
                    @endforeach
               </div>
                @endif

                @if($meetings)
                <div class="col-md-12">
                    <h3 class=" mb10 mr5 notification" data-note-style="primary" style="color: darkturquoise"> Latest &nbsp;&nbsp; Meetings </h3>
                    @foreach (array_chunk($meetings, 3, true) as $results)
                        <table class="table">
                            <tr>
                                @foreach($results as $meeting)
                                    <td>
                                        <div class='fc-event fc-event-primary' data-event="primary">
                                            <div class="fc-event-icon" style="color: darkslateblue">
                                                <span class="fa fa-exclamation"></span>
                                            </div>
                                            <div class="fc-event-desc blink" id="blink">
                                                <b>{{ \Carbon\Carbon::createFromTimestamp(strtotime($meeting->date))->diffForHumans()}} </b> {{$meeting->name}}
                                            </div>
                                        </div>
                                    </td>
                                @endforeach
                            </tr>
                        </table>
                    @endforeach
                </div>
                    @endif


             </div>
           </div>
         </section>
    @endsection


<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->


<script type="text/javascript">
    $(document).ready(function () {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

        }, {
            type: 'info',
            timer: 4000
        });

    });
</script>