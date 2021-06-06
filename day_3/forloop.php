<?php

echo "<table border='1'>";
for($i=0;$i<100;$i++){
    echo "<tr>";
    if($i%2==0){
        echo "<td bgcolor='skyblue'>$i</td>";
    }else{
        echo "<td bgcolor='grey'>$i</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>