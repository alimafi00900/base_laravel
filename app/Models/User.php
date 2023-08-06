<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

     // protected $table='users';
    protected $fillable = [
        'id',
        'name',
        'auth_with_pic_status',
        'auth_with_phone_status',
        'basic_point',
        'referral_marketer_id',
        'referral_marketer_timestamp',
        'marketer_balance',
        'marketer_status',
        'marketer_balance',
        'marketer_link',
        'email',
        'status',
        'display_name',
        'phone_number',
        'password', 
        "CREDIT" ,
        'avatar' ,
        'nationalCode' ,
        'bank_card'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function tickets(){
        return $this->hasMany(Ticket::class)->whereNull('answered_to')->orderByDesc('status')->orderByDesc('updated_at');
    }



    public function comments(){
        return $this->hasMany(comments::class , 'user_id')->whereNull('answered_to');
        
    }
    
}
