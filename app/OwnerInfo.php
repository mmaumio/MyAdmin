<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class OwnerInfo extends Model
{
    use Notifiable;

    protected $table = 'owners';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company', 'owner_id', 'email', 'phone', 'city', 'state', 'zip', 'country', 'address_line1', 'address_line2',
    ];
}
