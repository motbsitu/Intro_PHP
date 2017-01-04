<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Multiplication Table</h1>
<table>
  <?php
  echo '<tr>';
  echo '<th>&nbsp;</th>';

  for ($col = 1; $col < 13; $col++){
    echo "<th>  $col</th>";
  }
  echo '</tr>';


  for ($row = 1; $row < 13; $row++){
    echo "<tr>";
    echo "<th> $row</th>";
      for($col = 1; $col < 13; $col++){
        $product = $col * $row;
        echo "<td> $product</td>";
      }
    echo "</tr>";
  }
    ?>
</table>
</body>
</html>
