<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associativo Tabella Casa</title>
</head>
<style>
    table, th, td {
        border:1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
</style>
<body>
    <?php
        $casa = array("indirizzo" => "Via di ugnano 21", "metri quadri" => 340, "prezzo al metro quadro" => 3000);
        $casa["prezzo totale"] = $casa["metri quadri"] * $casa["prezzo al metro quadro"];
        createTable($casa);
        
        function createTable($array){
            echo "<table>";
            echo "<tr>"; 
            foreach (array_keys($array) as $key) {
                echo "<th>$key</th>";
            }
            echo "</tr>";
            echo "<tr>"; 
            foreach ($array as $key => $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
            
            echo "</table>";
        }
    ?>
</body>
</html>