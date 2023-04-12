<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{

    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('task_id')->nullable();
            $table->string('constructors_name_id');
            $table->text('comment')->nullable();
            $table->text('link')->nullable();
            $table->float('qty_per_one');
            $table->string('units_id');
            $table->float('qty_per_order');
            $table->date('date_requested');
            $table->string('supplier_id')->nullable();
            $table->string('supplier_position_name_id')->nullable();
            $table->float('price_for_one')->nullable();
            $table->string('invoice_id')->nullable();
            $table->date('date_planing')->nullable();
            $table->date('date_fact')->nullable();
            $table->boolean('is_closed')->default(0);
            $table->enum('status',[
                'none','overship','not_fully','canceled','requested','ready_to_task','delayed'
            ])->default('none');
            $table->string('project_id')->default(0);
            $table->string('creator_id');
            $table->string('updater_id')->nullable();


            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
