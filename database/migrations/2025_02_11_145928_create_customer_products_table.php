<?php

use App\Models\Package;
use App\Models\Customer;
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
        Schema::create('customer_products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customer::class);
            $table->foreignIdFor(Package::class);
            $table->boolean('paid')->default(0);
            $table->string('transaction_ref');
            $table->string('transaction_date');
            $table->string('amount_to_pay');
            $table->string('amount_paid')->default(0);
            $table->text('product_log');
            $table->text('file')->nullable();
            $table->string('download_token');
            $table->text('transaction_meta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_products');
    }
};
