<?php


class My_Models extends CI_Model
{
    public function Cek_login($user, $pasw)
    {
        return $this->db->get_where('admin', array(
            'user' => $user,
            'password' => $pasw
        ))->result_array();
    }
    public function Ambil_Buku()
    {
        return $this->db->get('buku')->result_array();
    }
    public function do_tambah()
    {
        $data = [
            "judul" => $this->input->post("judul"),
            "pengarang" => $this->input->post("pengarang"),
            "isbn" => $this->input->post("isbn"),
            "penerbit" => $this->input->post("penerbit"),
            "foto" => $this->upload->data("file_name"),
        ];
       return $this->db->insert('buku',$data);
    }
    public function show_buku($id)
    {
        return $this->db->get_where('buku', array(
            "id_buku" => $id
        ))->row_array();
    }
    public function do_edit1()
    {
        $data = [
            "judul" => $this->input->post("judul"),
            "pengarang" => $this->input->post("pengarang"),
            "isbn" => $this->input->post("isbn"),
            "penerbit" => $this->input->post("penerbit")
            
        ];
        $this->db->where('id_buku', $this->input->post('id'));
        $this->db->update('buku', $data);
    }
    public function do_edit2()
    {
        $data = [
            "judul" => $this->input->post("judul"),
            "pengarang" => $this->input->post("pengarang"),
            "isbn" => $this->input->post("isbn"),
            "penerbit" => $this->input->post("penerbit"),
            "foto" => $this->upload->data("file_name")
            
        ];
        $this->db->where('id_buku', $this->input->post('id'));
        $this->db->update('buku', $data);
    }
    public function lihat_data($id)
    {
        return $this->db->get_where('buku', array(
            'id_buku' => $id
        ))->row_array();
    }
    public function delete_buku($id)
    {
        $this->db->where('id_buku', $id);
        return $this->db->delete('buku');
    }
    public function Ambil_anggota()
    {
        return $this->db->get('anggota')->result_array();
    }
    public function tambah_anggota()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "kelas" => $this->input->post('kelas'),
            "alamat" => $this->input->post('alamat'),
            "email" => $this->input->post('email'),
            "foto" => $this->upload->data('file_name'),
        ];
        $this->db->insert('anggota', $data);
    }
    public function Lihat_Anggota($id)
    {
         $this->db->where('id_anggota', $id);
         return $this->db->get('anggota')->row_array();
    }
    public function edit_anggota()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "kelas" => $this->input->post('kelas'),
            "alamat" => $this->input->post('alamat'),
            "email" => $this->input->post('email')
           
        ];
        $this->db->where('id_anggota', $this->input->post('id'));
        $this->db->update('anggota', $data);
    }
    public function edit_anggota2()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "kelas" => $this->input->post('kelas'),
            "alamat" => $this->input->post('alamat'),
            "email" => $this->input->post('email'),
            "foto" => $this->upload->data('file_name')
           
        ];
        $this->db->where('id_anggota', $this->input->post('id'));
        $this->db->update('anggota', $data);
    }
    public function delete_anggota($id)
    {
        $this->db->where('id_anggota', $id);
        return $this->db->delete('anggota');
    }
    public function tambah_peminjaman()
    {
        $data = [
            "id_anggota" => $this->input->post('anggota'),
            "id_buku" => $this->input->post('buku'),
            "tanggal_pinjam" => date('Y-m-d'),
            "tanggal_kembali" => $this->input->post('tanggal')
          
        ];
        $this->db->insert('peminjaman', $data);
    }
    public function get_data()
    {
        $this->db->select("*");
        $this->db->from('peminjaman');
        $this->db->join('anggota','anggota.id_anggota=peminjaman.id_anggota');
        $this->db->join('buku', 'buku.id_buku=peminjaman.id_buku');
        return $this->db->get()->result_array();
    }
    public function get_pinjam($id)
    {
        $this->db->select("*");
        $this->db->from('peminjaman');
        $this->db->join('anggota','anggota.id_anggota=peminjaman.id_anggota');
        $this->db->join('buku', 'buku.id_buku=peminjaman.id_buku');
        $this->db->where('id_peminjaman', $id);
        return $this->db->get()->row_array();
    }

    public function do_edit_pinjam()
    {
        $data = [
            "id_anggota" => $this->input->post('anggota'),
            "id_buku" => $this->input->post('buku'),
            "tanggal_kembali" => $this->input->post('tanggal')
          
        ];
        $this->db->where('id_peminjaman', $this->input->post('id'));
        $this->db->update('peminjaman', $data);
    }
   public function hapus_pinjam($id)
   {
    $this->db->where('id_peminjaman', $id);
    return $this->db->delete('peminjaman');
   }
   public function edit_setting()
   {
       $data = [
           'password' => $this->input->post('psw')
       ];
       $this->db->where('user', $this->session->userdata('password'));
       $this->db->update('admin', $data);
   }
}