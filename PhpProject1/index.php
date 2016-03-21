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

echo '<table border="2">';

for ($tr=1; $tr<=$rows; $tr+=1){ // в этом цикле счётчик $tr 
    // следит за количеством строк и всегда равен текущему номеру строки.
    // То есть в начале $tr=1, так как в начале у нас 1 строка, затем
    // каждый раз прибавляем единицу, пока не дойдём до заданного количества
    // $rows.
echo '<tr>';
if ($tr%2==0)        continue;
if ($tr% 2 == 0) {
  cols[Count_row].style.backgroundColor="Limegreen"
  cols[Count_row].style.color="Darkred"
 }
 else {
  cols[Count_row].style.backgroundColor="Yellow"
  cols[Count_row].style.color="Blue"
 }
for ($td=0; $td<$cols; $td++) // в этом цикле счётчик $td аналогичен
                                    // счётчику $tr. 
echo '<td>'. ($tr+$td) .'</td>';
echo '</tr>';
}
echo '</table>';  
        ?>
    </body>
</html>
