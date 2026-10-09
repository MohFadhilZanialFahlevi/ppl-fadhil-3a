<?php
// file: Validator.php

function validateAge($age) {
    if (!is_numeric($age)){
        throw new InvalidArgumentException("umur harus berupa angka");
    }

    if ($age < 0){
        throw new InvalidArgumentException("umur tidak boleh negatif");
    }
    return true;
}

// Fungsi baru untuk validasi nama
function validateName($name) {
    // 1. Cek apakah nama kosong
    if (empty(trim($name))) {
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }

    // 2. Cek apakah nama hanya mengandung huruf dan spasi
    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        throw new InvalidArgumentException("Nama harus berupa huruf");
    }

    return true;
}