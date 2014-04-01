<?php
class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->email ='Jaime@photojv.com';
		$user->password = 'password123';
		$user->save();
	}
}