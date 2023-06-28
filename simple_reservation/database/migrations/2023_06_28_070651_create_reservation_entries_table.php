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
        Schema::create('reservation_entries', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';

            $table->increments('id');
            $table->unsignedInteger('reservation_id')->index();
            $table->dateTime('started_at');
            $table->dateTime('ended_at');
            $table->unsignedTinyInteger('status')->default(1);
            $table->text('notes')->nullable();
            $table->unsignedInteger('created_by')->index();
            $table->dateTime('created_at')->useCurrent();
            $table->unsignedInteger('updated_by');
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_entries');
    }
};
