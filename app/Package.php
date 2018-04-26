<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'bw_download', 'bw_upload', 'fup_bw_download', 'fup_bw_upload', 'bw_data_limit', 'rate', 'billing_period', 'grace_period', 'nas_ids' 
    ];
    
    public function user() {
        return $this->belongsTo('App\User');
    }

}
