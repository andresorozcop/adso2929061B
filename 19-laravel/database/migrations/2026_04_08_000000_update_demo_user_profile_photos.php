<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Alinea las fotos de los usuarios demo con public/images/users/johnw.png y larac.png.
     */
    public function up(): void
    {
        $now = now();

        DB::table('users')
            ->where('email', 'johnw@mail.com')
            ->update(['photo' => 'johnw.png', 'updated_at' => $now]);

        DB::table('users')
            ->where('email', 'larac@mail.com')
            ->update(['photo' => 'larac.png', 'updated_at' => $now]);
    }

    /**
     * Revierte a la imagen por defecto del esquema (solo cuentas demo por email).
     */
    public function down(): void
    {
        $now = now();

        DB::table('users')
            ->where('email', 'johnw@mail.com')
            ->update(['photo' => 'no-photo.png', 'updated_at' => $now]);

        DB::table('users')
            ->where('email', 'larac@mail.com')
            ->update(['photo' => 'no-photo.png', 'updated_at' => $now]);
    }
};
