<?php

namespace App\Models;

//use App\Models\User; //dont need this because this is in the same folder
//use App\Models\Section; //dont need this because this is in the same folder
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
	protected $fillable = [
		'title',
		'slug',
		'body',
		'section_id',
	];
	
	public function user()
	{
		return $this->belongsTo(User::class);
	}
	
	public function section()
	{
		return $this->belongsTo(Section::class);
	}
}