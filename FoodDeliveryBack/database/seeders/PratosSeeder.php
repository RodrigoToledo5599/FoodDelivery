<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\Pratos;

class PratosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        function __construct(){}
        
        Pratos::create([
            'Name' => 'Classic Cheeseburger',
            'Price' => 9.99,
            'Description' => 'A classic cheeseburger with lettuce, tomato, onion, pickles, and cheese on a sesame seed bun.'
        ]);

        Pratos::create([
            'Name' => 'BBQ Bacon Burger',
            'Price' => 11.99,
            'Description' => 'A juicy burger topped with crispy bacon, cheddar cheese, and tangy BBQ sauce.'
        ]);

        Pratos::create([
            'Name' => 'Pepperoni Pizza',
            'Price' => 12.99,
            'Description' => 'Classic pizza topped with pepperoni slices and mozzarella cheese.'
        ]);

        Pratos::create([
            'Name' => 'Vegetarian Pizza',
            'Price' => 11.99,
            'Description' => 'Pizza loaded with fresh vegetables such as bell peppers, mushrooms, onions, and olives.'
        ]);
        Pratos::create([
            'Name' => 'Spaghetti Bolognese',
            'Price' => 10.99,
            'Description' => 'Spaghetti served with a rich and meaty Bolognese sauce.'
        ]);

        Pratos::create([
            'Name' => 'Fettuccine Alfredo',
            'Price' => 11.99,
            'Description' => 'Creamy fettuccine pasta tossed in a Parmesan Alfredo sauce.'
        ]);

        Pratos::create([
            'Name' => 'Caesar Salad',
            'Price' => 8.99,
            'Description' => 'Crisp romaine lettuce topped with Parmesan cheese, croutons, and Caesar dressing.'
        ]);

        Pratos::create([
            'Name' => 'Greek Salad',
            'Price' => 9.99,
            'Description' => 'Fresh mixed greens with tomatoes, cucumbers, olives, onions, and feta cheese.'
        ]);
        Pratos::create([
            'Name' => 'Club Sandwich',
            'Price' => 10.99,
            'Description' => 'Triple-decker sandwich with turkey, bacon, lettuce, tomato, and mayo.'
        ]);
        Pratos::create([
            'Name' => 'BLT Sandwich',
            'Price' => 8.99,
            'Description' => 'Classic sandwich with crispy bacon, lettuce, tomato, and mayo on toasted bread.'
        ]);

        Pratos::create([
            'Name' => 'Tomato Soup',
            'Price' => 6.99,
            'Description' => 'Classic tomato soup served with a side of crackers.'
        ]);

        Pratos::create([
            'Name' => 'Chicken Noodle Soup',
            'Price' => 7.99,
            'Description' => 'Hearty soup with chicken, noodles, carrots, celery, and onions.'
        ]);

        Pratos::create([
            'Name' => 'Filet Mignon',
            'Price' => 24.99,
            'Description' => 'Tender filet mignon steak grilled to perfection.'
        ]);

        Pratos::create([
            'Name' => 'Ribeye Steak',
            'Price' => 22.99,
            'Description' => 'Juicy ribeye steak with excellent marbling.'
        ]);
        Pratos::create([
            'Name' => 'Grilled Salmon',
            'Price' => 18.99,
            'Description' => 'Fresh salmon fillet grilled to perfection and seasoned with herbs.'
        ]);

        Pratos::create([
            'Name' => 'Fish and Chips',
            'Price' => 14.99,
            'Description' => 'Classic British dish with beer-battered fish served with fries.'
        ]);

        Pratos::create([
            'Name' => 'Grilled Chicken Breast',
            'Price' => 12.99,
            'Description' => 'Tender grilled chicken breast seasoned with herbs and spices.'
        ]);

        Pratos::create([
            'Name' => 'Chicken Parmesan',
            'Price' => 14.99,
            'Description' => 'Breaded chicken breast topped with marinara sauce and melted mozzarella cheese.'
        ]);

        Pratos::create([
            'Name' => 'California Roll',
            'Price' => 15.99,
            'Description' => 'Classic sushi roll with crab, avocado, and cucumber.'
        ]);

        Pratos::create([
            'Name' => 'Spicy Tuna Roll',
            'Price' => 16.99,
            'Description' => 'Sushi roll filled with spicy tuna and topped with spicy mayo.'
        ]);
    }
}
