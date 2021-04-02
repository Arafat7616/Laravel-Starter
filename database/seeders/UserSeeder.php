<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Mr Admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('password');
        $user->save();

        for ($i = 1; $i <= 10; $i++) {
            $user = new User();
            $user->name = 'Mr Super Admin '.$i;
            $user->email = 'superadmin'.$i.'@gmail.com';
            $user->password = Hash::make('password');
            $user->save();

            $user->assignRole('Super Admin');
        }

        for ($i = 1; $i <= 10; $i++) {
            $user = new User();
            $user->name = 'Mr Admin '.$i;
            $user->email = 'admin'.$i.'@gmail.com';
            $user->password = Hash::make('password');
            $user->save();

            $user->assignRole('Admin');
        }
    }
}
