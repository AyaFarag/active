<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    protected $primaryKey = 'brand_id';
    
    protected $table = 'brands';

    protected $fillable = [
        'name','description'
    ];

    // self model method
    public function brands() {
        return  $this->hasOne('App\brands'); 
    }
    
    // relashion methods
    public function products() {
        return  $this->hasMany('App\products'); 
    }

}
