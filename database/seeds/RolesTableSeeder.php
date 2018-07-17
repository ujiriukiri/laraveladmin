<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Schema;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        // Role::get()->delete();
        // DB::table('roles')->delete();
        
        $roles = ['Create User', 'Update User', 'Browse Users', 'Delete User', 'View User'];
        $roles_in_db = Role::all()->pluck('name')->toArray();

        foreach($roles as $role){
            if(!in_array($role, $roles_in_db)){
                $r = Role::create([
                    'name' => $role,
                ]);
            }
        }

        Schema::enableForeignKeyConstraints();
    }
}
