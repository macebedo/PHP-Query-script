<?php
  $host = "mysql1.000webhost.com";
  $dbname = "a8773318_acebedo";
  $dbuser = "a8773318_acebedo";
  $pwd = "Dublin2013";
  $dbc =0;
  $dbc = mysqli_connect($host, $dbuser, $pwd, $dbname)
  or die ('Cannot connect to database');

  $query = "SELECT `customerNumber` , `customerName` , `city` , `country`
  FROM `customers`
  ORDER BY customerNumber ASC
  LIMIT 20";
  $result = mysqli_query($dbc, $query)
  or die ('Error querying database');
?>
<!DOCTYPE html>
   <head>
      <title>Assignment 2</title>
   </head>
   <body>
      <h2>Assignment 2</h2>
      <table border="1">
         <tr bgcolor="#afb1ce">
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>City</th>
            <th>Country</th>
         </tr>
         <?php
while($row = mysqli_fetch_array($result)){

  $customerno = $row['customerNumber'];
  $customername = $row['customerName'];
  $city = $row['city'];
  $country = $row['country'];

  echo "<tr><td>$customerno</td><td>$customername</td><td>$city</td><td>$country</td>";
}
?>
      </table>
      <?php
mysqli_close($dbc);
?>
   </body>

   </html>
