<?php
include"koneksidb.php";

$a = mysqli_query($conn,"select * from m_mahasiswa");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>ALAMAT</th>
        </tr>
        <?php
            $count = 0;
            while($b = mysqli_fetch_array($a)){
                ?>
                <tr>   
                    <td align="center"><?php echo $count ?></td>
                    <td align="center"><?php echo $b['nim'] ?></td>
                    <td><?php echo $b['nm_mhs'] ?></td>
                    <td><?php echo ($b['jk'] == 'L') ? "Laki - Laki" : "Perempuan"?></td>
                    <td><?php echo $b['alamat'] ?></td>
                </tr>
                <?php
                $count++;
                }
    
        ?>
    </table>
</body>
</html>