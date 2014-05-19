<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vader = DB::table('users')->insert(array(
                'username'   => 'doctorv',
                'email'      => 'darthv@deathstar.com',
                'password'   => Hash::make('thedarkside'),
                'hash'       => '',
                'first_name' => 'Darth',
                'last_name'  => 'Vader',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ));
 
        DB::table('users')->insert(array(
                'username'   => 'goodsidesoldier',
                'email'      => 'lightwalker@rebels.com',
                'password'   => Hash::make('hesnotmydad'),
                'hash'       => '',
                'first_name' => 'Luke',
                'last_name'  => 'Skywalker',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ));
        
    }
 
}