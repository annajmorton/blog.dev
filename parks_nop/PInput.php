<?php 

class PInput
{
	public $value;
	public $key;
	public $isSet = false;
	public $isDate;
	public $isNumber;
	public $exMessage;

	public function __construct($keystring, $datecheck = false, $numcheck = false) 
	{
		$this->key = $keystring;
		$this->isDate = $datecheck;	
		$this->isNumber = $numcheck;
		$this->value = Input::has($this->key) ? $this->setInput() :'';	
	}

	public function setInput() {

		$input = Input::escape(Input::get($this->key));

		if (!empty($input)) {
			
			try{

				$this->isSet = true;

				if ($this->isDate) 
				{	
					$input = Input::getdate($this->key);
					$input = $input->format('Y-m-d');
					

				} else if ($this->isNumber) {	

					$input = Input::escape(Input::getnumber($this->key));

				} else {

					$input = Input::escape(Input::getWordName($this->key));

				} 



			} catch (InvalidArgumentException $e) {
				
				$this->isSet = false;
				$this->exMessage = $e->getMessage();	
				var_dump('invalarg');


			} catch (OutOfRangeException $e) {
				
				$this->isSet = false;
				$this->exMessage = $e->getMessage();	
				var_dump('outorange');

			} catch (DomainException $e) {
				
				$this->isSet = false;
				$this->exMessage = $e->getMessage();
				var_dump('domainex');

			} catch (LengthException $e) {
				
				$this->isSet = false;
				$this->exMessage = $e->getMessage();
				var_dump('length');

			} catch (RangeException $e) {
				
				$this->isSet = false;
				$this->exMessage = $e->getMessage();
				var_dump('range');

			} catch (Exception $e) {
				
				$this->isSet = false;
				$this->exMessage = $e->getMessage();
				var_dump('exp');
			}
			
		}
	
		return $input;

	}

}


function pageVariables($connection) {

	$in_name = new PInput('in_name'); 
	$in_location = new PInput('in_location');
	$in_date_est = new PInput('in_date_est', true);
	$in_area = new PInput('in_area',false ,true);
	$in_description = new PInput('in_description');
	$exMessage = [

		'name' => $in_name->exMessage,
		'location' => $in_location->exMessage,
		'date_established' => $in_date_est->exMessage,
		'area' => $in_area->exMessage,
		'description' => $in_description->exMessage

	];
	$edit_parkdb = new PInput('edit_parkdb');


	$pass = [

		'in_name' => $in_name->value,
		'in_location' => $in_location->value,
		'in_date_est' => $in_date_est->value,
		'in_area' => $in_area->value,
		'in_description' => $in_description->value,
		'exMessage' => $exMessage,
		'edit_parkdb' => $edit_parkdb->isSet

	];

	// var_dump($in_date_est);
	var_dump($pass);

	if ($in_name->isSet&&$in_location->isSet&&$in_date_est->isSet&&$in_area->isSet&&$in_description->isSet) {
		
		insertPark($pass, $connection);
		
		$pass['in_name'] = '';
		$pass['in_location'] = '';
		$pass['in_date_est'] = '';
		$pass['in_area'] = '';
		$pass['in_description'] = '';
	}

	return $pass;

}


function insertPark($pass, $connection) {

	$stmt = $connection->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

	$stmt->bindValue(':name',$pass['in_name'],PDO::PARAM_STR);
	$stmt->bindValue(':location',$pass['in_location'],PDO::PARAM_STR);
	$stmt->bindValue(':date_established',$pass['in_date_est'],PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres',$pass['in_area'],PDO::PARAM_STR);
	$stmt->bindValue(':description',$pass['in_description'],PDO::PARAM_STR);

	$stmt->execute();


}




