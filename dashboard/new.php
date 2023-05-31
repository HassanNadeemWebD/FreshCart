<pre>
<?php

include 'config.php';
$categories = "SELECT `id` , `categories`.`name` from categories ";
$res = mysqli_query($conn, $categories);

while ($row = mysqli_fetch_assoc($res)) {

    $categoryID = $row['id'];
    $categoryName = $row['name'];
    echo "<h1> $categoryName </h1>";
    $products = "SELECT `name` FROM `PRODUCTS` WHERE `catid` =  '$categoryID' ";
    $productsRes = mysqli_query($conn, $products);

    // print_r($productsRes);
    while($productRow = mysqli_fetch_assoc($productsRes) ){
    // print_r(mysqli_fetch_assoc($productsRes));
    echo $productRow['name'];

    }

}

?></pre>