@extends('hrms.layouts.base')

@section('content')

    <div class="container-fluid">
        <!--   Creative Tim Branding   -->

        <!--  Made With Material Kit  -->
        <header id="topbar" class="alt">

            @if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}')

                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-icon">
                            <a href="/dashboard">
                                <span class="fa fa-home"></span>
                            </a>
                        </li>
                        {{-- <li class="breadcrumb-active">
                             <a href="#"> Edit Details</a>
                         </li>--}}
                        <li class="breadcrumb-link">
                            <a href="/dashboard"> Employees </a>
                        </li>
                        {{--<li class="breadcrumb-current-item"> Edit details of {{$emps->name}} </li>--}}
                    </ol>
                </div>

            @else

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
                            <a href="/add-employee"> Employees </a>
                        </li>
                        <li class="breadcrumb-current-item"> Employee Performance</li>
                    </ol>
                </div>

            @endif
        </header>

        <div class="container">
            <div class="row animated fadeIn">
                <div class="mw1100 center-block">
                    @if(session('message'))
                        {{session('message')}}
                    @endif
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success">
                            {{ session::get('flash_message') }}
                        </div>
                    @endif

                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="purple" id="wizardProfile">


                            <form method="post">

                                <div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text">Employee Evaluation</h4>

                                            <div class="col-sm-10 col-sm-offset-1">

                                                <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><h3>Works to Full Potential</h3>
                                                        </label>
                                                        <br><br>
                                                        <select class="form-control" name=""
                                                                id="answer">
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
                                                        <select class="form-control" name=""
                                                                id="access_type">
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
                                                        <select class="form-control" name=""
                                                                id="access_type">
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
                                                        <select class="form-control" name=""
                                                                id="access_type">
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
                                                        <select class="form-control" name=""
                                                                id="access_type">
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
                                                        <select class="form-control" name=""
                                                                id="access_type">
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
                                                        <select class="form-control" name=""
                                                                id="access_type">
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
                                                        <select class="form-control" name=""
                                                                id="access_type">
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
                                                        <select class="form-control" name=""
                                                                id="access_type">
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
                                                        <label class="control-label"><h3>Honesty</h3>
                                                        </label>
                                                        <br><br>
                                                        <select class="form-control" name=""
                                                                id="access_type">
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
                                                        <select class="form-control" name=""
                                                                id="access_type">
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
                                                        <select class="form-control" name=""
                                                                id="access_type">
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
                                                        <select class="form-control" name=""
                                                                id="access_type">
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
                                                        <select class="form-control" name=""
                                                                id="access_type">
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
                                                        <select class="form-control" name=""
                                                                id="access_type">
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
                                                        <select class="form-control" name=""
                                                                id="access_type">
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
                                                        <select class="form-control" name=""
                                                                id="access_type">
                                                            <option></option>
                                                            <option>EXCELLENT</option>
                                                            <option>GOOD</option>
                                                            <option>SATISFACTORY</option>
                                                            <option>UNSATISFACTORY</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <br><br><br>

                                                <div class="pull-right">
                                                    <input type='button'
                                                           class='btn btn-next btn-fill btn-success btn-wd'
                                                           name='next' value='FINISH'/>
                                                    {{--<input type='submit' class='btn btn-finish btn-fill btn-success btn-wd'--}}
                                                    {{--name='finish' value='Finish'/>--}}
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