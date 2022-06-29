<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/styles.css">

</head>
        <body>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="<?php echo base_url('login/do_login') ?>" method="post">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p><?php echo $this->session->flashdata('login')?></p>
                <div class="form-group">
                    <label>Masukkan Username</label>
                    <input type="text" name="uname" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Masukkan Password</label>
                    <input type="password" name="password" class="form-control"></input>
                </div>
                <br>
                <input type="submit" name="simpan" value="LOGIN" class="btn btn-info"></input>
            </form>
            
        </div>
    </body>
</html>