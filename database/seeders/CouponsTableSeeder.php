<?php
namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fixed discount coupon
        Coupon::create([
            'code' => 'ABC123',
            'type' => 'fixed',
            'value' => 30, // Fixed discount value
            'usage_limit' => 100, // The total number of times it can be used
            'user_limit' => 1, // Limit to 1 use per user
            'expires_at' => Carbon::now()->addDays(30), // Expires in 30 days
        ]);

        // Percentage off coupon
        Coupon::create([
            'code' => 'DEF456',
            'type' => 'percent',
            'percent_off' => 50, // 50% discount
            'usage_limit' => 200, // The total number of times it can be used
            'user_limit' => 2, // Limit to 2 uses per user
            'expires_at' => Carbon::now()->addDays(60), // Expires in 60 days
        ]);

        // Another fixed coupon example with a specific usage limit
        Coupon::create([
            'code' => 'FIXED10',
            'type' => 'fixed',
            'value' => 10, // Fixed discount value
            'usage_limit' => 50, // The total number of times it can be used
            'user_limit' => 3, // Limit to 3 uses per user
            'expires_at' => Carbon::now()->addDays(15), // Expires in 15 days
        ]);

        // Another percentage-based coupon with an expiration date
        Coupon::create([
            'code' => 'PERCENT20',
            'type' => 'percent',
            'percent_off' => 20, // 20% discount
            'usage_limit' => 500, // The total number of times it can be used
            'user_limit' => 5, // Limit to 5 uses per user
            'expires_at' => Carbon::now()->addWeeks(2), // Expires in 2 weeks
        ]);

        // A coupon that is set to expire soon
        Coupon::create([
            'code' => 'SUMMER30',
            'type' => 'fixed',
            'value' => 30, // Fixed discount value
            'usage_limit' => 50, // The total number of times it can be used
            'user_limit' => 2, // Limit to 2 uses per user
            'expires_at' => Carbon::now()->addDays(7), // Expires in 7 days
        ]);
    }
}
