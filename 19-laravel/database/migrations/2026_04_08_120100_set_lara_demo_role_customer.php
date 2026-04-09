<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * El valor por defecto de la columna role es 'customer' (minúsculas), pero las vistas usan 'Customer'.
     */
    public function up(): void
    {
        $now = now();

        DB::table('users')
            ->where('email', 'larac@mail.com')
            ->update(['role' => 'Customer', 'updated_at' => $now]);
    }

    public function down(): void
    {
        $now = now();

        DB::table('users')
            ->where('email', 'larac@mail.com')
            ->update(['role' => 'customer', 'updated_at' => $now]);
    }
};
