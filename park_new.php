<?php
Class Record {
	private $new_entry = array();
	private $dbc;
	public $passed_validation;
	
	function __construct($incoming_post, $dbc) {
		$this->dbc = $dbc;
		$this->sanitize($incoming_post);
	}

	private function sanitize($array) {
        foreach ($array as $key => $value) {
            $array[$key] = htmlspecialchars(strip_tags($value));  
        }
       	$this->validate($array);
	}

	private function validate($array) {
		if(!empty($array['name'])) {
			$this->new_entry['name'] = $array['name'];
			$this->passed_validation = true;
		}
		if(!empty($array['name'])) {
			$this->new_entry['location'] = $array['location'];
			$this->passed_validation = true;
		}
		if(!empty($array['name'])) {
			$this->new_entry['date_established'] = $array['date_established'];
			$this->passed_validation = true;
		}
		if(!empty($array['name'])) {
			$this->new_entry['area_in_acres'] = $array['area_in_acres'];
			$this->passed_validation = true;
		}
		if(!empty($array['name'])) {
			$this->new_entry['description'] = $array['description'];
			$this->passed_validation = true;
		}
	}

	public function insert() {

		$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
  		  VALUES (:name, :location, :date_established, :area_in_acres, :description)";

  		$stmt = $this->dbc->prepare($query);

    	$stmt->bindValue(':name', $this->new_entry['name'], PDO::PARAM_STR);
    	$stmt->bindValue(':location', $this->new_entry['location'], PDO::PARAM_STR);
    	$stmt->bindValue(':date_established', $this->new_entry['date_established'], PDO::PARAM_STR);
    	$stmt->bindValue(':area_in_acres', $this->new_entry['area_in_acres'], PDO::PARAM_STR);
    	$stmt->bindValue(':description', $this->new_entry['description'], PDO::PARAM_STR);
    
    	$stmt->execute();

	}

}
?>