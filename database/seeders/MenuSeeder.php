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
                'title' => 'რუქა',
                'route_prefix' => 'map'
            ],
            [
                'title' => 'ანგარიშები',
                'route_prefix' => 'accounts'
            ],
            [
                'title' => 'უწყებები',
                'route_prefix' => 'agencies'
            ],
            [
                'title' => 'კალენდარი',
                'route_prefix' => 'calendar'
            ],
            [
                'title' => 'უწყების ბარათი',
                'route_prefix' => 'agency-card'
            ],
            [
                'title' => 'ფილიალები/რეგიონალური ოფისები',
                'route_prefix' => 'branches'
            ],
            [
                'title' => 'სერვისები',
                'route_prefix' => 'services'
            ],
            [
                'title' => 'კადრები',
                'route_prefix' => 'personnel'
            ],
            [
                'title' => 'ბიუჯეტის სტრუქტურა',
                'route_prefix' => 'budget-structure'
            ],
            [
                'title' => 'ბიუჯეტის ანგარიშგება',
                'route_prefix' => 'budget-reporting'
            ],
            [
                'title' => 'ავტოპარკი',
                'route_prefix' => 'autopark'
            ],
            [
                'title' => 'ავტოპარკის ანგარიშგება',
                'route_prefix' => 'autopark-reporting'
            ],
            [
                'title' => 'შესყიდვები',
                'route_prefix' => 'purchases'
            ],
            [
                'title' => 'მნიშვნელოვანი შესყიდვები',
                'route_prefix' => 'important-purchases'
            ],
            [
                'title' => 'ღონისძიებები',
                'route_prefix' => 'events'
            ],
            [
                'title' => 'ყოველკვირეული ანგარიშები',
                'route_prefix' => 'weekly-reports'
            ],
            [
                'title' => 'ცნობარი',
                'route_prefix' => 'reference'
            ],
            [
                'title' => 'მომხმარებლების მართვა',
                'route_prefix' => 'manage-users'
            ],
        ];

        Menu::insert($items);
    }
}
