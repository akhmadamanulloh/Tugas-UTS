<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        include "koneksi.php";
        $id=$_GET['id'];
        $sql = "SELECT * FROM tbl_099 WHERE id_099=$id";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil){
            echo "Query Salah";
        }
        ?>
        <h1>Form edit data </h1>
        <?php
        while ($row = mysqli_fetch_array($hasil))
        {
        ?>
        <form method="post" action="update.php">
        <table border="0">
        <input type="hidden" name="id_099" value="<?php echo $row['id_099']?>">
        <tr>
            <td>nama_099: <input type="text" name="nama_099" value="<?php echo $row['nama_099']?>"></td>
        </tr>
        <tr>
            <td>email_099: <input type="text" name="email_099" value="<?php echo $row['email_099']?>"></td>
        </tr>
        <tr>
            <td><button type="submit">Update</button> </td>
        </tr>
            </table>
        </form>
        <?php } ?>
    </body>
</html>