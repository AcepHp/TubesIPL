<?php 
	include "../auth/koneksi.php";
	$id = $_GET['id'];
    $sqlh = mysqli_query($conn, "SELECT * FROM `tb_harga` WHERE id_booking='$id';"); 
    $sql = mysqli_query($conn, "SELECT * FROM `tb_booking` WHERE id_booking='$id';"); 
    $i=1;
    foreach ($sql as $peng){
        foreach($sqlh as $harga){
    $total=$harga['Harga_Catering']+$harga['Harga_Tempat']+$harga['Harga_Jumlah_Orang']+$harga['Harga_MC']+$harga['Harga_Hiburan']+$harga['Harga_Dekorasi']+$harga['Harga_Makeup'];
    ?>
<table class="table" border="1px solid black" border-collapse="collapse">
    <thead>
        <tr style="background-color: red;">
            <th>Nama</th>
            <th colspan="2"><?php echo $peng['Nama']?></th>
        </tr>
        <tr>
            <th>Id Booking</th>
            <th><?php echo $harga['id_booking']?></th>
            <th><?php echo $peng['Tanggal']?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Kategori</th>
            <th>Item</th>
            <th>Harga</th>
        </tr>
        <tr>
            <th>Catering</th>
            <td><?php echo $peng['Catering']?></td>
            <td>Rp.<?php echo number_format($harga['Harga_Catering'])?></td>
        </tr>
        <tr>
            <th>Tempat</th>
            <td><?php echo $peng['Tempat']?></td>
            <td>Rp.<?php echo number_format($harga['Harga_Tempat'])?></td>
        </tr>
        <tr>
            <th>Jumlah Orang</th>
            <td><?php echo $peng['Jumlah_Orang']?></td>
            <td>Rp.<?php echo number_format($harga['Harga_Jumlah_Orang'])?></td>
        </tr>
        <tr>
            <th>MC</th>
            <td><?php echo $peng['MC']?></td>
            <td>Rp.<?php echo number_format($harga['Harga_MC'])?></td>
        </tr>
        <tr>
            <th>Hiburan</th>
            <td><?php echo $peng['Hiburan']?></td>
            <td>Rp.<?php echo number_format($harga['Harga_Hiburan'])?></td>
        </tr>
        <tr>
            <th>Dekorasi</th>
            <td><?php echo $peng['Dekorasi']?></td>
            <td>Rp.<?php echo number_format($harga['Harga_Dekorasi'])?></td>
        </tr>
        <tr>
            <th>Makeup</th>
            <td><?php echo $peng['Makeup']?></td>
            <td>Rp.<?php echo number_format($harga['Harga_Makeup'])?></td>
        </tr>
        <tr>
            <th></th>
            <th>Total Harga</th>
            <td>Rp.<?php echo number_format($total)?></td>
        </tr>
    </tbody>
</table>

<?php $i++;}}?>
</tr>