<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\Tenant\Food;
use App\Models\Tenant\Table;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenant = Tenant::create([
            'name' => 'miquanbich',
            'description' => 'miquanbich.tenant-restaurant.test',
            'plan' => 1,
        ]);

        $tenant->domains()->create([
            'domain' => 'miquanbich.tenant-restaurant.test',
        ]);
        $tenant->run(function ($tenant) {
            return Table::create([
                'name' => 'name',
                'description' => 'name',

            ]);
        });
    }
}
