<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $admin = $this->createUser(['first_name' => 'Admin', 'email' => 'admin@admin.com']);
        $admin = $this->createUser(['first_name' => 'Manager', 'email' => 'manager@manager.com']);
        $admin = $this->createUser(['first_name' => 'Supervisor', 'email' => 'supervisor@supervisor.com']);
        $admin = $this->createUser(['first_name' => 'Support', 'email' => 'support@support.com']);
        $admin = $this->createUser(['first_name' => 'Client', 'email' => 'client@client.com']);
    }

    public function createUser($attributes)
    {
        return User::factory()->create($attributes);
    }
}
