<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM soal WHERE id = $id";
$result = mysqli_query($conn, $query);
$soal = mysqli_fetch_assoc($result);

if (!$soal) {
    echo "Soal tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Soal</title>
</head>
<body>
    <h1>Edit Soal</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $soal['id']; ?>">
        
        <label for="pertanyaan">Pertanyaan:</label><br>
        <textarea name="pertanyaan" id="pertanyaan" rows="4" required><?php echo $soal['pertanyaan']; ?></textarea><br><br>
        
        <label for="opsi_a">Opsi A:</label>
        <textarea name="opsi_a" id="opsi_a"><?php echo $soal['opsi_a']; ?></textarea>
        <br>
        
        <label for="opsi_b">Opsi B:</label>
        <textarea name="opsi_b" id="opsi_b"><?php echo $soal['opsi_b']; ?></textarea><br>
        
        <label for="opsi_c">Opsi C:</label>
        <textarea name="opsi_c" id="opsi_c"><?php echo $soal['opsi_c']; ?></textarea><br>
        
        <label for="opsi_d">Opsi D:</label>
        <textarea name="opsi_d" id="opsi_d"><?php echo $soal['opsi_d']; ?></textarea><br>
        
        <label for="opsi_e">Opsi E:</label>
        <textarea name="opsi_e" id="opsi_e"><?php echo $soal['opsi_e']; ?></textarea><br>

        <label for="jawaban">Jawaban Benar:</label>
        <select name="jawaban" id="jawaban" required>
            <option value="A" <?php if ($soal['jawaban'] == 'A') echo 'selected'; ?>>A</option>
            <option value="B" <?php if ($soal['jawaban'] == 'B') echo 'selected'; ?>>B</option>
            <option value="C" <?php if ($soal['jawaban'] == 'C') echo 'selected'; ?>>C</option>
            <option value="D" <?php if ($soal['jawaban'] == 'D') echo 'selected'; ?>>D</option>
            <option value="E" <?php if ($soal['jawaban'] == 'E') echo 'selected'; ?>>E</option>
        </select><br><br>
        
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>