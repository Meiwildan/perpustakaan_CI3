<div class="container">
    <?php echo form_open_multipart('login/do_edit') ?>
        <div class="form-group">
            <label>Masukkan Judul</label>
            <input type="hidden" name="id" class="form-control" value="<?php echo $buku['id_buku']?>"> 
            <input type="text" name="judul" class="form-control" value="<?php echo $buku['judul']?>"> 
        </div>
        <div class="form-group">
            <label>Masukkan Pengarang</label>
            <input type="text" name="pengarang" class="form-control" value="<?php echo $buku['pengarang']?>"> 
        </div>
        <div class="form-group">
            <label>Masukkan ISBN</label>
            <input type="text" name="isbn" class="form-control" value="<?php echo $buku['isbn']?>"> 
        </div>
        <div class="form-group">
            <label>Masukkan Penerbit</label>
            <input type="text" name="penerbit" class="form-control" value="<?php echo $buku['penerbit']?>"> 
        </div>
        <div class="form-group">
            <img style="height: 200px width: 300px" src="<?php echo base_url() ?>asset/foto<?php echo $buku['foto']?>">
            <label>Masukkan Foto</label>
            <input type="file" name="foto" class="form-control"> 
        </div>
        <br>  
        <input type="submit" name="simpan" value="SAVE" class="btn btn-info">
    </form>
</div>