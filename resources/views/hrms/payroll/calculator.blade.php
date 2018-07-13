@extends('hrms.layouts.base')

@section('content')

    {{ Form::open(['class' => 'form-horizontal']) }}

    <div class="form-group">
        <label class="col-md-3 control-label"> Input Gross Salary </label>
        <br>
        <div class="col-md-6">
            <input type="text" placeholder="Gross Salary" name="gross_salary"
                   id="gross" class="select2-single form-control" required>
        </div>
    </div>
    <br>

    <div class="form-group">
        <label class="col-md-3 control-label"> Allowance </label>
        <br>
        <div class="col-md-6">
            <input type="text" placeholder="Allowance" name="allowance"
                   id="allowance" class="select2-single form-control">
        </div>
    </div>

    <br>

    <div class="form-group">
        <label class="col-md-3 control-label"> Insurance Deducted </label>
        <br>
        <div class="col-md-6">
            <input type="text" 3 placeholder="insurance deducted" name="insurance"
                   id="insurance" class="select2-single form-control">
        </div>
    </div>

    <br>

    <div class="form-group">
        <label class="col-md-3 control-label"> Tax Deducted </label>
        <br>
        <div class="col-md-6">
            <input type="text" placeholder="tax deducted" name="tax"
                   id="tax" class="select2-single form-control">
        </div>
    </div>

    <br>

    <div class="form-group">
        <label for="multiselect2" class="col-md-3 control-label"> Net Income </label>

        <br>
        <div class="col-md-6">
            <input type="text" placeholder="net income" name="net"
                   id="net" class="select2-single form-control">
        </div>
    </div>
    <br>
    <div class="form-group">
        <input type="button" value="Calculate" onclick="computeTaxes()">
    </div>
    <!-- <div class="form-group">
        <label class="col-md-3 control-label"></label>
        <div class="col-md-2">
            <input type="submit" id="calculate" class="btn btn-bordered btn-info btn-block" value="Calculate">
        </div>
        <!-- <div class="col-md-2"><a href="/payment" >
                <input type="button" class="btn btn-bordered btn-success btn-block" value="Reset"></a></div> -->
    </div>
    <!-- </form> -->
    {{ Form::close() }}


    <script type="text/javascript">


        function computeTaxes() {

            var gross = parseInt($("#gross").val());
            var allowances = parseInt($("#allowance").val());
            var ssnitRate = 5.5;
            var taxRates = [
                [0, 261],
                [5, 70],
                [10, 100],
                [17.5, 2810],
                [25, Number.POSITIVE_INFINITY] // anything above GHC 3,241
            ];


            var totalTax = 0.0;
            var ssnit = gross * ssnitRate / 100.0;
            var taxableRemaining = (gross - ssnit) + allowances;

            for (var i = 0; i < taxRates.length; i++) {
                if (taxableRemaining > 0) { //if there's money left to be taxed
                    var tranche = taxableRemaining > taxRates[i][1] ? taxRates[i][1] : taxableRemaining; //ternary operator
                    totalTax += taxRates[i][0] * tranche / 100.0;
                    taxableRemaining -= tranche;
                }
            }
            var netIncome = (gross + allowances) - totalTax - ssnit;

            $("#net").val(netIncome);

            $("#tax").val(totalTax);

            $("#insurance").val(ssnit);

            console.log(netIncome);
            return false;

            // return {
            //     incomeTax: totalTax,
            //     ssnit: ssnit,
            //     netIncome: netIncome
            // };
        }


    </script>


@endsection