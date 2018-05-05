<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'users_manage']);
        Permission::create(['name' => 'location_manage']);
        Permission::create(['name' => 'voucher_manage']);
        Permission::create(['name' => 'payment_manage']);
        Permission::create(['name' => 'amc_manage']);
        Permission::create(['name' => 'member_manage']);
        Permission::create(['name' => 'holiday_request']);
        Permission::create(['name' => 'report_manage']);
       
    }
}
