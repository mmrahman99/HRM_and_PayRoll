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
}
