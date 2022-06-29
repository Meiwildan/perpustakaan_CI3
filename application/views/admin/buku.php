<div class="container">
<a href="<?php echo base_url('login/tambah_buku')?>" class="btn btn-info">Tambah</a> 
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
        <th>Judul</th>
        <th>Pengarang</th>
        <th>ISBN</th>
        <th>Penerbit</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($buku as $bukus) :?>
    <tr>
        
            <td><?php echo $bukus['judul']?></td>
            <td><?php echo $bukus['pengarang']?></td>
            <td><?php echo $bukus['isbn']?></td>
            <td><?php echo $bukus['penerbit']?></td>
            <td>
                <a href="<?php echo base_url()?>login/lihatData/<?php echo $bukus['id_buku']?>" class="btn btn-primary">Lihat</a>
                <a href="<?php echo base_url()?>login/edit/<?php echo $bukus['id_buku']?>" class="btn btn-info">Edit</a>
                <a onclick="return confirm('Yakin ingin menghapus buku ini?')" href="<?php echo base_url()?>login/hapus_buku/<?php echo $bukus['id_buku']?>" class="btn btn-warning">Hapus</a>
            </td>
            
    </tr>
    <?php endforeach ?>
    
</table>
</div>