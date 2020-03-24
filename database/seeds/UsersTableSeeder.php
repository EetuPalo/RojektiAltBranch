<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "email" => "admin@admin.com",

            "name" => "admin",

            "password" => bcrypt("adminpassu"),

            "type" => "admin"
        ]);




    }
}
