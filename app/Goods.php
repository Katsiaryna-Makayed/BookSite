<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Goods extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'goods';
    
    protected $fillable = [
          'name',
          'authors_id',
          'description',
          'url',
          'picture',
          'price',
          'year',
          'vip',
          'showhide',
          'categories_id',
          'user_id'
    ];
    
    public static $vip = ["0" => "0", "1" => "1"];
    public static $showhide = ["show" => "show", "hide" => "hide", ];


    public static function boot()
    {
        parent::boot();

        Goods::observe(new UserActionsObserver);
    }
    
    public function authors()
    {
        return $this->hasOne('App\Authors', 'id', 'authors_id');
    }


    public function categories()
    {
        return $this->hasOne('App\Categories', 'id', 'categories_id');
    }


    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }


    
    
    
}