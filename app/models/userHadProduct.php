<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class userHadProduct extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_had_product';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description', 'email', 'product_name','user_id'];
}
