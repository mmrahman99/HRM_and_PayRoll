@extends('hrms.layouts.base')

@section('content')

    {{--<div class="content">--}}

    {{--<header id="topbar" class="alt">--}}
    {{--<div class="topbar-left">--}}
    {{--<ol class="breadcrumb">--}}
    {{--<li class="breadcrumb-icon">--}}
    {{--<a href="/dashboard">--}}
    {{--<span class="fa fa-home"></span>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="breadcrumb-active">--}}
    {{--<a href="/dashboard"> Dashboard </a>--}}
    {{--</li>--}}
    {{--<li class="breadcrumb-link">--}}
    {{--<a href=""> Leaves </a>--}}
    {{--</li>--}}
    {{--<li class="breadcrumb-current-item"> Total Leave Requests </li>--}}
    {{--</ol>--}}
    {{--</div>--}}
    {{--</header>--}}

    {{--<section id="content" class="table-layout animated fadeIn">--}}

    {{--<!-- -------------- Column Center -------------- -->--}}
    {{--<div class="chute chute-center">--}}

    {{--<!-- -------------- Products Status Table -------------- -->--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-12">--}}
    {{--<div class="box box-success">--}}
    {{--<div class="panel">--}}
    {{--<div class="panel-heading">--}}
    {{--<span class="panel-title hidden-xs"> Total Leave Lists </span><br />--}}
    {{--</div><br />--}}
    {{--<div class="panel-menu allcp-form theme-primary mtn">--}}
    {{--<div class="row">--}}

    {{--{!! Form::open() !!}--}}
    {{--<div class="col-md-2">--}}
    {{--<input type="text" class="field form-control" placeholder="Gross Salary" style="height:40px" name="string" >--}}
    {{--</div>--}}
    {{--<div class="col-md-3">--}}
    {{--<label class="field select">--}}
    {{--{!! Form::select('column', getLeaveColumns(),$column) !!}--}}
    {{--<i class="arrow double"></i>--}}
    {{--</label>--}}
    {{--</div>--}}

    {{--<div class="col-md-2">--}}
    {{--<input type="text" id="datepicker1" class="select2-single form-control"--}}
    {{--name="dateFrom"  placeholder="Allowance"/>--}}
    {{--</div>--}}
    {{--<div class="col-md-2">--}}
    {{--<input type="text" id="datepicker4" class="select2-single form-control"--}}
    {{--name="dateTo"  placeholder="SSNIT"/>--}}
    {{--</div>--}}

    {{--<div class="col-md-2">--}}
    {{--<input type="text" id="datepicker4" class="select2-single form-control"--}}
    {{--name="dateTo"  placeholder="Tax"/>--}}
    {{--</div>--}}

    {{--<div class="col-md-2">--}}
    {{--<input type="text" id="datepicker4" class="select2-single form-control"--}}
    {{--name="dateTo"  placeholder="Net Income"/>--}}
    {{--</div>--}}

    {{--<div class="col-md-2"><br />--}}
    {{--<input type="submit" value="Search" name="button" class="btn btn-primary" >--}}
    {{--</div>--}}

    {{--<div class="col-md-2"><br />--}}
    {{--<input type="submit" value="Export" name="button" class="btn btn-success">--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}

    {{--<div class="col-md-2"><br />--}}
    {{--<a href="/total-leave-list" >--}}
    {{--<input type="submit" value="Reset" class="btn btn-warning"></a>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    {{--</div>--}}

    {{--TODO: complete cosmetic changes--}}
    <div class="content">

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
                        <a href=""> Leaves </a>
                    </li>
                    <li class="breadcrumb-current-item"> Total Leave Requests</li>
                </ol>
            </div>
        </header>


        <!-- -------------- Content -------------- -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- -------------- Column Center -------------- -->
            <div class="chute chute-center">

                <!-- -------------- Products Status Table -------------- -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-success">
                            <div class="panel">
                                <div class="panel-heading">
                                    <span class="panel-title hidden-xs"> Total Leave Lists </span><br/>
                                </div>
                                <br/>
                                <div class="panel-menu allcp-form theme-primary mtn">
                                    <div class="row">
                                        {!! Form::open() !!}
                                        <div class="col-md-3">
                                            <input type="text" class="field form-control" placeholder="query string"
                                                   style="height:40px" name="string" value="{{$string}}">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="field select">
                                                {!! Form::select('column', getLeaveColumns(),$column) !!}
                                                <i class="arrow double"></i>
                                            </label>
                                        </div>

                                        <div class="col-md-3">
                                            <input type="text" id="datepicker1" class="select2-single form-control"
                                                   name="dateFrom" value="{{$dateFrom}}" placeholder="date from"/>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="datepicker4" class="select2-single form-control"
                                                   name="dateTo" value="{{$dateTo}}" placeholder="date to"/>
                                        </div>

                                        <div class="col-md-2"><br/>
                                            <input type="submit" value="Search" name="button" class="btn btn-primary">
                                        </div>

                                        <div class="col-md-2"><br/>
                                            <input type="submit" value="Export" name="button" class="btn btn-success">
                                        </div>
                                        {!! Form::close() !!}
                                        <div class="col-md-2"><br/>
                                            <a href="/total-leave-list">
                                                <input type="submit" value="Reset" class="btn btn-warning"></a>
                                        </div>

                                    </div>
                                </div>
                                <div class="panel-body pn">
                                    @if(Session::has('flash_message'))
                                        <div class="alert alert-success">
                                            {{ Session::get('flash_message') }}
                                        </div>
                                    @endif

                                    @if(count($emps))
                                        <div class="table-responsive">
                                            <table class="table allcp-form theme-warning tc-checkbox-1 fs13">
                                                <thead>
                                                <tr class="bg-light">
                                                    <th class="text-center">Id</th>
                                                    <th class="text-center">Employee</th>
                                                    <th class="text-center">Code</th>
                                                    {{--<th class="text-center">Leave Type</th>--}}
                                                    <th class="text-center">Date</th>
                                                    {{--<th class="text-center">Date To</th>--}}
                                                    <th class="text-center">Gross Salary</th>
                                                    <th class="text-center">Tax Deducted</th>
                                                    <th class="text-center">Payslip</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($emps as $emp)
                                                    <tr>
                                                        <td class="text-center">{{$emp->id}}</td>
                                                        <td class="text-center">{{$emp->user->name)//$emp->user()->id}}</td>
                                                        {{--<td class="text-center">{{($emp->user->employee->code)//$emp->user()->email}}</td>--}}
                                                        {{--<td class="text-center">{{(isset($post))? $leave->leave_type : getLeaveType($leave->leave_type_id)}}</td>--}}
                                                        <td class="text-center">code</td>
                                                        {{--<td class="text-center">{{getFormattedDate($leave->date_to)}}</td>--}}
                                                        <td class="text-center">{{getFormattedDate($emp->date)}}</td>
                                                        <td class="text-center"
                                                            id="remark-{{$emp->id}}">{{$emp->gross_salary}}</td>
                                                        <input type="hidden" value="{!! csrf_token() !!}" id="token">
                                                        <td class="text-center">
                                                            {{$emp->total_tax_deducted}}
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group text-right"
                                                                 id="button-{{$emp->id}}">
                                                                <a type="button"
                                                                   class="btn btn-info br2 btn-xs fs12"
                                                                   href="{{route('payslip',$emp->employee_id)}}"> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="8">
                                                        {{--{!! $emps->render() !!}--}}
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    @else
                                        <div class="row text-center">
                                            <h2>No leaves to show</h2>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Notification modal -->

        <div class="modal fade" tabindex="-1" role="dialog" id="notification-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div id="modal-header" class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <p></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Modal -->
        <div id="remarkModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Remark</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            <textarea id="remark-text" class="form-control" placeholder="Remarks"></textarea>
                            <input type="hidden" id="leave_id">
                            <input type="hidden" id="type">

                        <div id="loader" class="hidden text-center">
                            <img src="/photos/76.gif"/>
                        </div>
                        <div id="status-message" class="hidden">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="proceed-button">Proceed</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


        <!-- /Notification Modal -->
    </div>




@endsection
@push('scripts')
    <script src="/assets/js/custom.js"></script>
@endpush