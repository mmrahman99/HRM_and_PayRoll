@extends('hrms.layouts.base')

@section('content')

    <div class="container-fluid">

        <div class="row">

            <div class="col"></div>
            <div class="col">
                <div class="card">
                    {!! Form::open(array('action'=> 'payrollController@calculate') ) !!}
                    {!! Form::token() !!}
                    <button type="submit"></button>
                </div>
            </div>
            <div class="col"></div>


        </div>

    </div>


@endsection
