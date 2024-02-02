<?php
    session_start();
    require("dbcontroller.php");
	$dbController = new dbController();
	
	$pergjigja_id  = $_POST['pergjigja'];
	$pyetja_id = $_POST['pyetja'];
	
	$query = "INSERT INTO tbl_anketa(pyetja_id,pergjigja_id,anetari_id) VALUES ('" . $pyetja_id ."','" . $pergjigja_id . "','" . $_SESSION["anetari_id"] . "')";
    $shto_id = $dbController->insertQuery($query);
    
    if(!empty($shto_id)) {
        $query = "SELECT * FROM tbl_pergjigja WHERE pyetja_id = " . $pyetja_id;
        $pergjigja = $dbController->runQuery($query);
    }
    
    if(!empty($pergjigja)) {
?>        
        <div class="poll-heading"> Rezultati </div> 
<?php
        $query = "SELECT count(pergjigja_id) as vleresimi_total FROM tbl_anketa WHERE pyetja_id = " . $pyetja_id;
        $vleresimi_total = $dbController->runQuery($query);

        foreach($pergjigja as $k=>$v) {
            $query = "SELECT count(pergjigja_id) as pergjigja_numerimi FROM tbl_anketa WHERE pyetja_id = " .$pyetja_id . " AND pergjigja_id = " . $pergjigja[$k]["id"];
            $pergjigja_vleresimi = $dbController->runQuery($query);
            $pergjigjet_numerimi = 0;
            if(!empty($pergjigja_vleresimi)) {
                $pergjigjet_numerimi = $pergjigja_vleresimi[0]["pergjigja_numerimi"];
            }
            $perqindja = 0;
            if(!empty($vleresimi_total)) {
                $perqindja = ( $pergjigjet_numerimi / $vleresimi_total[0]["vleresimi_total"]) * 100;
                if(is_float($perqindja)) {
                    $perqindja = number_format($perqindja,2);
                }
            }
            
?><div class="answer-rating"> <span class="answer-text"><?php echo $pergjigja[$k]["pergjigja"]; ?></span><span class="answer-count"> <?php echo $perqindja . "%"; ?></span></div>            
<?php 
        }
    }
?>
<div class="poll-bottom">
	<button class="next-link" onClick="shfaqAnketen();">Vazhdo</button>
</div>