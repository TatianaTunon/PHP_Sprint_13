<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name'=>'admin']);
        $jefe_departament = Role::create(['name'=>'jefe_departament']);

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        $jefe_departament= User::create([
            'name' => 'Tatiana Tunon',
            'email' => 'tatianatunon@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole($admin->id);
        $jefe_departament->assignRole($jefe_departament->id);

        User::factory(10)->create();

    }
    
}
