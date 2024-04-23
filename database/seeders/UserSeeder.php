<?php


namespace Database\Seeders;


use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@email.com',
            'email_verified_at' => now(),
            'password' => app('hash')->make('t0ny@2022'),
            'role' => User::SUPER_ADMIN_ROLE,
            'remember_token' => Str::random(10),
        ]);
        $tenant = Tenant::where('name', 'miquanbich')->first();
        User::create([
            'name' => 'Restaurant Administrator',
            'email' => 'restaurant.admin@email.com',
            'email_verified_at' => now(),
            'password' => app('hash')->make('t0ny@2022'),
            'role' => User::RESTAURANT_ADMIN_ROLE,
            'remember_token' => Str::random(10),
            'tenant_id' => $tenant->id
        ]);

        User::create([
            'name' => 'User01',
            'email' => 'user01@email.com',
            'email_verified_at' => now(),
            'password' => app('hash')->make('t0ny@2022'),
            'role' => User::USER_ROLE,
            'remember_token' => Str::random(10),
        ]);
    }
}
