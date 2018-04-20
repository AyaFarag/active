<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class condition extends Model
{
    protected $primaryKey = 'condition_id';
    
    protected $table = 'conditions';

    protected $fillable = [
        'name'
    ];

    // self model method
    public function conditions() {
        return  $this->hasOne('App\conditions'); 
    }
    
    // relashion methods
    public function products() {
        return  $this->hasMany('App\products');
    }
}
