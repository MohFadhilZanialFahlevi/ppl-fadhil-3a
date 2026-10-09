<?php
// file: test_name.php
require_once "Validator.php";

echo "=== HASIL TEST VALIDASI NAMA ===\n\n";

// Test Case 1: Nama valid
try {
    $result = validateName("Fadhil");
    echo "PASS : Nama 'Fadhil' berhasil diterima.\n";
} catch (Exception $e) {
    echo "FAIL : Nama 'Fadhil' tidak diterima. Error: " . $e->getMessage() . "\n";
}

// Test Case 2: Nama dengan angka[cite: 3]
try {
    $result = validateName("Fadhil 1212");
    echo "FAIL : Nama 'Fadhil 1212' diterima (Seharusnya ditolak).\n";
} catch (Exception $e) {
    echo "PASS : Nama 'Fadhil 1212' ditolak. Error: " . $e->getMessage() . "\n";
}

// Test Case 3: Input data kosong[cite: 3]
try {
    $result = validateName("");
    echo "FAIL : Nama kosong diterima (Seharusnya ditolak).\n";
} catch (Exception $e) {
    echo "PASS : Nama kosong ditolak. Error: " . $e->getMessage() . "\n";
}