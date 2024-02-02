<html>
<head>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="style.css" rel="stylesheet" type="text/css" />

		
<?php
include('../konfigurimi.php');
session_start();
$user_check=$_SESSION['perdoruesi'];
$ses_sql = mysqli_query($lidhja,"SELECT id_perdoruesi, perdoruesi FROM perdoruesit WHERE perdoruesi='$user_check' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_user=$row['perdoruesi'];
if(!isset($user_check))
{ header("Location: index.php");} 

	
    $_SESSION["anetari_id"] =  $row['id_perdoruesi'];
    
	require("dbcontroller.php");
	$dbController = new DBController();
	
	$query = "SELECT DISTINCT pyetja_id from tbl_anketa WHERE anetari_id = " . $_SESSION["anetari_id"]; 
	$rezultati = $dbController->getIds($query);
	
	$kushti = "";
	if(!empty($rezultati)) {
	    $kushti = " WHERE id NOT IN (" . implode(",", $rezultati) . ")";
    }
    
    $query = "SELECT * FROM `tbl_pyetja` " . $kushti . " limit 1";
    $pyetjet = $dbController->runQuery($query);
    
    if(!empty($pyetjet)) {
?>      
		<div class="question"><?php echo $pyetjet[0]["pyetja"]; ?><input type="hidden" name="pyetja" id="pyetja" value="<?php echo $pyetjet[0]["id"]; ?>" ></div>      
<?php 
        $query = "SELECT * FROM tbl_pergjigja WHERE pyetja_id = " . $pyetjet[0]["id"];
        $pergjigjet = $dbController->runQuery($query);
        if(!empty($pergjigjet)) {
            foreach($pergjigjet as $k=>$v) {
                ?>
			<div class="question"><input type="radio" name="pergjigja" class="radio-input" value="<?php echo $pergjigjet[$k]["id"]; ?>" /><?php echo $pergjigjet[$k]["pergjigja"]; ?></div>      
<?php 
            }
        }
?>
		<div class="poll-bottom">
			<button id="btnSubmit" onClick="shtoAnketen()">Dergo</button>
		</div>
<?php        
    } else {
?>

<div class="error">Votimi perfundoi me sukses!</div>


<?php 
    }
?>