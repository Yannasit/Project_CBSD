<?php

namespace App\Models;

use CodeIgniter\Model;

class NameModel extends Model{
    protected $table = 'km_unit';
    protected $primaryKey = 'km_id';
    protected $allowedFields = ['km_id', 'km_name', 'km_pic', 'km_group'];
}