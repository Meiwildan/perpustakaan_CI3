<div class="container">
<a href="<?php echo base_url('login/tambah_peminjaman')?>" class="btn btn-info">Tambah</a> 
<hr>
<?php if($msg = $this->session->flashdata('tambah')):?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-dismissible alert-success"><?php echo $msg;?></div>
                    </div>
                </div>
                <?php endif ?>
<hr>

<table class="table table-border">
    <tr>
        <th>Nama Anggota</th>
        <th>Judul Buku</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($pinjam as $pinjams) :?>
               <tr>
                   <td><?php echo $pinjams['nama']?></td>
                   <td><?php echo $pinjams['judul']?></td>
                   <td><?php echo $pinjams['tanggal_pinjam']?></td>
                   <td><?php echo $pinjams['tanggal_kembali']?></td>
                   <td>
                       <a href="<?php echo base_url()?>login/edit_pinjam/<?php echo $pinjams['id_peminjaman']?>" class="btn btn-info btn-sm">Edit</a>
                       <a onclick="return confirm('Ingin mengembalikan buku ini?')" href="<?php echo base_url()?>login/hapus_pinjam/<?php echo $pinjams['id_peminjaman']?>" class="btn btn-warning btn-sm">Kembali</a>
                   </td>
               </tr>
        <?php endforeach ?>
    
</table>
</div>