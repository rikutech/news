<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Entities;

class Term extends Model implements \Robbo\Presenter\PresentableInterface
{
	protected $dates = ['created_at', 'updated_at'];
	protected $fillable = [];

	public function getPresenter()
	{
		return new \App\Presenters\TermPresenter($this);
	}
}
