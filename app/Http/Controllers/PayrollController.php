<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\payslips;
use App\tax_schemes;
use App\User;
use Carbon\Carbon;
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
        $emps = User::all();
        $column = '';
        $string = '';
        $dateFrom = '';
        $dateTo = '';

        return view('hrms.payroll.payroll-manager',
            compact('emps', 'column', 'string', 'dateFrom', 'dateTo'));
    }

    public function showPayslip(Request $request)//Request $request)//Request $request)
    {
        //take request for holding payslip id
        $id = $request->id;

//        Updated upstream
        $payslip = payslips::where('employee_id', $id)->first();


        dd($id);

        $payslip = payslips::where('id',$id)->first();

        dd($id);
//      Stashed changes

        //find payslip with different id


        //return payslip object to the payslip view

        return view('hrms.payroll.payslip', compact('payslip'));
    }

    public function showAllPayslips()
    {
        $emps = payslips::all();
        $column = '';
        $string = '';
        $dateFrom = '';
        $dateTo = '';

        return view('hrms.payroll.show-payslips',
            compact('emps', 'column', 'string', 'dateFrom', 'dateTo'));
    }

    public function showInsurance()
    {
        return view('hrms.payroll.show-insurance');
    }

    public function showAddInsurance()
    {
        return view('hrms.payroll.add-insurance');
    }

    public function addInsurance(Request $request)
    {
        $scheme = new tax_schemes;

        $scheme->name = $request->scheme_name;
        $scheme->total_rate = $request->total_rate;
        $scheme->company_rate = $request->company_rate;
        $scheme->employee_rate = $request->employee_rate;

        $scheme->save();

        return redirect('/show-insurance');
    }

    public function calculate()
    {
        $emps = Employee::all();

        foreach ($emps as $emp) {//checks if user is
            if (!$emp->salary) {
                $gross = 10000;
            } else
                $gross = $emp->salary;
            //            $allowance = $emp->allowance;

            $ans = $this->tax($gross);

            $payslip = new payslips;

            $payslip->employee_id = $emp->user_id;
            $payslip->date = Carbon::now()->format('y-m-d');
            $payslip->gross_salary = $gross;//$emp->employee()->salary;
            $payslip->total_tax_deducted = $ans['total_tax'];
            $payslip->net_salary = $ans['net_income'];
            $payslip->net_salary = $ans['insurance'];
            $payslip->status = 'paid';

            $payslip->save();
        }

        return redirect('show-payslips');
//
//  return (redirect('/incomeshow')->with('values', $netIncome,$totalTax,$ssnit));
//
//        return($netIncome);

        //net_income = $request->$net_income;

    }

    public function tax(float $gross, float $allowance = 0)
    {

        $ssnitRate = 5.5;
        $taxRates = array(
            array(0, 261),
            array(5, 70),
            array(10, 100),
            array(17.5, 2810),
            array(25, INF)
        );

        //Other insurance

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

        return array('net_income' => $net, 'total_tax' => $tax, 'insurance' => $ins);

    }

    public function tax_variable(float $gross,
                                 float $allowance,
                                 $pre_tax_rate,
                                 $tax_rate)
    {
        $totalTax = 0.0;
        $taxAmounts = array();

        $pre_tax = $gross * $pre_tax_rate / 100;

        $taxableRemaining = $gross - $pre_tax + $allowance;

        for ($i = 0; $i < count($tax_rate); $i++) {

            if ($taxableRemaining > 0) {

                $tranche = ($taxableRemaining > $tax_rate[$i][1]) ? $tax_rate[$i][1] : $taxableRemaining;
                $tier_tax = $tax_rate[$i][0] * $tranche / 100.0;
                $totalTax += $tier_tax;
                array_push($taxAmounts, $tier_tax);
                $taxableRemaining -= $tranche;
            }

        }

        $netIncome = $gross + $allowance - $totalTax - $pre_tax;


        return array(
            'net_income' => $netIncome,
            'tax_amounts' => $taxAmounts,
            'total_tax' => $totalTax,
            'pre_tax' => $pre_tax);

    }

    /**
     * Calculate the amount both the employee and employer are meant to pay on any
     * give employee insurable amount.
     * @param $insurable : The amount of money that insurance can be calculated on.
     * @param $insurance_plans : The given insurance plans divided into employee payable and
     * employer payable rates.
     * @return array: An array of returnable values
     */
    public function insurance_variable($insurable,
                                       $insurance_plans)
    {

        $employee_total = 0.0;
        $company_total = 0.0;
        $insuranceAmounts = array();

        //TODO: make variable
        $insurableRemaining = $insurable;

        for ($i = 0; $i < count($insurance_plans); $i++) {

            $company_payable = $insurance_plans[$i][0] * $insurable / 100.0;
            $employee_payable = $insurance_plans[$i][1] * $insurable / 100.0;

            array_push($insuranceAmounts, array($company_payable, $employee_payable));

            $employee_total += $employee_payable;
            $company_total += $company_payable;

        }

        return array(
            'insurance_amounts' => $insuranceAmounts,
            'employee_total' => $employee_total,
            'company_total' => $company_total);
    }

}
