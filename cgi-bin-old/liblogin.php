<div align="center">
<?php 
  if(empty($_POST["nameInput"])){ 
    $_SESSION["name"] = ''; 
  } else { 
    $_SESSION["name"] = $_POST["nameInput"]; }

  if(empty($_POST["passwordInput"])){ 
    $_SESSION["password"] = ''; 
  } else { 
    $_SESSION["password"] = $_POST["passwordInput"]; }
  if($_SESSION["password"]==null) {
?>
<br /><br />
<form method=post action="libindex.php">
<div align="center"><table align="center">
  <tr>
    <td>Username: </td>
    <td><input name="nameInput" type="text" size="30" /></td>
  </tr>
  <tr>
    <td>Password: </td>
    <td><input name="passwordInput" type="password" size="30" /></td>
  <tr>
    <td align='center' colspan=2>
      <input type="submit" value="Log In" />
    </td>
  </tr>
</table></div>
</form>

<?php } else {
  if($_SESSION["name"]=="testuser" && $_SESSION["password"]=="password") {
    	$_SESSION["login"]="true";
	$lastLogin=fopen($_SESSION["name"]."_lastlogin.txt", r);
	$_SESSION["lastLogin"]=fgets($lastLogin);
	fclose($lastLogin);
	$lastLogin=fopen($_SESSION["name"]."_lastlogin.txt", w);
	fwrite($lastLogin, time());
	fclose($lastLogin);
  } else {$_SESSION["login"]="false"; }
  header('Location: libindex.php');
  exit();
} ?>
</div>
