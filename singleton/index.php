<?php 
require 'Singleton.php';

$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();
?>
<h2>
<?php
echo $s1->data;
echo "<br>";
echo $s2->data;

?>
</h2>