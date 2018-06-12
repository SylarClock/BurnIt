<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name'  => 'Bruno',
            'last_name'  => 'Díaz',
            'email'  => 'batman@gmail.com',
            'password' => bcrypt('secret'),
            'birth_day' => '1939-05-01',
            'tipo' => 'admin'
        ]);

        DB::table('categories')->insert(
            ['name' => 'Libros', 'active' => true],
            ['name' => 'Comics', 'active' => true],
            ['name' => 'Videojuegos', 'active' => true],
            ['name' => 'Películas', 'active' => true],
            ['name' => 'Series', 'active' => true]
        );
    }
}
