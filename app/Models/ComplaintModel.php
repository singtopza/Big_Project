<?php 

namespace App\Models;

use CodeIgniter\Model;

class ComplaintModel extends Model {
    protected $table = 'complaint';
    protected $primaryKey = 'Com_ID ';
    protected $allowedFields = ['Com_ID ', 'Com_Type_ID', 'Com_Topic', 'Com_Content'];
}