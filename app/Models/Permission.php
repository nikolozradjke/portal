<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permission';

    // Disable default timestamp handling
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'menu_id'
    ];

    public static function checkOrFail($menu)
    {
        $menu = Menu::where('reference', $menu)->firstOrFail();
        $menuID = $menu->id;

        $hasPermission = self::where('user_id', auth('sanctum')->user()->id)
            ->where('menu_id', $menuID)
            ->first();

        // If no permission, throw access denied error
        if(!$hasPermission) {
            abort(response()->json([
                'message' => 'Permission denied: '], 403));
        }
    }
}