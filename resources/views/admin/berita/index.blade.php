<H1>INI VIEWS BERITA PORTAL DESA NURFI</H1>
<table border = "3" width="100%" >
    <tr style='background:cyan;color:black'>
        <td>No</td>
        <td>Judul Berita</td>
        <td>Isi Berita</td>
        <td>Tanggal Publikasi</td>
        <td>Penulis</td>

    </tr>
<?php
$no=0;
foreach ($berita as $rows){
    $no++;
?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $rows->judulberita?></td>
        <td><?php echo $rows->isi?></td>
        <td><?php echo $rows->tanggalpublikasi?></td>
        <td><?php echo $rows->penulis?></td>
    </tr>
<?php
}
?>   


</table>
