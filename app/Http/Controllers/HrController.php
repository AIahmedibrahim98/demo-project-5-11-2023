<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HrController extends Controller
{
    public function index()
    {
        // dd(DB::select("select * from emp_data"));
        // $emps = DB::select("select * from employees");
        //dd(DB::insert("INSERT INTO `regions`(`REGION_ID`, `REGION_NAME`) VALUES ('555','insert from laravel')"));
        // dd(DB::update("update regions set REGION_NAME = 'test123' where REGION_ID = 555"));
        // dd(DB::update("update regions set REGION_NAME = ? where REGION_ID = ? ", ['ahmed', '555']));
        //dd(DB::delete("delete from regions  where REGION_ID = ? ", ['555']));

        $emps = DB::table('employees')->get();
        $emps = DB::table('employees')->where('EMPLOYEE_ID', 100)->get();
        $emps = DB::table('employees')->where('EMPLOYEE_ID', 100)->first();
        $emps = DB::table('employees')->get(['FIRST_NAME']);
        $emps = DB::table('employees')->pluck('FIRST_NAME', 'EMPLOYEE_ID')->toArray();
        $emps = DB::table('employees')->count();
        $emps = DB::table('employees')->count('MANAGER_ID');
        $emps = DB::table('employees')->max('salary');
        $emps = DB::table('employees')->min('salary');
        $emps = DB::table('employees')->avg('salary');
        $emps = DB::table('employees')->sum('salary');

        $emps = DB::table('employees')->select("EMPLOYEE_ID", "FIRST_NAME as name")->get();
        $emps = DB::table('employees')->select("JOB_ID")->distinct()->get();
        $emps = DB::table('employees')->selectRaw("count(*) as numbers_of_emps , DEPARTMENT_ID as dep")->groupBy('DEPARTMENT_ID')->get();

        // $emps = DB::table('employees')->join('departments', 'employees.DEPARTMENT_ID', '=', 'departments.DEPARTMENT_ID')
        //     ->select('employees.LAST_NAME', 'departments.DEPARTMENT_NAME')->get();
        /* $emps_left = DB::table('employees')->leftJoin('departments', 'employees.DEPARTMENT_ID', '=', 'departments.DEPARTMENT_ID')
            ->select('employees.LAST_NAME', 'departments.DEPARTMENT_NAME'); //->get();

        $emp_full = DB::table('employees')->rightJoin('departments', 'employees.DEPARTMENT_ID', '=', 'departments.DEPARTMENT_ID')
            ->select('employees.LAST_NAME', 'departments.DEPARTMENT_NAME')->union($emps_left)->get();
        dd($emp_full); */

        $emps = DB::table('employees')
            ->where('salary', ">", '8000')
            ->where('DEPARTMENT_ID', 80)
            ->get();

        $emps = DB::table('employees')->where([
            ['salary', '>', 8000],
            ['DEPARTMENT_ID', '=', 80],
        ])->get();

        $emps = DB::table('employees')
            ->where('salary', "!=", '8000')
            ->get();

        $emps = DB::table('employees')
            ->where('LAST_NAME', "like", "k%")
            ->where('LAST_NAME', "like", "%a")
            ->get();

        $emps = DB::table('employees')
            ->where('salary', '>', 10000)
            ->orWhere('DEPARTMENT_ID', 80)->get();

        $emps = DB::table('employees')->whereBetween('salary', [5000, 10000])->count();

        $emps = DB::table('employees')->whereNotBetween('salary', [5000, 10000])->count();
        $emps = DB::table('employees')->whereIn('DEPARTMENT_ID', [50, 80, 70])->get();
        $emps = DB::table('employees')->whereNotIn('DEPARTMENT_ID', [50, 80, 70])->get();
        $emps = DB::table('employees')->whereNull('DEPARTMENT_ID')->get();
        $emps = DB::table('employees')->whereNotNull('DEPARTMENT_ID')->get();
        $emps = DB::table('employees')->where('hire_date', '2003-06-17')->get();

        $emps = DB::table('employees')->whereMonth('hire_date', '06')->get();
        $emps = DB::table('employees')->whereYear('hire_date', '06')->get();
        $emps = DB::table('employees')->whereDay('hire_date', '06')->get();
        $emps = DB::table('employees')->whereTime('hire_date', '06')->get();
        $emps = DB::table('employees')->whereDate('hire_date', '06')->get();

        $emps = DB::table('employees')->orderBy('salary')->get();

        $emps = DB::table('employees')->orderBy('salary', 'desc')->get();
        $emps = DB::table('employees')->orderByDesc('salary')->get();

        $emps = DB::table('employees')->latest('hire_date')->first();
        $emps = DB::table('employees')->oldest('hire_date')->first();
        $emps = DB::table('employees')->inRandomOrder()->first()->LAST_NAME;

        $emps = DB::table('employees')->limit(10)->offset(10)->orderBy('EMPLOYEE_ID')->get();
        $emps = DB::table('employees')->take(10)->skip(10)->orderBy('EMPLOYEE_ID')->get();


        // dd($emps);
        /* dd(DB::table('users')
            ->where('password', '123')
            ->where(function ($q) {
                $q->where('email', 'tes@mail.com')->orWhere('mobile', 'fsdjkh');
            })->toSql()); */

        /*  foreach ($emps as $emp) {
            echo "Name :" . $emp->FIRST_NAME .  ", Job: " . $emp->JOB_ID . "<br>";
        } */

        // dd(DB::table('regions')->insert(['REGION_ID' => 800, 'REGION_NAME' => 'ins from QB']));

        /* dd(DB::table('regions')->insert(
            [
                ['REGION_ID' => 9, 'REGION_NAME' => 'ins from QB 1'],
                ['REGION_ID' => 10, 'REGION_NAME' => 'ins from QB 2']
            ]
        )); */

        /* dd(DB::table('regions')->insertOrIgnore(
            [
                ['REGION_ID' => 9, 'REGION_NAME' => 'ins from QB 1'],
                ['REGION_ID' => 10, 'REGION_NAME' => 'ins from QB 2'],
                ['REGION_ID' => 55, 'REGION_NAME' => 'new ins from QB 2'],
            ]
        )); */

        // INSERT INTO `regions`(`REGION_ID`, `REGION_NAME`) SELECT e.EMPLOYEE_ID,e.FIRST_NAME FROM employees e WHERE salary >10000;

        // dd(DB::table('regions')->insertUsing(['REGION_ID', 'REGION_NAME'], DB::table('employees')->where('salary', '>', 8000)->select('EMPLOYEE_ID', 'FIRST_NAME')));
        // dd(DB::table('regions')->where('REGION_ID', '>=', '100')->update(['REGION_NAME' => 'ahmed']));
        // dd(DB::table('regions')->where('REGION_ID', '>=', '100')->delete());
        // dd(DB::table('employees')->where('salary', '<', '3000')->increment('salary', 2000));

        /* dd(DB::table('employees')->where('salary', '<', '4000')->increment(
            'salary',
            2000,
            ['PHONE_NUMBER' => '02131321321']
        )); */
        DB::table('employees')->where('DEPARTMENT_ID', 80)->incrementEach([
            'salary' => 10000,
            'COMMISSION_PCT' => .5
        ]);
    }

    public function employees()
    {
        $employees = DB::table('employees')->orderBy('DEPARTMENT_ID')->get();
        return view('hr.employees', compact('employees'));
    }


    public function employees_model()
    {
        // $emp = Employee::all();
        /* $emp = Employee::where('salary', '>', '5000')->where('DEPARTMENT_ID', '80')->orderBy('salary')->get();
        foreach ($emp as $item) {
            echo "- " . $item->LAST_NAME . ' - ' .  number_format($item->SALARY) . "<br>";
        } */

        // dd(Employee::where('EMPLOYEE_ID', 100)->first()->LAST_NAME);
        // dd(Employee::firstWhere('EMPLOYEE_ID', 100)->LAST_NAME);
        // dd(Employee::where('EMPLOYEE_ID', 100)->LAST_NAME);
        // dd(Employee::find(100)->LAST_NAME);
    }
}
