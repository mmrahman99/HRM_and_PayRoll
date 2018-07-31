@extends('hrms.layouts.base')

@section('content')


    <header id="topbar" class="alt">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="breadcrumb-icon">
                    <a href="/dashboard">
                        <span class="fa fa-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-active">
                    <a href="/dashboard"> Dashboard </a>
                </li>
                <li class="breadcrumb-link">
                    <a href=""> Employees </a>
                </li>
                <li class="breadcrumb-current-item"> Employee Manager</li>
            </ol>
        </div>
    </header>




    <div class="container">
        <div class="row animated fadeIn">
            <div class="mw1100 center-block">
                <div class="wizard-container">
                    <div class="card" color="purple" id="wizardProfile">
                        {{--<div style="display: inline-block;  font-weight:900;font-size:8em; margin:0.2em;position: relative;color: #00B4F1;transform-style: preserve-3d;perspective:400;  z-index: 1;">--}}
                        <div style="box-shadow: 10px 10px 5px grey ">


                            <div style="color:blue">

                                <center>

                                    <h3 id="name" name="name"
                                        style="font-family:'American Typewriter',sans-serif; color:purple">{{$emps->name}}</h3>
                                    {{--<h3 id="id" name="id" stye="font-family:'Verdana',sans-serif">{{$emps->email}}</h3>--}}
                                    <h3 style="font-family:'American Typewriter',sans-serif; color:purple">{{$department->name}}</h3>
                                    <h3 style="font-family:'Verdana',sans-serif; color:purple">{{$role->name}}</h3>

                                </center>

                            </div>

                            <form method="post" action="{{route("view_performance")}}" accept-charset="UTF-8">

                                <input type="hidden" value="{{$emps->name}}" name="name" id="name">
                                <input type="hidden" value="{{$emps->id}}" name="id" id="id">
                                {{--{{csrf_token()}}--}}

                                <input type="hidden" value="{{csrf_token()}}" name="_token" id="_token">

                                <div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6">


                                                    <div class="col-sm-10 col-sm-offset-1">

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Works to Full
                                                                        Potential</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="potential"
                                                                        id="potential" required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Quality of Work</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="work_quality"
                                                                        id="work_quality" required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Work Consistency</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="work_consistency"
                                                                        id="work_consistency"
                                                                        required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Communication</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="communications"
                                                                        id="communications" required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Independent Work</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="independent_work"
                                                                        id="independent_work"
                                                                        required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Takes Initiative</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="initiative"
                                                                        id="initiative" required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Group Work</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="group_work"
                                                                        id="group_work" required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Productivity</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="productivity"
                                                                        id="productivity" required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Creativity</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="creativity"
                                                                        id="creativity" required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                                                    <span class="input-group-addon">

                                                    </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Comments</h3>
                                                                </label>
                                                                <br><br>
                                                                <textarea name="comments" id="comments" cols="100%"
                                                                          rows="10"
                                                                          placeholder="Comments If Any"></textarea>
                                                            </div>
                                                        </div>

                                                        <br><br><br>

                                                        {{--<div class="pull-right">--}}
                                                        {{--<input type='submit'--}}
                                                        {{--class='btn btn-next btn-fill btn-success btn-wd'--}}
                                                        {{--name='next' value='FINISH'/>--}}
                                                        {{--<input type='submit' class='btn btn-finish btn-fill btn-success btn-wd'--}}
                                                        {{--name='finish' value='Finish'/>--}}
                                                        {{--</div>--}}

                                                        <div class="push-right" id="button">
                                                            {{--<a type="submit"--}}
                                                            {{--class="btn btn-info br2 btn-xs fs12"--}}
                                                            {{--href="{{ action('performanceController@test') }}"> Submit--}}
                                                            {{--</a>--}}

                                                            <input class="btn btn-success text-right float-right"
                                                                   type="submit" value="FINISH">

                                                        </div>


                                                    </div>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="col-sm-10 col-sm-offset-1">

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Honesty</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="honesty" id="honesty"
                                                                        required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Integrity</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="integrity"
                                                                        id="integrity" required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Coworker Relations</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="coworker_relations"
                                                                        id="coworker_relations"
                                                                        required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Client Relations</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="client_relations"
                                                                        id="client_relations"
                                                                        required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Technical Skills</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="technical_skills"
                                                                        id="technical_skills"
                                                                        required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Dependability</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="dependability"
                                                                        id="dependability" required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Punctuality</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="punctuality"
                                                                        id="punctuality" required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                                                    <span class="input-group-addon">

                                                    </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label"><h3>Attendance</h3>
                                                                </label>
                                                                <br><br>
                                                                <select class="form-control" name="attendance"
                                                                        id="attendance" required>
                                                                    <option></option>
                                                                    <option>EXCELLENT</option>
                                                                    <option>GOOD</option>
                                                                    <option>SATISFACTORY</option>
                                                                    <option>UNSATISFACTORY</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <br><br><br>
                                                    </div>


                                                </div>
                                            </div>


                                        </div>


                                    </div>
                                </div>


                        </div>
                    </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
    </div>



@endsection

{{--<script type="text/javascript">--}}

{{--function save() {--}}
{{--alert("saved");--}}
{{--// $("#output").val("Signed In");--}}
{{--alert({{\Carbon\Carbon::now()->format('l, jS \\of F, Y')}});--}}
{{--// var clock = parseInt($("#clock").val());--}}

{{--@@php(echo alert();@endphp;--}}
{{--//        var time = Carbon::now()->format('h-i-s')--}}

{{--// $("#output").val(time);--}}

{{--// console.log('X-CSRF-TOKEN' + $('meta[name="csrf_token"]').attr('content'));--}}

{{--{--}}
{{--$.ajax({--}}
{{--type: 'POST',--}}
{{--url: '/view_performance',--}}
{{--data: {@php Auth::id() @endphp},--}}
{{--contentType: false,--}}
{{--processData: false,--}}
{{--// header: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},--}}
{{--success: function (data) {--}}
{{--console.log(data);--}}
{{--// var parsed = JSON.parse(data);--}}


{{--}--}}
{{--});--}}

{{--}--}}
{{--}--}}

{{--</script>--}}