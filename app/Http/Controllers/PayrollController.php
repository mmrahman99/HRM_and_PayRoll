<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayrollController extends Controller
{

    public function showCalculator()
    {
        return view('hrms.payroll.calculator');
    }

    public function showCompanyFinancial()
    {
        return view('hrms.payroll.company-financial');
    }

    public function showEditFinancialData()
    {
        return view('hrms.payroll.edit-financial-data');
    }

    public function showFinancialManager()
    {
        return view('hrms.payroll.financial-manager');
    }

    public function showPayrollManager()
    {
        return view('hrms.payroll.payroll-manager');
    }

    public function showPayslip()
    {
        return view('hrms.payroll.payslip');
    }

    public function showAllPayslips()
    {
        return view('hrms.payroll.show-payslips');
    }

    public function tax(Request $request)
    {


        $gross = $request->gross_salary;
        $allowance = $request->allowance;

        $ssnitRate = 5.5;
        $taxRates = array(
            array(0, 261),
            array(5, 70),
            array(10, 100),
            array(17.5, 2810),
            array(25, INF)
        );

        $totalTax = 0.0;
        $ssnit = $gross * $ssnitRate / 100;
        $taxableRemaining = $gross - $ssnit + $allowance;

        for ($i = 0; $i < count($taxRates); $i++) {

            if ($taxableRemaining > 0) {

                $tranche = ($taxableRemaining > $taxRates[$i][1]) ? $taxRates[$i][1] : $taxableRemaining;
                $totalTax += $taxRates[$i][0] * $tranche / 100.0;
                $taxableRemaining -= $tranche;
            }

        }

        $netIncome = $gross + $allowance - $totalTax - $ssnit;
// return array("incomeTax" => $totalTax, "ssnit" => $ssnit, "netIncome" => $netIncome);

//    echo $netIncome;
//        echo $totalTax;

        $net = $netIncome;

        $tax = $totalTax;

        $ins = $ssnit;

        echo $ins;
        echo $tax;
        echo $net;
//
//  return (redirect('/incomeshow')->with('values', $netIncome,$totalTax,$ssnit));
//
//        return($netIncome);

        //net_income = $request->$net_income;

    }

}
