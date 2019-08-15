<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $table = 'app';
	protected $fillable = [
        'id','email', 'name', 'city'
    ];
	protected $primaryKey = 'id';
	public $timestamps=true;
}