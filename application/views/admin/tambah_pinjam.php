<div class="container">
    <?php echo form_open_multipart('Login/do_peminjaman') ?>
       
        <div class="form-group">
            <label>Masukkan Nama Peminjam</label>
            <select name="anggota" class="form-control">
            <?php foreach ($anggota as $anggotas) :?>
                <option value="<?php echo $anggotas['id_anggota']?>"><?php echo $anggotas['nama']?></option>
            <?php endforeach ?> 
            </select>
        </div>
        <div class="form-group">
            <label>Masukkan Nama Buku</label>
            <select name="buku" class="form-control">
            <?php foreach ($buku as $bukus) :?>
                <option value="<?php echo $bukus['id_buku']?>"><?php echo $bukus['judul']?></option>
            <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tanggal Kembali</label>
            <input type="date" name="tanggal" class="form-control">
        </div>
        <br>
        <input type="submit" name="simpan" value="SAVE" class="btn btn-info">
    </form>
</div>