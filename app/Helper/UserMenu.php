<?php

namespace App\Helper;

use App\Models\Agency;
use App\Models\Menu;

class UserMenu
{

    public static function getMenu($user){
        if($user->role === 1){
            $menu = Menu::whereIn('id', [1,3,18,19])->get();
        }else{
            $menuPermissions = $user->menuPermissions->toArray();;
            $menu = Menu::whereIn('id', array_column($menuPermissions, 'menu_id'))->get();
        }

        return $menu;
    }

    public static function getAgencies($data){
        if(is_array($data)){
            $agency = Agency::whereIn('id', array_column($data, 'agency_id'))->select('id', 'title')->get();

            return $agency->toArray();
        }else{
            $agency = Agency::find($data);
            if($agency){
                return [
                    'id' => $data,
                    'title' => $agency->title
                ];
            }
        }
    }

}
