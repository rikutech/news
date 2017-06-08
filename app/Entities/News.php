<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Entities;

class News extends Model
{
	protected $dates = ['created_at', 'updated_at'];
	protected $fillable = [];
}
