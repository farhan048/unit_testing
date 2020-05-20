<?php

include '../config/Database.php';

class Konversi
{
    function nilai($nilai, $grade)
    {
        try {
            $sql = "INSERT INTO nilai VALUES (NULL, $nilai, '$grade')";
            $query = Database::getConnection()->prepare($sql);
            $query->execute();
            return "<p id='msg'>Input berhasil!</p>";
        } catch (\Throwable $th) {
            return "<p id='msg'>Input gagal: " . $th->getMessage() . "</p>";
        }
    }
    function showNilai()
    {
        try {
            $sql = "SELECT * FROM nilai ORDER BY id ASC";
            $result = Database::getConnection()->query($sql);
            return $result;
        } catch (\Throwable $th) {
            return "<p id='msg'>Gagal menampilkan semua nilai: " . $th->getMessage() . "</p>";
        }
    }
}
