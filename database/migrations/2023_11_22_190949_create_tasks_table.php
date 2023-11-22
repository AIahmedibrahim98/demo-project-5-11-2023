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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('t_int');
            $table->smallInteger('s_int');
            $table->mediumInteger('m_int');
            $table->integer('int');
            $table->bigInteger('b_int');

            $table->decimal('price', 8, 2);
            $table->float('price_f');
            $table->double('price_d');

            $table->date('date');
            $table->dateTime('datetime');
            $table->year('year');

            $table->string('varchar', 200);
            $table->string('varchar2');
            $table->char('char');

            $table->tinyText('t_text');
            $table->text('text');
            $table->longText('l_text');

            $table->enum('role', ['admin', 'user', 'student']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
