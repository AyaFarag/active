<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colors extends Model
{
    protected $primaryKey = 'color_id';
    
    protected $table = 'colors';

    protected $fillable = [
        'name'
    ];

    // self model method
    public function color() {
        return  $this->hasOne('App\colors'); 
    }
    
    // relashion methods
    public function products() {
        return  $this->hasMany('App\products');
    }
}
