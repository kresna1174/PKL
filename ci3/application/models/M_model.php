<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_model extends CI_Model
{
    function get_data()
    {
        return $this->db->get('tb_server')->result();
    }
    public $id;
    public $nama;
    public $jurusan;
    public $password;
    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],
            [
                'field' => 'jurusan',
                'label' => 'jurusan',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ]
        ];
    }
    public function input_data($data)
    {
        $this->db->insert('tb_server', $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_data($id, $table)
    {
        return $this->db->get_where($table, $id);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }
}
