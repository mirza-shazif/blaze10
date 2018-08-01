<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'nickname',
        'username',
        'email',
        'dob',
        'password',
        'verification_token',
        'gender',
        'race_id',
        'country_id',
        'state_id',
        'city_id',
        'address',
        'facebook',
        'instagram',
        'twitter',
        'snapchat',
        'category_id',
        'experience_id',
        'acp',
        'sponsor',
        'sponsor_details',
        'no_of_followers',
        'bio',
        'bio_type'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
