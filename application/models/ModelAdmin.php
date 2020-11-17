<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ModelAdmin extends CI_Model {
    public function login($username, $password){
        
        $where = array(
            'username_user' => $username,
            'password_user' => $password
        );
        $query = $this->db->get_where('user', $where);

        if($query->num_rows() > 0){//Kalau Ada Datanya
            foreach($query->result() as $dataUser){
                $sess = array(//Variabel Untuk Membuat Session
                    'active' => 'active',
                    'id_user' => $dataUser->id_user,
                    'username_user' => $dataUser->username_user,
                    'nama_lengkap_user' => $dataUser->nama_lengkap_user,
                );
            }
            $this->session->set_userdata($sess);
            redirect('admin/dashboard');
        }else{//Kalau Tidak Ada DATANYA (Pass dan User Invalid)
            $alertDanger = '
                <div class="alert alert-danger alert-dismissible fade show" style="background-color:#c90831;color:white;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>  
                    <strong>Gagal Login!</strong> Silahkan Cek Username dan Password Anda.
                </div>
            ';
            $this->session->set_flashdata('info', $alertDanger);
            redirect('admin/login');
        }

    }
}
