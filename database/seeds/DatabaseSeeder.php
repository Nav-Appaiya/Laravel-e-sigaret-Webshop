<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productImage = 'http://www.esigaretervaring.nl/wp-content/uploads/2014/04/Elektrische-sigaret-voorbeeld-300x225.jpg';
        $createdAt = new DateTime();
        $updatedAt = new DateTime();

        // Users seeder
        DB::table('users')->insert([
            'nickname' => 'admin',
            'email' => 'navarajh'.mt_rand(0,200).'@gmail.com',
            'password' => bcrypt('admin'),
            'voorletters' => 'N.',
            'achternaam' => 'Appaiya',
            'geslacht' => 'man',
            'geboortedatum' => '24-01-1992',
            'voornaam' => 'Nav',
            'adres' => 'Rijnvoorde 42',
            'postcode' => '3085TJ',
            'woonplaats' => 'Rotterdam',
            'telMobiel' => '0645705721',
            'telThuis' => '0645705721',
            'created_at' => $createdAt,
            'updated_at' => $updatedAt
        ]);

        // Orders seeder
        DB::table('orders')->insert([
            'user_id' => mt_rand(0,1200),
            'shipping_address' => 'rijnvoorde 42, 3085TJ Rotterdam',
            'billing_address' => 'rijnvoorde 42, 3085TJ Rotterdam',
            'amount' => '18,95',
            'status' => 'paid',
            'created_at' => $createdAt,
            'updated_at' => $updatedAt
        ]);

        // Product seeder
        DB::table('products')->insert([
            'name' => 'product ' . mt_rand(0, 200),
            'description' => 'Beschrijving bij product',
            'price' => '19,95',
            'imageurl' => $productImage,
            'category_id' => '1',
            'created_at' => $createdAt,
            'updated_at' => $updatedAt
        ]);

        // Category seeder
        DB::table('categories')->insert([
            'categoryID'=>'1',
            'title'=>'Category' . mt_rand(0,15),
            'image'=>'http://www.esigaretervaring.nl/wp-content/uploads/2014/04/Elektrische-sigaret-voorbeeld-300x225.jpg',
            'created_at' => $createdAt,
            'updated_at' => $updatedAt
        ]);

        // Pages seeder
        DB::table('pages')->insert([
            'name' => 'Over',
            'content' => 'Wij vinden het altijd leuk om reacties te krijgen. Onze voorkeur is per 
        bezoek of e-mail, maar ook telefonisch, per fax of per post staan we je graag te 
        woord. Gebruik hiervoor onderstaande contactinformatie: <br /> <br /> eSigarett.nl <br />',
            'created_at' => $createdAt,
            'updated_at' => $updatedAt
        ]);

        DB::table('pages')->insert([
            'name' => 'Producten',
            'content' => 'Productenlijst',
            'created_at' => $createdAt,
            'updated_at' => $updatedAt
        ]);

        DB::table('pages')->insert([
            'name' => 'Contact',
            'content' => 'Contact met ons',
            'created_at' => $createdAt,
            'updated_at' => $updatedAt
        ]);
    }
}
