<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Authors extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'authors';
    
    protected $fillable = [
          'fio',
          'description',
          'photo',
          'showhide',
          'vip'
    ];
    
    public static $showhide = ["show" => "show", "hide" => "hide", ];
    public static $vip = ["0" => "0", "1" => "1"];


    public static function boot()
    {
        parent::boot();

        Authors::observe(new UserActionsObserver);
    }
    
    
    
    
}