<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            // إضافة سعر الكورس
            $table->decimal('price', 8, 2)->default(0);
            // إضافة صورة الكورس
            $table->string('image')->nullable();
            // حذف العمود category
            $table->dropColumn('category');
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            // لو عملت rollback
            $table->string('category')->nullable();
            $table->dropColumn(['price', 'image']);
        });
    }
};
