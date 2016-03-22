<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    
$rows = 50; // количество строк, tr
$cols = 2; // количество столбцов, td

echo '<table border="1">';
for ($tr=1; $tr<=$rows; $tr++){    
echo '<tr>';
if ($tr%2==0)        continue;
for ($td=0; $td<$cols; $td++){
if ($td% 2 == 0) {
echo '<td width="5px" height="5px" bgcolor="LawnGreen">' . ($tr+$td) .'</td>';
}
else {
echo '<td width="5px" height="5px" bgcolor="Cyan">'. ($tr+$td) .'</td>';
}
}
echo '</tr>';
}
echo '</table>';  
        ?>
    </body>
</html>
