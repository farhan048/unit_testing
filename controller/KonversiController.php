<?php

include '../model/Konversi.php';
class KonversiController
{
    private static $input;
    public function __construct()
    {
        self::$input = new Konversi();
    }
    public function insertNilai()
    {
        $nilai = $_POST['nilai'];
        if ($nilai >= 80.1 && $nilai <= 100) {
            return self::$input->nilai($nilai, 'A');
        } elseif ($nilai >= 75.1 && $nilai <= 80) {
            return self::$input->nilai($nilai, 'AB');
        } elseif ($nilai >= 70.1 && $nilai <= 75) {
            return self::$input->nilai($nilai, 'B');
        } elseif ($nilai >= 65.1  && $nilai <= 70) {
            return self::$input->nilai($nilai, 'BC');
        } elseif ($nilai >= 60.1  && $nilai <= 65) {
            return self::$input->nilai($nilai, 'C');
        } elseif ($nilai >= 55.1 && $nilai <= 60) {
            return self::$input->nilai($nilai, 'CD');
        } elseif ($nilai >= 40.1 && $nilai <= 55) {
            return self::$input->nilai($nilai, 'D');
        } elseif ($nilai >= 0 && $nilai <= 40) {
            return self::$input->nilai($nilai, 'E');
        } elseif ($nilai > 100) {
            return "<p id='msg'>Batas maksimal nilai yang dikonversi adalah 100, harap periksa kembali input Anda</p>";
        } elseif ($nilai < 0) {
            return "<p id='msg'>Program tidak dapat menerima nilai minus, harap periksa kembali input Anda</p>";
        }
    }

    function showAll()
    {

        $row = self::$input->showNilai()->fetchAll(PDO::FETCH_ASSOC);

        // echo var_dump($row);

        if (count($row) == 0) {
            echo "<tr align='center'>";
            echo "<td colspan=3>Tidak ada data</td>";
            echo "</tr>";
        } else {
            foreach ($row as $key) {
                echo "<td>" . $key['id'] . "</td>";
                echo "<td>" . $key['nilai'] . "</td>";
                echo "<td>" . $key['grade'] . "</td>";
                echo "</tr>";
            }
        }
    }
}
