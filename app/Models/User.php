<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

use App\Models\Permission;
use App\Models\UserAgency;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'status',
        'personal_id',
        'role',
        'email',
        'phone',
        'password',
        'agency_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function agencies(){
        return $this->hasMany(UserAgency::class, 'user_id', 'id');
    }

    public function menus(){
        return $this->hasMany(Permission::class, 'user_id', 'id');
    }

    public static function store($data){
        $user = Self::create([
            'first_name' => $data->first_name,
            'last_name' => $data->last_name,
            'status' => $data->status,
            'personal_id' => $data->personal_id,
            'email' => $data->email,
            'phone' => $data->phone,
            'password' => $data->password ? Hash::make($data->password) : Hash::make('007'),
            'role' => $data->role,
        ]);

        $permissions = [];
        if($data->menu){
            foreach($data->menu as $menu) {
                $permissions[] = [
                    'user_id' => $user->id,
                    'menu_id' => $menu
                ];
            }
            Permission::insert($permissions);
        }

        $agencies = [];
        if($data->agencies){
            foreach($data->agencies as $agency) {
                $permissions[] = [
                    'user_id' => $user->id,
                    'agency_id' => $agency
                ];
            }
            UserAgency::insert($agencies);
        }

        return true;
    }
}
