<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->decimal('task_amount')->default(2500)->nullable();
            // $table->tinyInteger('t_int')->default(5)->change();
            $table->renameColumn('price', 'task_price');
            $table->after('char', function (Blueprint $table) {
                $table->string('task_name')->nullable()->default('task');
                $table->string('task_title')->nullable();
                $table->string('varchar2')->change();
                $table->boolean('active');

                // $table->unsignedBigInteger('user_id')->nullable();
                // $table->foreign('user_id')->references('id')->on('users');

                $table->foreignId('created_by')->constrained('users');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('task_amount', 'task_name', 'task_title');
            // $table->tinyInteger('t_int')->change();
            $table->renameColumn('task_price', 'price');
            $table->dropConstrainedForeignId('user_id');
        });
    }
};
