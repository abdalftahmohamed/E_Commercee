<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{


    public function run()
    {
        DB::table('users')->delete();
        $admin = new User();

        $admin->firstname = 'abdalftah';
        $admin->lastname = 'shahin';
        $admin->email = 'admin@admin.com';
        $admin->password = Hash::make('123456789');
        $admin->phone = '01091523688';
        $admin->address = 'farouk';
        $admin->role = 1;
        $admin->save();
    }
}
