<?php
$servername = "localhost";
$username = "mowlaeic_somiUse";
$password = "3e&h?A#yOOz+";
$dbname = "mowlaeic_somi";

echo "1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username2 = 'default';
$inputs = 0;
$score = 0;
$version = 0;

$username2 = $_REQUEST["username"];
$inputs = $_REQUEST["inputs"];
$score = $_REQUEST["score"];
$version = $_REQUEST["version"];
$numOfhitShotGun = $_REQUEST["numOfhitShotGun"];
$numOfShootShotGun = $_REQUEST["numOfShootShotGun"];
$numOfhitUzi = $_REQUEST["numOfhitUzi"];
$numOfShootUzi = $_REQUEST["numOfShootUzi"];
$numOfFallingDown = $_REQUEST["numOfFallingDown"];
$numOfJump = $_REQUEST["numOfJump"];
$dateGame = $_REQUEST["dateGame"];
$timeGame = $_REQUEST["timeGame"];
$cloudKey = $_REQUEST["cloudKey"];

echo "2";

    

date_default_timezone_set("Asia/Tehran");
$dateTime = date('Y-m-d_H:i:s');
$date = date('H:i:s');
echo $date;


$sql = "INSERT INTO data(username,dateTime,score,inputs,version,numOfhitShotGun,numOfShootShotGun,numOfhitUzi,numOfShootUzi,numOfFallingDown,numOfJump,dateGame,timeGame,cloudKey)
VALUES ('$username2','$dateTime','$score','$inputs','$version','$numOfhitShotGun','$numOfShootShotGun','$numOfhitUzi','$numOfShootUzi','$numOfFallingDown','$numOfJump','$dateGame','$timeGame','$cloudKey')";



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
/*
*/
mysqli_close($conn);
?>