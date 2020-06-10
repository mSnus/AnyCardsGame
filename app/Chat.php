<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
	 //

	 public function owner()
	 {
		 return $this->belongsTo(User::class);
	 }
}
