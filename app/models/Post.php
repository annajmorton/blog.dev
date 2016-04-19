<?php 

class Post extends BaseModel
{
	protected $table = 'posts';

	public static $rules = array(
	    'title'      => 'required|max:100',
	    'body'       => 'required|max:10000'
	);

	public function setTitleAttribute($value)
	{
		$this->attributes['title'] = strtolower($value);
	}

	public function setBitleAttribute($value)
	{
		$this->attributes['body'] = strtolower($value);
	}
	public function user()
	{
		return $this->belongsTo('User');
	}
	// public static function searchPosts($query) 
	// {
	// 	return self::where('title', '=', "%$query%")->get(); 
	// }
}