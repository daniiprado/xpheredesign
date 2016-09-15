<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /*
        DB::table('tbl_Users')->insert([
           'email' => str_random(10).'@gmail.com',
           'password' => bcrypt('secret'),
           'user_type_fk' => 1,
           'user_nickname' => 'Prueba',
           'name' => 'Daniel',
           'user_lastname' => 'Prado',
        ]);*/

    }
}
