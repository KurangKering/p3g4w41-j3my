<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
class M_roles extends Eloquent
{
	protected $table = 'roles';
	protected $fillable = [
		'role_name',
	];

	public function users()
	{

		return $this->hasMany(new M_users());
	}
}