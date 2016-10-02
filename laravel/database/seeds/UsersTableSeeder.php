<?php
 
use Illuminate\Database\Seeder;
 
class UsersTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('hic_users')->delete();
 
        
 
        // Uncomment the below to run the seeder
        //DB::table('hic_users')->insert($users);
    }
 
}
 