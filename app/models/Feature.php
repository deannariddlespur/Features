<?php

use Illuminate\Auth\featureTrait;
use Illuminate\Auth\featureInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class feature extends Eloquent implements featureInterface, RemindableInterface {

	use featureTrait, RemindableTrait;
	public $timestamps = false;
	
	protected $fillable = ['featurename'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'features';
	

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	

}
