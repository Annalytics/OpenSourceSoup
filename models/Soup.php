<?php
namespace Soup;

use Illuminate\Database\Eloquent\Model as Model;

class Soup extends Model
{
	protected $fillable = array('name', 'temperature');
}