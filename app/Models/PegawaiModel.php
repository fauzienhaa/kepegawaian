<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table      = 'pegawai';
    protected $primaryKey = 'username';

    /*
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['name', 'email'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    */

    public function savePgw($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function getPgw($username = "")
    {
        if($username == ""){
            return $this->findAll();
        } else {
            return $this->where(['username' => $username])->first();
        }
    }

    public function gaji() {
        $this->db->select('
        pegawai.*, gaji.username AS username_role, gaji.gaji,
        ');
        $this->db->join('gaji', 'pegawai.username_role = gaji.username');
        $this->db->from('pegawai');
        $query = $this->db->get();
        return $query->result();
    }
}