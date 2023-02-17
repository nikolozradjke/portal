<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Menu;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' => 'რუქა',
                'reference' => 'map'
            ],
            [
                'title' => 'ანგარიშები',
                'reference' => 'account'
            ],
            [
                'title' => 'უწყებები',
                'reference' => 'agency'
            ],
            [
                'title' => 'კალენდარი',
                'reference' => 'calendar'
            ],
            [
                'title' => 'უწყების ბარათი',
                'reference' => 'agency_card'
            ],
            [
                'title' => 'ფილიალები/რეგიონალური ოფისები',
                'reference' => 'branch'
            ],
            [
                'title' => 'სერვისები',
                'reference' => 'service'
            ],
            [
                'title' => 'კადრები',
                'reference' => 'employee'
            ],
            [
                'title' => 'ბიუჯეტის სტრუქტურა',
                'reference' => 'budget_structure'
            ],
            [
                'title' => 'ბიუჯეტის ანგარიშგება',
                'reference' => 'budget_report'
            ],
            [
                'title' => 'ავტოპარკი',
                'reference' => 'car_park'
            ],
            [
                'title' => 'ავტოპარკის ანგარიშგება',
                'reference' => 'car_park_budget'
            ],
            [
                'title' => 'შესყიდვები',
                'reference' => 'purchase'
            ],
            [
                'title' => 'მნიშვნელოვანი შესყიდვები',
                'reference' => 'important_purchase'
            ],
            [
                'title' => 'ღონისძიებები',
                'reference' => 'events'
            ],
            [
                'title' => 'ყოველკვირეული ანგარიშები',
                'reference' => 'weekly_budget'
            ],
            [
                'title' => 'ცნობარი',
                'reference' => 'digest'
            ],
            [
                'title' => 'მომხმარებლის პროფილი',
                'reference' => 'user_profile'
            ],
            [
                'title' => 'მომხმარებლების მართვა',
                'reference' => 'user_management'
            ],
            [
                'title' => 'სტატისტიცა',
                'reference' => 'statistic'
            ]
        ];

        Menu::insert($items);
    }
}
