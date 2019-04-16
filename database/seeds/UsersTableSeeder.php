<?php

use App\User as User;
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
        $this->create_admin();
    }

    private function create_admin()
    {
        $user = new User([
            'name' => 'Cool Admin',
            'email' => 'admin@myapp.com',
            'password' => bcrypt('test123'),
            'type' => 'admin',
        ]);

        $user->save();
    }
}
