<?php 
use Carbon\Carbon;

class BaseModel extends Eloquent 
{
	public function getUpdatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->format('Y-m-d H:i:s');
	}

	public function getCreatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->format('Y-m-d H:i:s');
	}
		protected $table = 'posts';
	public $image_location = '/img/posts/';

	public static $rules = array(
	    'title'      => 'required|max:100',
	    'body'       => 'required|max:10000',
	    'image'		=> 'max:500',
	);

	public function getImageAttribute($value)
	{
	    if (is_null($value)) {

	    	return $value;
	    }
	    return unserialize($value);
	}
	public function setImageAttribute($value)
	{
		if (is_null($value)) {
	    	$this->attributes['image'] = $value;
	    }
		$this->attributes['image'] = serialize($value);
	}
	public function setTitleAttribute($value)
	{
		$this->attributes['title'] = strtolower($value);
	}
	public function setBodyAttribute($value)
	{
		$this->attributes['body'] = strtolower($value);
	}
	public function user()
	{
		return $this->belongsTo('User');
	}
	public function showImg($image1)
	{	
		return '<img src="' . $this->image_location . '/' . $image1 .'">';
	}

}