<div class="container">
    <?php echo form_open_multipart('Login/do_edit_anggota') ?>
    <input type="hidden" name="id" class="form-control" value="<?php echo $buku['id_anggota']?>"> 
        <div class="form-group">
            <label>Masukkan Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $buku['nama']?>"> 
        </div>
        <div class="form-group">
            <label>Masukkan Kelas</label>
            <select name="kelas" class="form-control">
                <option><?php echo $buku['kelas']?></option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
            </select>
        </div>
        <div class="form-group">
            <label>Masukkan Alamat</label>
            <textarea class="form-control" name="alamat" rows="5"><?php echo $buku['alamat']?></textarea>
        </div>
        <div class="form-group">
            <label>Masukkan Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $buku['email']?>"> 
        </div>
        <div class="form-group">
        <img style="height: 200px width: 300px" src="<?php echo base_url() ?>asset/foto<?php echo $buku['foto']?>"><br>
            <label>Masukkan Foto</label>
            <input type="file" name="foto" class="form-control"> 
        </div>
        <br>  
        <input type="submit" name="simpan" value="SAVE" class="btn btn-info">
    </form>
</div>