<div class="container">
    <?php echo form_open_multipart('Login/do_editpeminjaman') ?>
   
        <div class="form-group">
            <label>Masukkan Nama Peminjam</label>
            <input type="hidden" name="id" class="form-control" value="<?php echo $pinjam['id_peminjaman']?>"> 
            <select name="anggota" class="form-control">
               <option value="<?php echo $pinjam['id_anggota']?>"><?php echo $pinjam['nama']?></option> 
            <?php foreach ($anggota as $anggotas) :?>
                <option value="<?php echo $anggotas['id_anggota']?>"><?php echo $anggotas['nama']?></option>
            <?php endforeach ?> 
            </select>
        </div>
        <div class="form-group">
            <label>Masukkan Nama Buku</label>
            <select name="buku" class="form-control">
            <option value="<?php echo $pinjam['id_buku']?>"><?php echo $pinjam['judul']?></option> 
            <?php foreach ($buku as $bukus) :?>
                <option value="<?php echo $bukus['id_buku']?>"><?php echo $bukus['judul']?></option>
            <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tanggal Kembali</label>
            <input type="date" name="tanggal" class="form-control" value="<?php echo $pinjam['tanggal_kembali']?>">
        </div>
        <br>
        <input type="submit" name="simpan" value="SAVE" class="btn btn-info">
    </form>
</div>