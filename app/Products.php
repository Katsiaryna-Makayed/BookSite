<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'products';
    
    protected $fillable = [
          'name',
          'year',
          'authors_id',
          'categories_id',
          'description',
          'photo',
          'showhide',
          'price',
          'quantity',
          'sold',
          'sale'
    ];
    
    public static $showhide = ["show" => "show", "hide" => "hide", ];
    public static $sale = ["no_sale" => "no_sale", "sale_5" => "sale_5", "sale_10" => "sale_10", "sale_15" => "sale_15", ];


    public static function boot()
    {
        parent::boot();

        Products::observe(new UserActionsObserver);
    }
    
    public function authors()
    {
        return $this->hasOne('App\Authors', 'id', 'authors_id');
    }


    public function categories()
    {
        return $this->hasOne('App\Categories', 'id', 'categories_id');
    }

    public function comments()
{
return $this->hasMany('App\Comments','article_id','id');
}
    
    
    
}