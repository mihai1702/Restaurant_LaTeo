<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php


echo "Hello World!";
$name="ion";
echo "<p>$name</p>";
$x=2;
$y= 3;
function Sum() {
    global $x, $y;
    return $x + $y;
}
$s=Sum();
echo "<p>Sum of the x and y is $s</p>";

function staticincrement(){
    static $x= 0;
    echo "<p>$x</p>";
    $x++;
}
staticincrement();
staticincrement();
staticincrement();

$cars=array("mercedes", "bmw","audi","vw");
var_dump($cars);


///concatenare 
$x="hello";
$y="gion";
//$z=$x.$y;
$z="$x $y";
echo $z;

$x=45;
function isInteger($value){
    return is_int($value);
}
if(isInteger($x)){
    echo "<p>misto ca ii int</p>";
}
else echo "<p>nasol</p>";



///associative array
$car=array("brand"=>"Vw","model"=>"golf","year"=>2010);
var_dump($car);

///multidimensional array
$cars=array(
    array("vw", "golf", 2010),
    array("ford","focus", 2010),
    array("audi", "a3", 2017)
);

for($row=0;$row<3;$row++){
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}

// $file =fopen("textfile.txt","w")or die("unable to open file!");
// $txt="hello ma friend";
// fwrite($file,$txt);
// fclose($file);





include 'footer.php';
?>
</body>
</html>
