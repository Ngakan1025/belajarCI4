<?php

namespace App\Models;

use CodeIgniter\Model;

class TurnamenModel extends Model
{
    protected $table = 'turnamen';
    protected $useTimestamps = true;
    protected $allowedFields = ['team', 'slug', 'menang', 'kalah', 'poin'];

    public function getTurnamen($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getTotal()
    {
        return $this->db->table('turnamen')->countAll();
    }

    //erorr cokkk
    //    public function select_max()
    //     {
    //         $builder = $this->db->table('turnamen');
    //         $builder->selectMax('poin');
    //         $query = $builder->get();
    //         return $query;
    //     }

    //     public function select_min()
    //     {
    //         $builder = $this->db->table('turnamen');
    //         $builder->selectMin('poin');
    //         $query = $builder->get();
    //         return $query;
    //     }

    //     public function select_avg()
    //     {
    //         $builder = $this->db->table('turnamen');
    //         $builder->selectAvg('poin');
    //         $query = $builder->get();
    //         return $query;
    //     }

    //     public function select_sum()
    //     {
    //         $builder = $this->db->table('turnamen');
    //         $builder->selectSum('poin');
    //         $query = $builder->get();
    //         return $query;
    //     } 
}