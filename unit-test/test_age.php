<?php
// file:Validator.php
require_once "Validator.php" ;

// test case 1: umur valid
try {
    $result = validateAge(25);
    echo "PASS: umur 25 diterima\n";
} catch (Exception $e) {
    echo "FAIL : umur 25 tidak diterima. Error : ". $e->getMessage() . "\n";
}

// test case 2 : umur negatif 

try{
    $result = validateAge (-5);
    echo "FAIL : umur -5 diterima\n";
   } catch(Exception $e) {
              echo "PASS: umur -5 tidak diterima. error: " .$e->getMessage() . "\n";
    }

    