<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_model');
        // $this->load->library('Form_validation');
    }
    public function index()
    {
        $data["base"] = $this->M_model->get_data();
        return $this->load->view('data', $data);
    }
    public function tambah()
    {
        $nama = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');
        $password =  $this->input->post('password');
        $password =  password_hash($password, PASSWORD_BCRYPT);
        $data = array('id' => NULL, 'nama' => $nama, 'jurusan' => $jurusan, 'password' => $password);
        $this->M_model->input_data($data, 'tb_server');
        redirect('pages/index');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->M_model->hapus_data($where, 'tb_server');
        redirect('pages/index');
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data["tabel"] = $this->M_model->edit_data($where, 'tb_server')->result();
        $this->load->view('Update', $data);
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');
        $password = $this->input->post('password');
        $password = password_hash($password, PASSWORD_BCRYPT);

        $data = array('nama' => $nama, 'jurusan' => $jurusan, 'password' => $password);
        $where = array('id' => $id);
        $this->M_model->update_data($where, $data, 'tb_server');
        redirect('pages/index');
    }
}
