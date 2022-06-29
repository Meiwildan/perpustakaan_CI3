<div class="container">
    <?php echo form_open_multipart('Login/do_anggota') ?>
        <div class="form-group">
            <label>Masukkan Nama</label>
            <input type="text" name="nama" class="form-control"> 
        </div>
        <div class="form-group">
            <label>Masukkan Kelas</label>
            <select name="kelas" class="form-control">
                <option>Pilih Kelas</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
            </select>
        </div>
        <div class="form-group">
            <label>Masukkan Alamat</label>
            <textarea class="form-control" name="alamat" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label>Masukkan Email</label>
            <input type="text" name="email" class="form-control"> 
        </div>
        <div class="form-group">
            <label>Masukkan Foto</label>
            <input type="file" name="foto" class="form-control"> 
        </div>
        <br>  
        <input type="submit" name="simpan" value="SAVE" class="btn btn-info">
    </form>
</div>