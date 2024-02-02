<?php
class dbController{
    private $host = "localhost";
	private $perdoruesi = "root";
	private $fjalekalimi = "";
	private $databaza = "umevs";
	private $lidhja;
    
    function __construct() {
		$this->lidhja = $this->connectDB();
	}
	
	function connectDB() {
		$lidhja = mysqli_lidhjaect($this->host,$this->perdoruesi,$this->fjalekalimi,$this->databaza);
		return $lidhja;
	}
	
	function runQuery($query) {
		$rezultati = mysqli_query($this->lidhja,$query);
		while($rreshti=mysqli_fetch_array($rezultati)) {
			$resultset[] = $rreshti;
		}
		if(!empty($resultset))
			return $resultset;
	}
	
	function insertQuery($query) {
	    mysqli_query($this->lidhja, $query);
	    $shto_id = mysqli_insert_id($this->lidhja);
	    return $shto_id;
	}
	
	function getIds($query) {
	    $rezultati = mysqli_query($this->lidhja,$query);
	    while($rreshti=mysqli_fetch_array($rezultati)) {
	        $resultset[] = $rreshti[0];
	    }
	    if(!empty($resultset))
	        return $resultset;
	}
}
?>