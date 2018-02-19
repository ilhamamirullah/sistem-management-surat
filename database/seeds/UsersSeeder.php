<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*//role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        //sample admin
        $admin = new User();
        $admin->name = 'Admin';
        $admin->username = 'admin';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->attachRole($adminRole);

        //sample member

       $member = new User();
       $member->name = 'Member';
       $member->username = 'member';
       $member->password = bcrypt('member');
       $member->save();
       $member->attachRole($memberRole);*/

        DB::table('users')->insert([
            'name' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
        ]);
    }
}
