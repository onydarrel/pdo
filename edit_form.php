<?php include "database.php";

$query = "SELECT * FROM orang WHERE id=$_GET[id]";
$data = $konek->prepare($query);
$data->execute();

$orang = $data->fetch(PDO::FETCH_OBJ);
?>

<h3>Edit</h3>
<form action="edit.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $orang->id; ?>">
  <table>
    <tr>
      <td>Nama</td>
      <td><input type="text" name="nama" value="<?php echo $orang->nama; ?>"></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><input type="text" name="alamat" value="<?php echo $orang->alamat; ?>"></td>
    </tr>
    <tr>
      <td><button type="submit">Kirim</button></td>
      <td><a href="index.php">Kembali</a></td>
    </tr>
  </table>
</form>