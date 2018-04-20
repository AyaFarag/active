<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class models extends Model
{
    protected $primaryKey = 'model_id';
    
    protected $table = 'models';

    protected $fillable = [
        'name'
    ];

    // self model method
    public function models() {
        return  $this->hasOne('App\models'); 
    }
    
    // relashion methods
    public function products() {
        return  $this->hasMany('App\products');
    }
}