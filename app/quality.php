<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quality extends Model
{
    protected $primaryKey = 'quality_id';
    
    protected $table = 'qualities';

    protected $fillable = [
        'name'
    ];

    // self model method
    public function qualities() {
        return  $this->hasOne('App\qualities'); 
    }
    
    // relashion methods
    public function products() {
        return  $this->hasMany('App\products');
    }
}
