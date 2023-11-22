<?php
include 'config/config.php';

if (!isset($_GET['id'])){
    header('Location: siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_array($query);

if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Edit Siswa</title>
</head>
<body>
    <head>
        <h2>Edit Data Siswa</h2>
    </head>
    <form action="controller/edit_siswa.php" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo $siswa['id'] ?>" />
        <div>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" id="nama" value="<?php echo $siswa['nama'] ?>" />
        </div>
        <br>
        <div>
            <label for="tplahir">Tempat Lahir: </label>
            <textarea name="tplahir" id="tplahir" cols="30" rows="10"><?php echo $siswa['tplahir'] ?></textarea>
        </div>
        <br>
        <div>
             <label for="tglahir">Tanggal Lahir: </label>
             <input type="date" name="tglahir" id="tl" value="<?php echo $siswa['tglahir'] ?>" />
        </div>
        <br>
        <div>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" id="alamat" cols="30" rows="10"><?php echo $siswa['alamat'] ?></textarea>
        </div>
        <br>
        <div>
            <label for="hobi">Hobi: </label>
            <input name="hobi" name="hobi" id="hobi" value="<?php echo $siswa['hobi'] ?>" />
        </div>
        <br>
        <div>
            <label for="cita_cita">Cita-cita: </label>
            <input name="cita_cita" name="cita_cita" id="cita_cita" value="<?php echo $siswa['cita_cita'] ?>" />
        </div>
        <br>
        <div>
            <label for="jm_saudara">Jumlah Saudara: </label>
            <input name="jm_saudara" name="jm_saudara" id="jm_saudara" value="<?php echo $siswa['jm_saudara'] ?>" />
        </div>
        <br>
        <div>
            <label for="idkelas">Kelas: </label>
            <input name="idkelas" name="idkelas" id="idkelas" value="<?php echo $siswa['idkelas'] ?>" />
        </div>
        <br>
        <div>
            <label for="idagama">Agama: </label>
            <input name="idagama" name="idagama" id="idagama" value="<?php echo $siswa['idagama'] ?>" />
        </div>
        <br>
            </select>
        </div>
        <br>
        <div>
            <input type="Submit" value="Simpan" name="submit">
        </div>
    </form>
</body>
</html>