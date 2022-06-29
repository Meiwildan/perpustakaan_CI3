<div class="container">
    <h1>Detail Siswa</h1>
    <br>
    <hr>
    <p><b>Nama Anggota</b> : <?php echo $buku['nama']?></p>
    <p><b>Kelas</b> : <?php echo $buku['kelas']?></p>
    <p><b>Alamat</b> : <?php echo $buku['alamat']?></p>
    <p><b>Email</b> : <?php echo $buku['email']?></p>
    <img style="width: 200px" src="<?php echo base_url()?> asset/foto<?php echo $buku['foto']?>">
    <br>
    <br>
    <hr>
    <a href="<?php echo base_url('login/anggota')?>" class="btn btn-info">Kembali</a>
</div>