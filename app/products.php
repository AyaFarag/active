<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $primaryKey = 'product_id';
    
    protected $table = 'products';

    protected $fillable = [
        'name', 'description','fk_category_id','fk_brand_id','fk_model_id','fk_condition_id',
        'fk_quality_id', 'fk_quantity_id','fk_weight_id','fk_color_id','fk_price_id'
    ];

    // self model method
    public function products() {
        return  $this->belongsTo('App\products');
    }
        
    // relashion methods
    public function categories() {
        return  $this->belongsTo('App\categories' , 'fk_category_id'); 
    }

    public function brands() {
        return $this->belongsTo('App\brands' , 'fk_brand_id');
    }

    public function models() {
        return  $this->belongsTo('App\models' , 'fk_model_id'); 
    }

    public function conditions() {
        return  $this->belongsTo('App\conditions' , 'fk_condition_id'); 
    }

    public function qualities() {
        return  $this->belongsTo('App\qualities' , 'fk_quality_id'); 
    }
    
    public function quantities() {
        return  $this->belongsTo('App\quantities' , 'fk_quantity_id'); 
    }

    public function weight() {
        return  $this->belongsTo('App\weight' , 'fk_weight_id'); 
    }

    public function color() {
        return  $this->belongsTo('App\colors' , 'fk_color_id'); 
    }

    public function price() {
        return  $this->hasOne('App\prices', 'fk_price_id'); 
    }

    public function file() {
        return  $this->hasMany('App\files', 'fk_product_id'); 
    }

    public function review() {
        return  $this->hasMany('App\reviews', 'fk_product_id'); 
    }
    

    
}
