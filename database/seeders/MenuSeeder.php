<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' => 'რუქა'
            ],
            [
                'title' => 'ანგარიშები'
            ],
            [
                'title' => 'უწყებები'
            ],
            [
                'title' => 'კალენდარი'
            ],
            [
                'title' => 'უწყების ბარათი'
            ],
            [
                'title' => 'ფილიალები/რეგიონალური ოფისები'
            ],
            [
                'title' => 'სერვისები'
            ],
            [
                'title' => 'კადრები'
            ],
            [
                'title' => 'ბიუჯეტის სტრუქტურა'
            ],
            [
                'title' => 'ბიუჯეტის ანგარიშგება'
            ],
            [
                'title' => 'ავტოპარკი'
            ],
            [
                'title' => 'ავტოპარკის ანგარიშგება'
            ],
            [
                'title' => 'შესყიდვები'
            ],
            [
                'title' => 'მნიშვნელოვანი შესყიდვები'
            ],
            [
                'title' => 'ღონისძიებები'
            ],
            [
                'title' => 'ყოველკვირეული ანგარიშები'
            ],
            [
                'title' => 'ცნობარი'
            ],
            [
                'title' => 'მომხმარებლის პროფილი'
            ],
            [
                'title' => 'მომხმარებლების მართვა'
            ],
        ];

        Menu::insert($items);
    }
}
