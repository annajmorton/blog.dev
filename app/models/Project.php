<?php

class Project extends BaseModel {
	protected $table = 'projects';
	protected static $resume = '/../database/resume.csv';

	public static function resume(){
		$resume = __DIR__ . self::$resume;

		if (!file_exists($resume) || !is_readable($resume)) {
			return false;
		}
		$data = file_get_contents($resume);
		$data = explode(PHP_EOL, $data);
		array_shift($data);
		array_shift($data);
		return $data;
	}

}