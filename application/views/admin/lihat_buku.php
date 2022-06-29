<div class="container">
    <h1>Detail Buku</h1>
    <br>
    <hr>
    <p><b>Judul Buku</b> : <?php echo $buku['judul']?></p>
    <p><b>Pengarang Buku</b> : <?php echo $buku['pengarang']?></p>
    <p><b>ISBN Buku</b> : <?php echo $buku['isbn']?></p>
    <p><b>Penerbit Buku</b> : <?php echo $buku['penerbit']?></p>
    <img src="<?php echo base_url()?> asset/foto<?php echo $buku['foto']?>">
    <br>
    <br>
    <hr>
    <a href="<?php echo base_url('login/buku')?>" class="btn btn-info">Kembali</a>
</div>