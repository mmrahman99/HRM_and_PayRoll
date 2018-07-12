<?php

namespace App\Http\Controllers;

use App\tax_schemes;
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
}
