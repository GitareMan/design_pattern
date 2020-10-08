<h1>

<?php 

require_once 'states/State.php';
require_once 'documents/Document.php';
require_once 'documents/Invoice.php';

$inv1 = new Invoice(500, "Рога");
echo $inv1, '<br>';
echo "<br>";
$inv2 = new Invoice(2500, "Копыта");
echo $inv2, '<br>';
echo "<br>";
$inv3 = new Invoice(0, "Рога&Копыта");
echo $inv3, '<br>';

?>

</h1>



