<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages_messages', function (Blueprint $table) {
            $table->foreignUuid("primary_message")->constrained("messages", "id");
            $table->foreignUuid("secondary_message")->constrained("messages", "id");

            $table->primary(["primary_message", "secondary_message"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages_messages');
    }
};
