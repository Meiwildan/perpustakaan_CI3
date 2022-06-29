<div class="container">
<a href="<?php echo base_url('login/tambah_anggota')?>" class="btn btn-info">Tambah</a> 
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
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($anggota as $bukus) :?>
    <tr>
        
            <td><?php echo $bukus['nama']?></td>
            <td><?php echo $bukus['kelas']?></td>
            <td><?php echo $bukus['alamat']?></td>
            <td><?php echo $bukus['email']?></td>
            <td>
                <a href="<?php echo base_url()?>login/lihat_anggota/<?php echo $bukus['id_anggota']?>" class="btn btn-primary">Lihat</a>
                <a href="<?php echo base_url()?>login/edit_anggota/<?php echo $bukus['id_anggota']?>" class="btn btn-info">Edit</a>
                <a onclick="return confirm('Yakin ingin menghapus buku ini?')" href="<?php echo base_url()?>login/hapus_anggota/<?php echo $bukus['id_anggota']?>" class="btn btn-warning">Hapus</a>
            </td>
            
    </tr>
    <?php endforeach ?>
    
</table>
</div>