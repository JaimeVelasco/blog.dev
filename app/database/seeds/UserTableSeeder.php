<?php
class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->email ='Admin';
		$user->password = Hash::make('admin123');
		$user->save();
	}
}