<?php
include 'config2.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (!empty($_POST)) {
    
    
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $telepon = isset($_POST['telepon']) ? $_POST['telepon'] : '';
    $confirm_destination = isset($_POST['confirm_destination']) ? $_POST['confirm_destination'] : '';
    $alamat_penjemputan = isset($_POST['alamat_penjemputan']) ? $_POST['alamat_penjemputan'] : '';
    $tanggal_keberangkatan = isset($_POST['tanggal_keberangkatan']) ? $_POST['tanggal_keberangkatan'] : '';

    
    $stmt = $pdo->prepare('INSERT INTO crudpage VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $telepon, $confirm_destination, $alamat_penjemputan, $tanggal_keberangkatan]);
  
    $msg = 'Created Successfully!';
}
?>


<?=template_header('Create')?>
<style>
     body{
        color: black;
 </style>


<div class="content update">
	<h2>Order</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="nama">Nama</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text" name="nama" id="nama">
        <label for="telepon">Telepon</label>
        <label for="confirm_destination">Confirm your destination</label>
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