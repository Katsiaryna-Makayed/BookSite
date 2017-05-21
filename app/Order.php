<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];

    protected $table    = 'order';
    
    protected $fillable = [
          'body',
          'comment',
          'status',
          'user_id',
    ];
    
    public static $showhide = ["show" => "show", "hide" => "hide", ];


    public static function boot()
    {
        parent::boot();

        Products::observe(new UserActionsObserver);
    }
    
}