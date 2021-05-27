<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $user = User::create([
    'name' => 'khaled',
    'email' => 'k@gmail.com',
    'roles_name'=>'owner',
    'Status'=>'Acive',
    'password' => bcrypt('12345678')
    ]);
    $role = Role::create(['name' => 'owner']);
    $permissions = Permission::pluck('id','id')->all();
    $role->syncPermissions($permissions);
    $user->assignRole([$role->id]);
    }


}
