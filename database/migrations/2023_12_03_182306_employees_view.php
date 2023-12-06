<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // DB::unprepared("CREATE or REPLACE VIEW emp_data as SELECT e.EMPLOYEE_ID , concat(e.FIRST_NAME,' ' ,e.LAST_NAME) as name , e.JOB_ID  from employees e;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // DB::unprepared("drop view emp_data");
    }
};
