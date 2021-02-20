<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(50)->create();
        $user = User::find(1);
        $user->name = 'achimande';
        $user->email = '41640645@qq.com';
        $user->password = bcrypt('achimande');
        $user->is_admin = 1;
        $user->save();
    }
}
