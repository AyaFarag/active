<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $primaryKey = 'product_id';
    
    protected $table = 'products';

    protected $fillable = [
        'name', 'description','category_id','brand_id','model_id','condition_id','quality_id',
        'quantity_id','weight_id','color_id','price_id'
    ];

    // self model method
    public function products() {
        return  $this->belongsTo('App\products');
    }
        
    // relashion methods
    public function categories() {
        return  $this->belongsTo('App\categories'); 
    }

    public function brands() {
        return $this->belongsTo('App\brands');
    }

    public function models() {
        return  $this->belongsTo('App\models'); 
    }

    public function conditions() {
        return  $this->belongsTo('App\conditions'); 
    }

    public function qualities() {
        return  $this->belongsTo('App\qualities'); 
    }
    
    public function quantities() {
        return  $this->belongsTo('App\quantities'); 
    }

    public function weight() {
        return  $this->belongsTo('App\weight'); 
    }

    public function color() {
        return  $this->belongsTo('App\colors'); 
    }

    public function price() {
        return  $this->hasOne('App\prices'); 
    }

    public function file() {
        return  $this->hasMany('App\files'); 
    }

    public function review() {
        return  $this->hasMany('App\reviews'); 
    }

    
}
