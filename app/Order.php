<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;


class Order extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];

    protected $table    = 'order';
    
    protected $fillable = [
          'body',
          'phone',
          'comment',
          'status',
          'user_id',
    ];


    public static function boot()
    {
        parent::boot();

        Products::observe(new UserActionsObserver);
    }
    
} 