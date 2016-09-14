<?php

class Project extends BaseModel {
	protected $table = 'projects';
	protected static $resume = '/../database/resume.csv';
	protected static $pictures = '/../../public/img/projects/index.csv';

	public static function resume(){
		$resume = __DIR__ . self::$resume;
		return self::fileReturn($resume);;
	}

	public static function pictures(){
		$pictures = __DIR__ . self::$pictures;
		return self::fileReturn($pictures);
	}

	public static function fileReturn($filename){
		if (!file_exists($filename) || !is_readable($filename)) {
			return false;
		}
		$handle = fopen($filename, 'r+');
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