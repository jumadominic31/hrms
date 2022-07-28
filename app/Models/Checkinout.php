<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkinout extends Model
{
    protected $connection = 'sqlsrv';
    protected $table = 'CHECKINOUT';
    public $timestamps = false;

    public function employee(){
    	return $this->hasOne(Employee::class);
  	}
}
