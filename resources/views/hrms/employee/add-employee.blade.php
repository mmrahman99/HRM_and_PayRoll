@extends('hrms.layouts.base')

@section('content')
    {{--<head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Get Shit Done Bootstrap Wizard by Creative Tim</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!--     Fonts and icons     -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

        <!-- CSS Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="assets/css/demo.css" rel="stylesheet" />
    </head>--}}
    {{--TODO: fix add employee--}}
    {{--
        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 allcp-form">

                    <!--      Wizard container        -->
                    <div class="wizard-container">

                        <div class="card wizard-card" data-color="azzure" id="wizardProfile">
                            <form action="" method="post">
                                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                                <div class="wizard-header">
                                    <h3>
                                        <b>BUILD</b> YOUR PROFILE <br>
                                        <small>This information will let us know more about you.</small>
                                    </h3>
                                </div>

                                <div class="wizard-header wizard-navigation">
                                    <ul>
                                        <li><a href="#about" data-toggle="tab">About</a></li>
                                        <li><a href="#account" data-toggle="tab">Account</a></li>
                                        <li><a href="#address" data-toggle="tab">Address</a></li>
                                    </ul>

                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane" id="about">
                                        <div class="row">
                                            <h4 class="info-text"> Let's start with the basic information (with
                                                validation)</h4>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="assets/img/default-avatar.png" class="picture-src"
                                                             id="wizardPicturePreview" title=""/>
                                                        <input type="file" id="wizard-picture">
                                                    </div>
                                                    <h6>Choose Picture</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>First Name
                                                        <small>(required)</small>
                                                    </label>
                                                    <input name="firstname" type="text" class="form-control"
                                                           placeholder="Andrew...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Last Name
                                                        <small>(required)</small>
                                                    </label>
                                                    <input name="lastname" type="text" class="form-control"
                                                           placeholder="Smith...">
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Email
                                                        <small>(required)</small>
                                                    </label>
                                                    <input name="email" type="email" class="form-control"
                                                           placeholder="andrew@creative-tim.com">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="account">
                                        <h4 class="info-text"> What are you doing? (checkboxes) </h4>
                                        <div class="row">

                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="jobb" value="Design">
                                                        <div class="icon">
                                                            <i class="fa fa-pencil"></i>
                                                        </div>
                                                        <h6>Design</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="jobb" value="Code">
                                                        <div class="icon">
                                                            <i class="fa fa-terminal"></i>
                                                        </div>
                                                        <h6>Code</h6>
                                                    </div>

                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="jobb" value="Develop">
                                                        <div class="icon">
                                                            <i class="fa fa-laptop"></i>
                                                        </div>
                                                        <h6>Develop</h6>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="address">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Are you living in a nice area? </h4>
                                            </div>
                                            <div class="col-sm-7 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Street Name</label>
                                                    <input type="text" class="form-control" placeholder="5h Avenue">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Street Number</label>
                                                    <input type="text" class="form-control" placeholder="242">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="New York...">
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label>Country</label><br>
                                                    <select name="country" class="form-control">
                                                        <option value="Afghanistan"> Afghanistan</option>
                                                        <option value="Albania"> Albania</option>
                                                        <option value="Algeria"> Algeria</option>
                                                        <option value="American Samoa"> American Samoa</option>
                                                        <option value="Andorra"> Andorra</option>
                                                        <option value="Angola"> Angola</option>
                                                        <option value="Anguilla"> Anguilla</option>
                                                        <option value="Antarctica"> Antarctica</option>
                                                        <option value="...">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer height-wizard">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm'
                                               name='next' value='Next'/>
                                        <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm'
                                               name='finish' value='Finish'/>

                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm'
                                               name='previous' value='Previous'/>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->
    --}}

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
                        <li class="breadcrumb-current-item"> Edit details of {{$emps->name}} </li>
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
                        <li class="breadcrumb-current-item"> Add Details</li>
                    </ol>
                </div>

            @endif
        </header>
        <!--   Big container   -->
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
                <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="purple" id="wizardProfile">
                            {{--{!! Form::open() !!}--}}
                            <form action="/add-employee" method="post">
                                <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

                                {{--<div class="wizard-header">--}}
                                {{--<h3 class="wizard-title">--}}
                                {{--Build Your Profile--}}
                                {{--</h3>--}}
                                {{--<h5>This information will let us know more about you.</h5>--}}
                                {{--</div>--}}
                                <div class="wizard-header">
                                    <div class="wizard-navigation">
                                        <ul>
                                            <li><a href="#personal" data-toggle="tab">Personal Details</a></li>
                                            <li><a href="#employment" data-toggle="tab">Employment details</a></li>
                                            <li><a href="#banking" data-toggle="tab">Banking Details</a></li>
                                            {{--sep--}}
                                            <li><a href="#ex-employment" data-toggle="tab">Ex Employment Details</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane" id="personal">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text">Personal Details</h4>
                                                <div class="choice active" data-toggle="wizard-radio">
                                                    <div class="icon">
                                                        <i class="material-icons">face</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="assets/img/default-avatar.png" class="picture-src"
                                                             id="wizardPicturePreview" title=""/>
                                                        <input type="file" id="wizard-picture">
                                                        <!--onChange="document.getElementById('uploader1').value = this.value;"-->
                                                    </div>
                                                    <h6>Choose Picture</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">work</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Employee Code
                                                            <small>(required)</small>
                                                        </label>
                                                        <input name="emp_code" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">person</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Name
                                                            <small>(required)</small>
                                                        </label>
                                                        <input name="emp_name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">

                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email
                                                            <small>(required)</small>
                                                        </label>
                                                        <input name="email" type="email" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-12 ">
                                                    {{--<div class="form-group col-md-10">--}}
                                                    {{--<label class="label" for="gender">Gender--}}
                                                    {{--<small>(required)</small>--}}
                                                    {{--</label>--}}
                                                    {{--<div class="choice col-md-6 radio" data-toggle="wizard-radio">--}}
                                                    {{--<input type="radio" value="0" name="gender" id="gender">--}}
                                                    {{--<div class="icon">--}}
                                                    {{--<i class="fa fa-male"></i>--}}
                                                    {{--</div>--}}
                                                    {{--<h6>Male</h6>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="choice col-md-6 radio" data-toggle="wizard-radio">--}}
                                                    {{--<input type="radio" value="1" name="gender" id="gender">--}}
                                                    {{--<div class="icon">--}}
                                                    {{--<i class="fa fa-female"></i>--}}
                                                    {{--</div>--}}
                                                    {{--<h6>Female</h6>--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}
                                                    <div class="form-group">
                                                        <label class="label">Gender</label>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" value="1" name="gender" id="gender"
                                                                       @if(isset($emps))@if($emps->employee->pf_status == '1')checked @endif @endif>
                                                                Male
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" value="0" name="gender" id="gender"
                                                                       @if(isset($emps))@if($emps->employee->pf_status == '0')checked @endif @endif>
                                                                Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">calendar_today</i>
													</span>
                                                    <div class="form-group">
                                                        <label class="label">Date Of Birth
                                                            <small>(required)</small>
                                                        </label>
                                                        <input type="date" id="dob" name="dob"
                                                               class="form-control date">
                                                    </div>
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon">
														<i class="material-icons">contact_phone</i>
													</span>
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Mobile Number
                                                                <small>(required)</small>
                                                            </label>
                                                            <input type="number" name="mob_number" id="mobile_phone"
                                                                   class="form-control" maxlength="10" minlength="3">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Emergency Number
                                                                <small>(required)</small>
                                                            </label>
                                                            <input type="number" name="emer_number"
                                                                   id="emergency_number" class="form-control"
                                                                   maxlength="10" minlength="3">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon">
														<i class="material-icons">location_on</i>
													</span>
                                                    <div class="col-sm-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Permanent Address
                                                                <small>(required)</small>
                                                            </label>
                                                            <input type="text" name="permanent_address"
                                                                   id="permanent_address" class="form-control">
                                                        </div>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Current Address
                                                                <small>(required)</small>
                                                            </label>
                                                            <input type="text" name="current_address"
                                                                   id="current_address" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Emergency Contact
                                                                <small>(required)</small>
                                                            </label>
                                                            <input type="text" name="emer_contact" id="emer_contact"
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="employment">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text">Employment Details</h4>
                                                <div class="choice active" data-toggle="wizard-radio">
                                                    <div class="icon">
                                                        <i class="material-icons">work_outline</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">

                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">assignment_ind</i>
													</span>
                                                    {{--<div class="form-group col-md-10">--}}
                                                    {{--<label class="label" for="formalities">Formalities--}}
                                                    {{--<small>(required)</small>--}}
                                                    {{--</label>--}}
                                                    {{--<div class="choice col-md-6 form-group" data-toggle="wizard-radio">--}}
                                                    {{--<input type="radio" value="1" name="formalities" class="radio-inline"--}}
                                                    {{--id="formalities"--}}
                                                    {{--@if(isset($emps))@if($emps->employee->formalities == '1')checked @endif @endif>--}}
                                                    {{--<div class="icon">--}}
                                                    {{--<i class="fa fa-check"></i>--}}
                                                    {{--</div>--}}
                                                    {{--<h6>Accepted</h6>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="choice col-md-6 form-group" data-toggle="wizard-radio">--}}
                                                    {{--<input type="radio" value="0" name="formalities" class="radio-inline" id="formalities"--}}
                                                    {{--@if(isset($emps))@if($emps->employee->formalities == '0')checked @endif @endif>--}}
                                                    {{--<div class="icon">--}}
                                                    {{--<i class="fa fa-xing"></i>--}}
                                                    {{--</div>--}}
                                                    {{--<h6>Pending</h6>--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}
                                                    <div class="form-group">
                                                        <label class="label">Formalities</label>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" value="1" name="formalities"
                                                                       class="radio-inline"
                                                                       id="formalities"
                                                                       @if(isset($emps))@if($emps->employee->formalities == '1')checked @endif @endif>
                                                                Completed
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" value="0" name="formalities"
                                                                       class="radio-inline" id="formalities"
                                                                       @if(isset($emps))@if($emps->employee->formalities == '0')checked @endif @endif>
                                                                pending
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">assignment_ind</i>
													</span>
                                                    {{--<div class="form-group col-md-10">--}}
                                                    {{--<label class="label" for="offer_acceptance">Offer Acceptance--}}
                                                    {{--<small>(required)</small>--}}
                                                    {{--</label>--}}
                                                    {{--<div class="choice col-md-6 form-group" data-toggle="wizard-radio">--}}
                                                    {{--<input type="radio" value="1" name="offer_acceptance" id="offer_acceptance"--}}
                                                    {{--@if(isset($emps))@if($emps->employee->offer_acceptance == '1')checked @endif @endif>--}}
                                                    {{--<div class="icon">--}}
                                                    {{--<i class="fa fa-check"></i>--}}
                                                    {{--</div>--}}
                                                    {{--<h6>Accepted</h6>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="choice col-md-6 form-group" data-toggle="wizard-radio">--}}
                                                    {{--<input type="radio" value="0" name="offer_acceptance" id="offer_acceptance"--}}
                                                    {{--@if(isset($emps))@if($emps->employee->offer_acceptance == '0')checked @endif @endif>--}}
                                                    {{--<div class="icon">--}}
                                                    {{--<i class="fa fa-xing"></i>--}}
                                                    {{--</div>--}}
                                                    {{--<h6>Pending</h6>--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}
                                                    <div class="form-group">
                                                        <label class="label">Offer Acceptance</label>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" value="1" name="offer_acceptance"
                                                                       id="offer_acceptance"
                                                                       @if(isset($emps))@if($emps->employee->offer_acceptance == '1')checked @endif @endif>
                                                                Accepted
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" value="0" name="offer_acceptance"
                                                                       id="offer_acceptance"
                                                                       @if(isset($emps))@if($emps->employee->offer_acceptance == '0')checked @endif @endif>
                                                                Pending
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Access Type
                                                            <small>(required)</small>
                                                        </label>
                                                        <select class="form-control" name="access_type"
                                                                id="access_type">
                                                            <option></option>
                                                            <option>employee</option>
                                                            <option>manager</option>
                                                            <option>admin</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">assignment_ind</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Role
                                                            <small>(required)</small>
                                                        </label>
                                                        <select class="form-control" name="role" id="role">
                                                            <option value=""></option>
                                                            @foreach($roles as $role)
                                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon">
														<i class="material-icons">calendar_today</i>
													</span>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="label">Date Of Joining
                                                                <small>(required)</small>
                                                            </label>
                                                            <input type="date" id="doj" name="doj" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="label">Date of Confirmation
                                                                <small>(required)</small>
                                                            </label>
                                                            <input type="date" id="doc" name="doc" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Probation Period
                                                            <small>(required)</small>
                                                        </label>
                                                        <select class="form-control" name="prob_period"
                                                                id="probation_period">
                                                            <option value=""></option>
                                                            <option value="0">0 days</option>
                                                            <option value="90">90 days</option>
                                                            <option value="180">180 days</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="col-sm-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Qualification
                                                                <small>(required)</small>
                                                            </label>
                                                            {!! Form::select('qualification_list', qualification(),'', ['class' => 'form-control qualification_select', 'id' => 'qualification']) !!}
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Department
                                                                <small>(required)</small>
                                                            </label>
                                                            <select class="form-control" name="department"
                                                                    id="department">
                                                                <option value=""></option>
                                                                @if($departments)
                                                                    @foreach($departments as $dept)
                                                                        <option value="{{$dept->id}}">{{$dept->name}}</option>
                                                                    @endforeach
                                                                @else
                                                                    <option value="">No Departments set</option>
                                                                @endif

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="banking">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Banking Details</h4>
                                                <div class="choice active" data-toggle="wizard-radio">
                                                    <div class="icon">
                                                        <i class="material-icons">account_balance</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">attach_money</i>
													</span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Salary
                                                        <small>(required)</small>
                                                    </label>
                                                    <input type="text" name="salary" id="salary" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Bank Name
                                                        <small>(required)</small>
                                                    </label>
                                                    <input type="text" name="bank_name" id="bank_name"
                                                           class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Account Number
                                                        <small>(required)</small>
                                                    </label>
                                                    <input type="text" name="account_number" id="account_number"
                                                           class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">IFSC Code</label>
                                                    <input type="text" name="ifsc_code" id="ifsc_code"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">PF Number</label>
                                                    <input type="text" name="pf_account_number" id="pf_account_number"
                                                           class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-sm-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">UN Number</label>
                                                    <input type="text" name="un_number" id="un_number"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="label">PF Status</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="1" name="pf_status"
                                                                   id="pf_status"
                                                                   @if(isset($emps))@if($emps->employee->pf_status == '1')checked @endif @endif>
                                                            Active
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="0" name="pf_status"
                                                                   id="pf_status"
                                                                   @if(isset($emps))@if($emps->employee->pf_status == '0')checked @endif @endif>
                                                            Inactive
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Pan Number
                                                        <small>(required)</small>
                                                    </label>
                                                    <input type="text" name="pan_number" id="pan_number"
                                                           class="form-control">
                                                </div>
                                            </div> <!--move-->
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="ex-employment">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Ex-employment Details</h4>
                                                <div class="choice active" data-toggle="wizard-radio">
                                                    <div class="icon">
                                                        <i class="fa fa-xing"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{--<div class="form-group col-md-10">--}}
                                                {{--<label class="label" for="emp_status">Employment Status--}}
                                                {{--<small>(required)</small>--}}
                                                {{--</label>--}}
                                                {{--<div class="choice col-md-6" data-toggle="wizard-radio">--}}
                                                {{--<input type="radio" name="emp_status" id="emp_status" value="1" class="radio-inline">--}}
                                                {{--<div class="icon">--}}
                                                {{--<i class="fa fa-check"></i>--}}
                                                {{--</div>--}}
                                                {{--<h6>Present</h6>--}}
                                                {{--</div>--}}
                                                {{--<div class="choice col-md-6" data-toggle="wizard-radio">--}}
                                                {{--<input type="radio" name="emp_status" id="emp_status" value="0">--}}
                                                {{--<div class="icon">--}}
                                                {{--<i class="fa fa-xing"></i>--}}
                                                {{--</div>--}}
                                                {{--<h6>Ex</h6>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                <div class="form-group">
                                                    <label class="label">Employee Status</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="emp_status" id="emp_status"
                                                                   value="1" class="radio-inline">
                                                            present
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="emp_status" id="emp_status"
                                                                   value="0">
                                                            Ex
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label class="label">Date of Resignation</label>
                                                    <input type="date" id="dor" class="form-control" name="dor"/></div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label class="label">Notice Period</label>
                                                    <select class="form-control" name="notice_period"
                                                            id="notice_period">
                                                        <option value=""></option>
                                                        <option value="1">1 Month</option>
                                                        <option value="2">2 Months</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label class="label">Last Working Day</label>
                                                    <input type="date" id="lwd" class="form-control" name="lwd"/></div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label class="label">Full and Final</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="1" name="full_final"
                                                                   id="full_final"
                                                                   @if(isset($emps))@if($emps->employee->offer_acceptance == '1')checked @endif @endif>
                                                            Final
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="0" name="full_final"
                                                                   id="full_final"
                                                                   @if(isset($emps))@if($emps->employee->offer_acceptance == '0')checked @endif @endif>
                                                            pending
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-success btn-wd'
                                               name='next' value='Next'/>
                                        <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd'
                                               name='finish' value='Finish'/>
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd'
                                               name='previous' value='Previous'/>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->
    </div>

@endsection

@push('scripts')
    {{--}<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="assets/js/gsdk-bootstrap-wizard.js"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
    <script src="assets/js/jquery.validate.min.js"></script>--}}

    <!--   Core JS Files   -->
    {{--<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>--}}
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="assets/js/material-bootstrap-wizard.js"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
    <script src="assets/js/jquery.validate.min.js"></script>

    {{--<!-- -------------- jQuery -------------- -->--}}
    {{--<script src='/assets/js/jquery/jquery-1.11.3.min.js'></script>--}}
    {{--<script src='/assets/js/jquery/jquery_ui/jquery-ui.min.js'></script>--}}

    {{--<!-- -------------- MonthPicker JS -------------- -->--}}
    {{--<script src='/assets/allcp/forms/js/jquery-ui-monthpicker.min.js'></script>--}}
    {{--<script src="assets/allcp/forms/js/jquery-ui-datepicker.min.js"></script>--}}
    {{--<script src='/assets/allcp/forms/js/jquery.spectrum.min.js'></script>--}}
    {{--<script src='/assets/allcp/forms/js/jquery.stepper.min.js'></script>--}}

    {{--<script src="/assets/js/function.js"></script>--}}
    {{--<script src="/assets/js/plugins/select2/select2.min.js"></script>--}}

    {{--<!-- -------------- Plugins -------------- -->--}}
    {{--<script src='/assets/allcp/forms/js/jquery.validate.min.js'></script>--}}
    {{--<script src='/assets/allcp/forms/js/jquery.steps.min.js'></script>--}}
@endpush()

{{--<!-- -------------- jQuery -------------- -->--}}
{{--{!! Html::script('/assets/js/jquery/jquery-1.11.3.min.js') !!}--}}
{{--{!! Html::script('/assets/js/jquery/jquery_ui/jquery-ui.min.js') !!}--}}

{{--<!-- -------------- HighCharts Plugin -------------- -->--}}
{{--{!! Html::script('/assets/js/plugins/highcharts/highcharts.js') !!}--}}

{{--<!-- -------------- MonthPicker JS -------------- -->--}}
{{--{!! Html::script('/assets/allcp/forms/js/jquery-ui-monthpicker.min.js') !!}--}}
{{--{!! Html::script('/assets/allcp/forms/js/jquery-ui-datepicker.min.js') !!}--}}
{{--{!! Html::script('/assets/allcp/forms/js/jquery.spectrum.min.js') !!}--}}
{{--{!! Html::script('/assets/allcp/forms/js/jquery.stepper.min.js') !!}--}}


{{--<!-- -------------- Plugins -------------- -->--}}
{{--{!! Html::script('/assets/allcp/forms/js/jquery.validate.min.js') !!}--}}
{{--{!! Html::script('/assets/allcp/forms/js/jquery.steps.min.js') !!}--}}

{{--<!-- -------------- Theme Scripts -------------- -->--}}
{{--{!! Html::script('/assets/js/utility/utility.js') !!}--}}
{{--{!! Html::script('/assets/js/demo/demo.js') !!}--}}
{{--{!! Html::script('/assets/js/main.js') !!}--}}
{{--{!! Html::script('/assets/js/demo/widgets_sidebar.js') !!}--}}
{{--{!! Html::script('/assets/js/custom_form_wizard.js') !!}--}}

{!!  Html::script ('/assets/js/pages/forms-widgets.js')!!}

<script src="/assets/js/plugins/select2/select2.min.js"></script>
<script src="/assets/js/function.js"></script>
