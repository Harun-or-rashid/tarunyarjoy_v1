<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create()->each(function ($user) {
            $user->assignRole('Donor');
            $user->createAsStripeCustomer();
        });
        factory(User::class, 10)->create()->each(function ($user) {
            $user->assignRole(['Volunteer', 'Donor']);
            $user->createAsStripeCustomer();
        });
        $user = User::create([
            'name' => "Admin",
            'nid' => "123-1312-13132",
            'email' => "admin@admin.com",
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
            'status' => 0,
            'phone' => '+8801726257333',
            'image' => randUserAvatar(),
        ]);
        $user->assignRole(['Admin', 'Donor']);
        $user->createAsStripeCustomer();
    }
}
