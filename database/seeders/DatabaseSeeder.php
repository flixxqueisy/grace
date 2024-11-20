<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::beginTransaction();

        try {

            $user = User::create([
                'name' => 'System Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('secret'),
            ]);

            $role = Role::create(['name' => 'Administrator']);

            $user->assignRole('Administrator');


            DB::commit();
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
        }


    }
}
