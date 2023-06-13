<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'user_msg';
    protected $useTimestamps = true;
    protected $allowedFields = ['email', 'username', 'messages'];
}