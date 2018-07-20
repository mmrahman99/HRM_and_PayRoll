@extends('hrms.layouts.base')

@section('content')

    <div class="container-fluid">

        <div class="row">

            <div class="col"></div>
            <div class="col">
                <div class="card">
                    {!! Form::open(array('action'=> 'payrollController@calculate') ) !!}
                    {!! Form::token() !!}

                    <h3 style="text-align: center; margin-top: 100px;">Payroll Manager</h3>
                    <div style="margin-top: 160px;">
                    <div class="table-responsive">
                        <table class="table allcp-form theme-warning tc-checkbox-1 fs13" style="margin: 0 auto;">
                            <thead>
                            <tr class="bg-light">
                                <th class="text-center">Employee Name</th>
                                <th class="text-center">Gross Salary</th>
                                <th class="text-center">Deductions</th>
                                <th class="text-center">Net Salary</th>
                                <th class="text-center">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($emps as $emp)
                                <tr>
                                    <td class="text-center">{{$emp->employee->name}}</td>
                                    <td class="text-center">{{$emp->employee->salary}}</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>


            <button style="margin-top: 45px; margin-right:25px; padding: 12px; border-radius: 10px; background-color: #00a1d9; color: #0b0b0b;" class="btn btn-primary pull-right" >Run Payroll>></button>

            </div>

            <div class="col"></div>


        </div>

    </div>


@endsection
