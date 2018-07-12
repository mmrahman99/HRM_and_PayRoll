@extends('hrms.layouts.base')

@section('content')

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
                        <a href="/edit-financial-data"> Financial Data </a>
                    </li>
                    <li class="breadcrumb-current-item"> Add Insurance</li>
                </ol>
            </div>
        </header>
        <!-- -------------- Content -------------- -->
        <section id="content" class="table-layout animated fadeIn">
            <!-- -------------- Column Center -------------- -->
            <div class="chute-affix" data-spy="affix" data-offset-top="200">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-success">
                            <div class="panel">
                                <div class="panel-heading">
                                    <span class="panel-title hidden-xs"> Add Insurance Scheme </span>
                                </div>

                                <div class="panel-body pn">
                                    <div class="table-responsive">
                                        <div class="panel-body p25 pb10">

                                            @if(Session::has('flash_message'))
                                                <div class="alert alert-success">
                                                    {{ Session::get('flash_message') }}
                                                </div>
                                            @endif
                                            {{--<form class="form-horizontal" role="form">--}}
                                            {!! Form::open(['class' => 'form-horizontal']) !!}

                                            <div class="form-group">
                                                <label class="col-md-3 control-label"> Scheme Name </label>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="name of scheme..."
                                                           name="scheme_name"
                                                           id="input002" class="select2-single form-control" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Total Rate</label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <input type="number" step="0.1" placeholder="Rate..."
                                                               name="total_rate"
                                                               id="input002" class="select2-single form-control"
                                                               required>
                                                        <div class="input-group-addon">
                                                            <div class="input-group-text">%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Company Payable Rate</label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <input type="number" step="0.1" placeholder="Company rate..."
                                                               name="company_rate"
                                                               id="input002" class="select2-single form-control"
                                                               required>
                                                        <div class="input-group-addon">
                                                            <div class="input-group-text">%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Employee Payable Rate</label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <input type="number" step="0.1" placeholder="Employee rate..."
                                                               name="employee_rate"
                                                               id="input002" class="select2-single form-control"
                                                               required>
                                                        <div class="input-group-addon">
                                                            <div class="input-group-text">%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-2">
                                                    <input type="submit" class="btn btn-bordered btn-info btn-block"
                                                           value="Submit">
                                                </div>
                                                <div class="col-md-2"><a href="/add-insurance">
                                                        <input type="button"
                                                               class="btn btn-bordered btn-success btn-block"
                                                               value="Reset"></a></div>
                                            </div>
                                            {!! Form::close() !!}
                                            {{--</form>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    @push('styles')
        <link rel="stylesheet" type="text/css" href="/assets/allcp/forms/css/bootstrap-select.css">
    @endpush
    @push('scripts')
        <script src="/assets/allcp/forms/js/bootstrap-select.js"></script>
    @endpush

@endsection