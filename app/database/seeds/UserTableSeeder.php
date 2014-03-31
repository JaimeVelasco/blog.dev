<?php
class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->email ='Jaime@photojv.com';
		$user->password = Hash::make('letmeinnow');
		$user->save();
	}
}