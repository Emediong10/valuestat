<?php

use App\Models\Package;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('package_updates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(Package::class);
            $table->text('description');
            $table->string('file');
            $table->boolean('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_updates');
    }
};
