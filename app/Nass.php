<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nass extends Model
{

    protected $table = 'nass';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nas_ip', 'shortname', 'type', 'ports', 'secret', 'description', 'api_username', 'api_password' 
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

}
