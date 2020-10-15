<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $role_regular_user = Role::where('name','user')->first();
       $role_admin_user= Role::where('name','admin')->first();

       $admin = new User();
       $admin->name      =   'Stefano';
       $admin->last_name =   'Cauzzi';
       $admin->email     =   'cauzzistefano@gmail.com';
       $admin->password  =  Hash::make('caufer8182');
       $admin->slug      =   'SteCauLab';
       $admin->save();
       $admin->roles()->attach($role_admin_user);

       $admin = new User();
       $admin->name      = 'Federica';
       $admin->last_name =   'Ferro';
       $admin->email     =  'federicaferro@gmail.com';
       $admin->password  =   Hash::make('fedefer86');
       $admin->slug      =   'FedeFer';
       $admin->save();
       $admin->roles()->attach($role_admin_user);

       $regular_user = new User;
       $regular_user->name      = 'Samuel';
       $regular_user->last_name =   'Jackson';
       $regular_user->email     =  'samueljackson@gmail.com';
       $regular_user->password  =   Hash::make('samujack1234');
       $regular_user->slug      =   'SamJack';
       $regular_user->save();
       $regular_user->roles()->attach($role_regular_user);
    }
}
