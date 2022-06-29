<?php




defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('My_Models');
        $this->load->helper('form');
    }

    public function index()
    {
    $this->load->view('halaman_login');
    }
    
    public function do_login()
    {
        $user = $this->input->post('uname');
        $pasw = $this->input->post('password');

        $login = $this->My_Models->Cek_login($user, $pasw);
        
        if (count($login) > 0) {
            redirect('Login/admin');
            $this->session->set_userdata(array(
                'user' => $user
            ));
            
            
        } else{
            $this->session->set_flashdata('login', 'gagal login');
            redirect('login/index');
        }
    }
    public function admin()
    {
        $data ['user'] = $this->session->userdata('user');
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('template/footer');
        $this->load->view('admin/admin', $data);
        
    }
    public function buku()
    {
        $data['buku'] = $this->My_Models->Ambil_Buku();
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('template/footer');
        $this->load->view('admin/buku', $data);
        
    }
    public function anggota()
    {
        $data['anggota'] = $this->My_Models->Ambil_anggota();
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('template/footer');
        $this->load->view('admin/anggota', $data);
        
    }
    public function peminjaman()
    {
        $data['pinjam'] = $this->My_Models->get_data();
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('template/footer');
        $this->load->view('admin/peminjaman', $data);
        
    }
    public function setting()
    {
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('template/footer');
        $this->load->view('admin/setting');
    
    }
    public function do_setting()
    {
        $psw = $this->input->post('psw');
        $psw2 = $this->input->post('psw2');

        if ($psw == $psw2) {
            $this->My_Models->edit_setting();
            $this->session->set_flashdata('ubah', 'berhasil diubah');
            redirect('login/setting');
        }else{
            $this->session->set_flashdata('gagal', 'gagal diubah');
            redirect('login/setting');
        }
    }
    public function tambah_buku()
    {
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('template/footer');
        $this->load->view('admin/tambah_buku');
    }
    public function do_tambah()
    {   
        $gambar = $_FILES['foto']['name'];
        if ($gambar == "") {
            echo "Tidak Ada Gambar";
        }else{
            $config['allowed_types'] = "img|png|jpg|gif";
            $config['upload_path'] = "asset/foto";
            $this->load->library('upload',$config);

            if (!$this->upload->do_upload('foto')) {
                echo 'gagal';
            }else{
                $this->My_Models->do_tambah();
                $this->session->set_flashdata('tambah', 'Data Berhasil Ditambah');
                redirect('login/buku');
            }
        }
    }
    public function edit($id)
    {
        $data['buku'] = $this->My_Models->show_buku($id);
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('template/footer');
        $this->load->view('admin/edit_buku', $data);
    }
    public function do_edit()
    {
        $gambar = $_FILES['foto']['name'];
        if ($gambar == "") {
            $this->My_Models->do_edit1();
            $this->session->set_flashdata('tambah', 'Data Berhasil Diupdate');
            redirect('login/buku');
        }else{
            $config['allowed_types'] = "img|png|jpg|gif";
            $config['upload_path'] = "asset/foto";
            $this->load->library('upload',$config);

            if (!$this->upload->do_upload('foto')) {
                echo 'gagal';
            }else{
                $this->My_Models->do_edit2();
                $this->session->set_flashdata('tambah', 'Data Berhasil Diupdate');
                redirect('login/buku');
            }
        }
    }
    public function lihatData($id)
    {
        $data['buku'] = $this->My_Models->lihat_data($id);
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('template/footer');
        $this->load->view('admin/lihat_buku', $data);
    }
    public function hapus_buku($id)
    {
        $this->My_Models->delete_buku($id);
        $this->session->set_flashdata('tambah', 'Buku Berhasil Dihapus');
        redirect('login/buku');
    }
    public function tambah_anggota()
    {
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('template/footer');
        $this->load->view('admin/tambah_anggota');
    }
    public function do_anggota()
    {
        $gambar = $_FILES['foto']['name'];
        if ($gambar == "") {
            echo "Tidak Ada Gambar";
        }else{
            $config['allowed_types'] = "img|png|jpg|gif";
            $config['upload_path'] = "asset/foto";
            $this->load->library('upload',$config);

            if (!$this->upload->do_upload('foto')) {
                echo 'gagal';
            }else{
                $this->My_Models->tambah_anggota();
                $this->session->set_flashdata('tambah', 'Data Berhasil Ditambah');
                redirect('login/anggota');
            }
        }
    }
    public function lihat_anggota($id)
    {
        $data['buku'] = $this->My_Models->Lihat_Anggota($id);
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('template/footer');
        $this->load->view('admin/lihat_anggota', $data);
    }
    public function edit_anggota($id)
    {
        $data['buku'] = $this->My_Models->Lihat_Anggota($id);
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('template/footer');
        $this->load->view('admin/edit_anggota', $data);
    }
    public function do_edit_anggota()
    {
        $gambar = $_FILES['foto']['name'];
        if ($gambar == "") {
            $this->My_Models->edit_anggota();
            $this->session->set_flashdata('tambah', 'Data Berhasil Diupdate');
            redirect('login/anggota');
        }else{
            $config['allowed_types'] = "img|png|jpg|gif";
            $config['upload_path'] = "asset/foto";
            $this->load->library('upload',$config);

            if (!$this->upload->do_upload('foto')) {
                echo 'gagal';
            }else{
                $this->My_Models->edit_anggota2();
                $this->session->set_flashdata('tambah', 'Data Berhasil Diupdate');
                redirect('login/anggota');
            }
            
        }
    }
    public function hapus_anggota($id)
    {
        $this->My_Models->delete_anggota($id);
        $this->session->set_flashdata('tambah', 'Anggota Berhasil Dihapus');
        redirect('login/anggota');          
    }
    public function tambah_peminjaman()
    {
        $data['buku'] = $this->My_Models->Ambil_Buku();
        $data['anggota'] = $this->My_Models->Ambil_anggota();
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('template/footer');
        $this->load->view('admin/tambah_pinjam', $data);
    }
    public function do_peminjaman()
    {
        $this->My_Models->tambah_peminjaman();
        $this->session->set_flashdata('tambah', 'Buku Berhasil Dipinjam');
        redirect('login/peminjaman');   
    }
    public function edit_pinjam($id)
    {
        $data['pinjam'] = $this->My_Models->get_pinjam($id);
        $data['buku'] = $this->My_Models->Ambil_Buku();
        $data['anggota'] = $this->My_Models->Ambil_anggota();
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('template/footer');
        $this->load->view('admin/edit_pinjam', $data);
    }
    public function do_editpeminjaman()
    {
        $this->My_Models->do_edit_pinjam();
        $this->session->set_flashdata('tambah', 'Buku Berhasil Dikembalikan');
        redirect('login/peminjaman');
    }
    public function hapus_pinjam($id)
    {
        $this->My_Models->hapus_pinjam($id);
        $this->session->set_flashdata('tambah', 'Buku Berhasil Dikembalikan');
        redirect('login/peminjaman');
    }
    public function logout()
    {
        $this->session->unset_userdata('user');
        redirect('login/index');
    }
}
?>