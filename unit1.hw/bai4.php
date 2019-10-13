<table>
<tr>
<?php
for($i = 2; $i < 10; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<br>";
    }
    echo "</td>";
}
?>
</tr>
</table>