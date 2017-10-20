
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";
$dbtable = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM products order by id asc";
$result = mysqli_query($conn, $sql);
	
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $dbtable .= "<div class='row cart'><div class='col '><div class='row'><div class='col name'>".$row['name']."</div></div>
        						<div class='row'><div class='col'><img class='picture' width='200px' height='200px' src='user/uploads/".$row['url']."'></div></div>
        						<div class='row'><div class='col price pagination-centered'>".$row['price']."€</div>
        						<div class='col '><i class='bag fa fa-shopping-basket  fa-2x' aria-hidden='true'></i></div>
        						</div></div></div>";
    $sum[] = $row["price"]; 
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

include"view/view.php";
?>
