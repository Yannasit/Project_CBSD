<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model{
    protected $table = 'group_project';
    protected $primaryKey = 'group_id';
    protected $allowedFields = ['group_id','group_name', 'group_pic'];
}