<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_types', function (Blueprint $table) {
            $table->id();
            $table->string("name", 255);
            $table->string("description", 255);
            $table->timestamps();
            $table->index("name");
            $table->index("description");
            $table->index("created_at");
            $table->index("updated_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment_type');
    }
};
