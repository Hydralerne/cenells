<?php

include ("../connectdb/index.php");

?>

<?php


// favorite settings
	if(isset($_POST['subonfaview'])){
		$selinopt = mysql_query("SELECT * FROM secde WHERE type='fav_opp' AND user_id='$id' AND session='on'");
		while($ertor = mysql_fetch_array($selinopt)){
			$rrtope = $ertor['id'];
		}
		if(empty($rrtope)){
		$insopt = mysql_query("INSERT INTO secde(type,user_id,session) VALUES('fav_opp','$id','on')");
		}
	}
	if(isset($_POST['suboffaview'])){

		$ofinsopt = mysql_query("DELETE FROM secde WHERE type='fav_opp' AND user_id='$id' AND session='on'");
	}


// session for veiw as accounts

	if(isset($_POST['subaserli'])){
		$asertq = mysql_query("SELECT * FROM secde WHERE type='veiw_asac' AND user_id='$id' AND session='on'");
		while($erasiuy = mysql_fetch_array($asertq)){
			$aserqwop = $erasiuy['id'];
		}
		if(empty($aserqwop)){
		$retopiu = mysql_query("INSERT INTO secde(type,user_id,session) VALUES('veiw_asac','$id','on')");
		}
	}
	if(isset($_POST['suboferli'])){
		$oftimequ = mysql_query("DELETE FROM secde WHERE type='veiw_asac' AND user_id='$id' AND session='on'");
	}

// session for followers and following view

// following
	if(isset($_POST['setfolingview'])){
		$ertyu = mysql_query("SELECT * FROM secde WHERE type='veiw_foli' AND user_id='$id' AND session='on'");
		while($ertrew = mysql_fetch_array($ertyu)){
			$ttyuytr = $ertrew['id'];
		}
		if(empty($ttyuytr)){
		$retopiu = mysql_query("INSERT INTO secde(type,user_id,session) VALUES('veiw_foli','$id','on')");
		}
	}
	if(isset($_POST['subdelfoli'])){
		$oftimequ = mysql_query("DELETE FROM secde WHERE type='veiw_foli' AND user_id='$id' AND session='on'");
	}

// followers	
	
	if(isset($_POST['setfolview'])){
		$ertyu = mysql_query("SELECT * FROM secde WHERE type='veiw_folo' AND user_id='$id' AND session='on'");
		while($ertrew = mysql_fetch_array($ertyu)){
			$ttyuytr = $ertrew['id'];
		}
		if(empty($ttyuytr)){
		$retopiu = mysql_query("INSERT INTO secde(type,user_id,session) VALUES('veiw_folo','$id','on')");
		}
	}
	if(isset($_POST['subdelfoler'])){
		$oftimequ = mysql_query("DELETE FROM secde WHERE type='veiw_folo' AND user_id='$id' AND session='on'");
	}


// section all end

?>







