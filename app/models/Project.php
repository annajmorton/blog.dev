<?php

class Project extends BaseModel {
	protected $table = 'projects';
	protected static $resume = '/../database/resume.csv';

	public static function resume(){
		$resume = __DIR__ . self::$resume;

		if (!file_exists($resume) || !is_readable($resume)) {
			return false;
		}
		$handle = fopen($resume, 'r+');
		$data = [];
		$i=0;
		while(!feof($handle)){
			$data[$i] = fgetcsv($handle);
			$i++;
		}
		fclose($handle);
		return $data;
	}

}