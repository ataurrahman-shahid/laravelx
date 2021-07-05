<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->string('sent_to');
            $table->string('sent_from');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}



