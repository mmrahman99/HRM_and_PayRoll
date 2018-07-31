@extends('hrms.layouts.base')

@section('content')

    <div class="container-fluid">
        <div class="card" style="margin-top: 55px;">
        <h1 style="text-align: center; margin-bottom: 25px;" >Pay Slip</h1>
        <table class="table table-striped"/>
        <thead>
        <tr >
            <th colspan="2"><p style="font-size: 30px; text-transform: capitalize;">{{$payslip->user->name}}</p></th>
            <th class="align-right">GHS</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="2">Gross Pay</td>
            <td class="align-right ng-binding">{{$payslip->gross_salary}}</td>
        </tr>
        <tr>
            <td colspan="2">SSNIT</td>
            <td class="align-right ng-binding">{{$payslip->ssnit}}</td>
        </tr>
        <tr>
            <td colspan="2">Total Taxes</td>
            <td class="align-right ng-binding">{{$payslip->total_tax_deducted}}</td>
        </tr>
        <tr>
            <td colspan="2">Net Pay(Take Home)</td>
            <td class="align-right ng-binding bg-success">{{$payslip->net_salary}}</td>
        </tr>
        </tbody>
        </table>
    </div>
        <button style="margin-top: 55px; padding: 12px; font-size: 14px; border-radius: 10px;" type="button" class="btn btn-large btn-primary pull-right">Print >></button><div class="clearfix"></div>
    </div>

@endsection