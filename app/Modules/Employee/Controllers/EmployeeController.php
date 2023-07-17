<?php

namespace App\Modules\Employee\Controllers;

use App\Libraries\Encryption;
use App\Modules\Company\Models\Company;
use App\Modules\Employee\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['employees'] = Employee::leftJoin('companies','companies.id','=','employees.company_id')
            ->where('employees.is_archive',0)
            ->orderBy('employees.id','desc')
            ->get([
                'employees.*',
                'companies.name as company_name'
            ]);

        return view("Employee::index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['companies'] = Company::where('is_archive', false)->pluck('name','id');
        return view("Employee::create", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $validation = Validator::make($request->all(), [
                'company_id' => 'required',
                'name'       => 'required',
                'email'      => 'required|email|unique:employees',
                'mobile'     => 'required',
                'address'    => 'required',
                'status'     => 'required'
            ]);

            if ($validation->fails()) {
                return response()->json([
                    'success' => false,
                    'error' => $validation->errors()
                ]);
            }

            DB::beginTransaction();
            $employee = new Employee();
            $employee->company_id = $request->input('company_id');
            $employee->name = $request->input('name');
            $employee->email = $request->input('email');
            $employee->mobile = $request->input('mobile');
            $employee->address = $request->input('address');
            $employee->status = $request->input('status');
            $employee->save();

            /* Generating Employee ID No */

            $employeePrefix = 'EMP-';
            DB::statement("update employees, employees as table2  SET employees.employee_id_no=(
            select concat('$employeePrefix', LPAD( IFNULL(MAX(SUBSTR(table2.employee_id_no,-4,4) )+1,0),4,'0')) as employee_id_no
            from (select * from employees ) as table2
            where table2.id!='$employee->id' and table2.employee_id_no like '$employeePrefix%')
            where employees.id='$employee->id' and table2.id='$employee->id'");

            DB::commit();

            return response()->json([
                'success' => true,
                'status' => 'Employee created successfully.',
                'link' => route('employees.index')
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => true,
                'status' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $employeeId
     * @return \Illuminate\Http\Response
     */
    public function show($employeeId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $employeeId
     * @return \Illuminate\Http\Response
     */
    public function edit($employeeId)
    {
        $decodedemployeeId = Encryption::decodeId($employeeId);
        $data['employee'] = Employee::find($decodedemployeeId);
        $data['companies'] = Company::where('is_archive', false)->pluck('name','id');

        return view("Employee::edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $employeeId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $employeeId)
    {
        try {

            $decodedemployeeId = Encryption::decodeId($employeeId);
            $validation = Validator::make($request->all(), [
                'company_id' => 'required',
                'name'    => 'required',
                'email'   => ['required', 'email', Rule::unique('employees')->ignore($decodedemployeeId)],
                'mobile'  => 'required',
                'address' => 'required',
                'status'  => 'required'
            ]);

            if ($validation->fails()) {
                return response()->json([
                    'success' => false,
                    'error' => $validation->errors()
                ]);
            }

            $employee = Employee::find($decodedemployeeId);
            $employee->company_id = $request->input('company_id');
            $employee->name = $request->input('name');
            $employee->email = $request->input('email');
            $employee->mobile = $request->input('mobile');
            $employee->address = $request->input('address');
            $employee->status = $request->input('status');
            $employee->save();

            return response()->json([
                'success' => true,
                'status' => 'Employee updated successfully.',
                'link' => route('employees.index')
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'status' => $e->getMessage()
            ]);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $employeeId
     * @return \Illuminate\Http\Response
     */
    public function delete($employeeId)
    {
        $decodedemployeeId = Encryption::decodeId($employeeId);
        $employee = Employee::find($decodedemployeeId);
        $employee->is_archive  = 1;
        $employee->deleted_by  = auth()->user()->id;
        $employee->deleted_at  = Carbon::now();
        $employee->save();
        session()->flash('flash_success','Employee deleted successfully.');
    }
}
