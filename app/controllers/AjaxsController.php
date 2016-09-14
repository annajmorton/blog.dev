<?php

class AjaxsController extends \BaseController {

	public function hello()
	{
		$resume = Project::resume();
		return $resume;
	}

	public function portfolio()
	{
		$projresume = Project::resume();
		$projresume = array_merge(array_slice($projresume,40,4),array_slice($projresume,25,7));
		array_splice($projresume, 1,1);
		array_splice($projresume, 6,1);
		$pictures = Project::pictures();
		return ['projects'=>$projresume,'pics'=>$pictures];
	}

}
