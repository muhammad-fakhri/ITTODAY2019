<?php
namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable {
	use Notifiable;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	public $timestamps = false;
	protected $table = "admins";
	protected $primaryKey = "id";
	protected $fillable = [
		'name', 'email', 'password',
	];
	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password',
	];
}