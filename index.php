<?php

include "include.php";

$mysqli = new mysqli( $db_host, $db_user, $db_password, $db_database);

echo "<strong>Appliances & Customers</strong>";
echo "<br />";
echo "<br />";

//three-way join
if ($result = $mysqli->query(
    "SELECT *
    FROM CUSTOMER c INNER JOIN CUSTOMER_PRODUCT cp
        ON c.CustomerAccountNo = cp.CustomerAccountNo JOIN PRODUCT p
        ON cp.ProdSerNo = p.ProdSerNo
    ORDER BY c.CustomerAccountNo ASC"
)) {
    //Print the result set into a table
    prettyPrint($result);
}
$mysqli->close(); 

//Add buttons in footer
readfile("footer.html");
?>

