
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hitung Nilai Akhir</title>
</head>
<body>

    <h2>Form Input Nilai Mahasiswa</h2>

    <form method="POST">
        <label>Nilai Tugas:</label><br>
        <input type="number" name="tugas" min="0" max="100"
               required><br><br>

        <label>Nilai UTS:</label><br>
        <input type="number" name="uts" min="0" max="100"
               required><br><br>

        <label>Nilai UAS:</label><br>
        <input type="number" name="uas" min="0" max="100"
               required><br><br>

        <button type="submit" name="hitung">
            Hitung Nilai
        </button>
    </form>

    <?php
    function hitungNilaiAkhir($tugas, $uts, $uas) {
        $nilai_akhir = ($tugas * 0.3)
                     + ($uts * 0.3)
                     + ($uas * 0.4);

        if ($nilai_akhir >= 70) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }

        echo "<h3>Hasil Perhitungan</h3>";
        echo "Nilai Tugas: " . $tugas . "<br>";
        echo "Nilai UTS: " . $uts . "<br>";
        echo "Nilai UAS: " . $uas . "<br>";
        echo "Nilai Akhir: " . round($nilai_akhir) . "<br>";
        echo "Status: " . $status;
    }

    if (isset($_POST['hitung'])) {
        $tugas = (int) $_POST['tugas'];
        $uts   = (int) $_POST['uts'];
        $uas   = (int) $_POST['uas'];

        if (
            $tugas >= 0 && $tugas <= 100 &&
            $uts >= 0 && $uts <= 100 &&
            $uas >= 0 && $uas <= 100
        ) {
            hitungNilaiAkhir($tugas, $uts, $uas);
        } else {
            echo "Nilai harus berada antara 0 sampai 100.";
        }
    }
    ?>

</body>
</html>
