<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;
class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Site name and general settings
       Setting::create([
        'key' => 'site_name',
        'value' => 'My E-Commerce Store',
        'type' => 'string',
    ]);

    Setting::create([
        'key' => 'site_description',
        'value' => 'The best place to buy amazing products online!',
        'type' => 'string',
    ]);

    Setting::create([
        'key' => 'site_logo',
        'value' => 'logo.png', // You can store the filename of the logo or URL
        'type' => 'string',
    ]);

    Setting::create([
        'key' => 'site_favicon',
        'value' => 'favicon.ico', // Similarly, store favicon details
        'type' => 'string',
    ]);

    // Currency settings
    Setting::create([
        'key' => 'currency',
        'value' => 'USD', // US Dollar, or any currency code like 'EUR', 'GBP'
        'type' => 'string',
    ]);

    Setting::create([
        'key' => 'currency_symbol',
        'value' => '$', // Currency symbol
        'type' => 'string',
    ]);

    Setting::create([
        'key' => 'currency_position',
        'value' => 'before', // Can be 'before' or 'after' the price (e.g., $10 or 10$)
        'type' => 'string',
    ]);

    // Tax settings
    Setting::create([
        'key' => 'tax_rate',
        'value' => '10', // Tax rate in percentage
        'type' => 'decimal',
    ]);

    Setting::create([
        'key' => 'tax_inclusive',
        'value' => 'false', // Set to true if tax is already included in the price
        'type' => 'boolean',
    ]);

    // Shipping settings
    Setting::create([
        'key' => 'free_shipping_threshold',
        'value' => '100', // Free shipping after $100 (or your currency)
        'type' => 'decimal',
    ]);

    Setting::create([
        'key' => 'shipping_rate',
        'value' => '5.99', // Standard shipping rate
        'type' => 'decimal',
    ]);

    Setting::create([
        'key' => 'shipping_enabled',
        'value' => 'true', // Enable or disable shipping
        'type' => 'boolean',
    ]);

    // Payment gateway settings
    Setting::create([
        'key' => 'payment_gateway',
        'value' => 'stripe', // You can switch between 'stripe', 'paypal', etc.
        'type' => 'string',
    ]);

    Setting::create([
        'key' => 'stripe_api_key',
        'value' => 'sk_test_XXXXXXXXXXXXXXXXXXXXXXXX', // Placeholder for Stripe API Key
        'type' => 'string',
    ]);

    Setting::create([
        'key' => 'paypal_client_id',
        'value' => 'XXXXXXXXXXXXXXXXXXXXXXXXXX', // Placeholder for PayPal client ID
        'type' => 'string',
    ]);

    Setting::create([
        'key' => 'paypal_secret',
        'value' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', // PayPal Secret
        'type' => 'string',
    ]);

    // Order settings
    Setting::create([
        'key' => 'order_confirmation_email',
        'value' => 'orders@myshop.com', // Email address for order confirmations
        'type' => 'string',
    ]);

    Setting::create([
        'key' => 'order_minimum_value',
        'value' => '20', // Minimum order value (optional)
        'type' => 'decimal',
    ]);

    // Customer settings
    Setting::create([
        'key' => 'registration_enabled',
        'value' => 'true', // Enable or disable customer registration
        'type' => 'boolean',
    ]);

    Setting::create([
        'key' => 'newsletter_enabled',
        'value' => 'true', // Enable or disable newsletter subscription
        'type' => 'boolean',
    ]);

    // Discount settings
    Setting::create([
        'key' => 'discount_enabled',
        'value' => 'true', // Enable or disable discounts
        'type' => 'boolean',
    ]);

    Setting::create([
        'key' => 'default_discount_percentage',
        'value' => '10', // Default discount percentage for promotions
        'type' => 'decimal',
    ]);

    // Other configuration settings
    Setting::create([
        'key' => 'maintenance_mode',
        'value' => 'false', // Set to true during maintenance mode
        'type' => 'boolean',
    ]);

    Setting::create([
        'key' => 'social_links',
        'value' => '{"facebook": "https://facebook.com", "twitter": "https://twitter.com", "instagram": "https://instagram.com"}', // JSON format
        'type' => 'json',
    ]);

    Setting::create([
        'key' => 'google_analytics_code',
        'value' => 'UA-XXXXXXX-X', // Google Analytics Tracking Code
        'type' => 'string',
    ]);

    Setting::create([
        'key' => 'seo_meta_description',
        'value' => 'Best e-commerce platform for quality products and amazing deals.',
        'type' => 'string',
    ]);

    Setting::create([
        'key' => 'seo_meta_keywords',
        'value' => 'ecommerce, online shopping, buy products, discounts',
        'type' => 'string',
    ]);

    }
}
