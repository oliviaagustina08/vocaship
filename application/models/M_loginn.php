<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_loginn extends CI_Model
{
    function cek_loginn($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
