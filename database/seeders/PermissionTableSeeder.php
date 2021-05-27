<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $permissions = [

    'dashboard',
    'notifications',
    'orders',
    'users',
    'permissions',
    'messages',
    'recipes',
    'contact',
    'reservations',
    'ratings',
    'cashing',
    'details',
    'buy',
    'categories',
    'profile',

    ];
    foreach ($permissions as $permission) {
    Permission::create(['name' => $permission]);
    }
    }
    }
