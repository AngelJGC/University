<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'student',
            'email' => 'student@gmail.com',
            'user_id'=> '1',
            'code'=> '123',
            'password' => bcrypt('veteringo2'),
            'role' => 'student'
        ]);

        User::create([
            'name' => 'teacher',
            'email' => 'teacher@gmail.com',
            'user_id'=> '2',
            'code'=> '',
            'password' => bcrypt('veteringo2'),
            'role' => 'teacher'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'user_id'=> '3',
            'password' => bcrypt('veteringo2'),
            'role' => 'admin'
        ]);
    }
}
