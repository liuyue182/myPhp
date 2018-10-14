<?php
class Car{
    var $color;
    function Car($color="green"){
        $this->color=$color;
    }
    function  what_color(){
        return $this->color;
    }
}
$c=new Car('red');
echo $c->what_color();
?>
</br>

<?php
function add(){
    static $x=0;
    echo $x;
    $x++;
}
add();
add();
add();
?>
</br>
<?php
$arr=array("a","b",11);
echo var_dump($arr);
?>
</br>
<?php
$x='zs';
echo 'my name is $x';
echo "my name is $x";
//在双引号里有效
?><br>
<?php
$s='hello world';
echo strpos($s,"world");
?>