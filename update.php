<?php
include 'config2.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $telepon = isset($_POST['telepon']) ? $_POST['telepon'] : '';
        $confirm_destination = isset($_POST['confirm_destination']) ? $_POST['confirm_destination'] : '';
        $alamat_penjemputan = isset($_POST['alamat_penjemputan']) ? $_POST['alamat_penjemputan'] : '';
        $tanggal_keberangkatan = isset($_POST['tanggal_keberangkatan']) ? $_POST['tanggal_keberangkatan'] : '';
        
        
        $stmt = $pdo->prepare('UPDATE crudpage SET id = ?, nama = ?, telepon = ?, confirm_destination = ?, alamat_penjemputan  = ?, tanggal_keberangkatan = ? WHERE id = ?');
        $stmt->execute([$id, $nama, $telepon, $confirm_destination, $alamat_penjemputan, $tanggal_keberangkatan]);
        $msg = 'Updated Successfully!';
    }
    $stmt = $pdo->prepare('SELECT * FROM crudpage WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>



<?=template_header('Read')?>

<div class="content update">
	<h2>Update Order </h2>
    <form action="update.php?id=<?=$contact['id']?>" method="post">
    <label for="id">ID</label>
        <label for="nama">Nama</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text" name="nama" id="nama">
        <label for="telepon">Telepon</label>
        <label for="confirm_destination">confirm your destination</label>
        <input type="text" name="telepon" id="telepon">
        <input type="text" name="confirm_destination" id="confirm_destination">
        <label for="alamat_penjemputan">Alamat Penjemputan</label>
        <label for="tanggal_keberangkatan">Tanggal Keberangkatan</label>
        <input type="text" name="alamat_penjemputan" id="alamat_penjemputan">
        <input type="text" name="tanggal_keberangkatan" id="tanggal_keberangkatan">
        <input type="submit" value="Order"> 
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>