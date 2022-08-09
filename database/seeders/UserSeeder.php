<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        if ($user === null) {
            $user = new User;
        }
        $user->name = 'Harrier';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('Admin@123');
        $user->email_verified_at = now();
        $user->save();
    }
}
