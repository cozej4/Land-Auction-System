<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Zizaco\Entrust\Traits\EntrustUserTrait;

class UserDetail extends Model
{
    use EntrustUserTrait;

    protected $table = 'user_details';

    protected $primaryKey = 'user_detail_id';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email_address',
        'phone_number',
        'region',
        'district',
        'ward',
        'house_number',
        'address',
        'photo',
        'registration_status',
        'password',
    ];

    protected $hidden = [
        'password'
    ];
}
