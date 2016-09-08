<?php 

class Post extends BaseModel
{
	protected $table = 'posts';
	public $image_location = '/img/posts/';

	public static $rules = array(
	    'title'      => 'required|max:100',
	    'body'       => 'required|max:10000',
	    'image'		=> 'max:500',
	);

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

}