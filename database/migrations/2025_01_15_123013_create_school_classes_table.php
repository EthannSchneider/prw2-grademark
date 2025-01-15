<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('school_classes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->foreignId('study_plan_id')->constrained();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('school_class_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_classes');

        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('school_class_id');
        });
    }
};
