<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weight extends Model
{
    protected $primaryKey = 'weight_id';
    
    protected $table = 'weights';

    protected $fillable = [
        'name'
    ];

    // self model method
    public function weight() {
        return  $this->hasOne('App\weight'); 
    }
    
    // relashion methods
    public function products() {
        return  $this->hasMany('App\products');
    }
}
