<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
	protected $fillable = [
		'first_name',
		'last_name',
		'address',
		'created_at',
		'updated_at'
	];
	//Not insert two filed created_at ad updated_at to database
	public $timestamps = false;
}