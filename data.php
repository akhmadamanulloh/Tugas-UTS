<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>Data</h1> 
        <a href="form.php">Tambah Data </a>
        <table width="80%" border="1">
            <tr>
                <td>id_099</td>
                <td>nama_099</td>
                <td>email_099</td>
                <td>action</td>
            </tr>
                <?php
                include 'koneksi.php';
                $sql = "SELECT * FROM tbl_099";
                $hasil = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($hasil))
                {
                ?>
                <tr>
                    <td><?=$row['id_099'];?></td>
                    <td><?=$row['nama_099'];?></td>
                    <td><?=$row['email_099'];?></td>
                    <td> <a href="form_edit.php?id=<?=$row['id_099']?>">Edit | <a href="delete.php?id=<?=$row['id_099']?>"> Delete</td>
                </tr>
                <?php }
                ?>
        </table>
    </body>
</html>