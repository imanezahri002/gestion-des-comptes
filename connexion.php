<?php
$servername = "localhost";
$username = "root";
$db="NeoBank";
$password = "";
try{
$conn=new PDO("mysql:host=$servername;dbname=$db", $username, $password);

}catch(PDOException $e){
echo "ereur de connexion au base de donnee";
}
?>