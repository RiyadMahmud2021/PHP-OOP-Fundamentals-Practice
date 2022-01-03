<!-- PHP ArrayObject -->

<?php
$array = array('1' => 'one',
               '2' => 'two',
               '3' => 'three');

$arrayobject1 = new ArrayObject($array);
 
$iterator = $arrayobject1->getIterator();

while($iterator->valid()) {
    echo $iterator->key() . ' => ' . $iterator->current() . "\n";

    $iterator->next();
}
?> 