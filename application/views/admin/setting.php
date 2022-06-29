<div class="container">
    <h1>Ubah Admin</h1>
    <br>
    <hr>
    <p><?php echo $this->session->flashdata('ubah')?></p>
    <p style="color: red"><?php echo $this->session->flashdata('gagal')?></p>
   <div class="col-md-5">
   <?php echo form_open_multipart('login/do_setting')?>
    <div class="form-group">
        <label>Masukkan Password Baru</label>
        <input type="password" name="psw" class="form-control">
    </div>
    <?php echo form_open_multipart('login/setting')?>
    <div class="form-group">
        <label>Konfirmasi Password</label>
        <input type="password" name="psw2" class="form-control">
    </div>
    <br>
    <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
</form>
</div>
</div>