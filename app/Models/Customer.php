<?php 

namespace App\Models;

use CodeIgniter\Model;

class Customer extends Model {
    protected $table = 'customer';
    protected $primaryKey = 'Cus_ID';
    protected $allowedFields = ['Cus_ID', 'F_Name', 'L_Name', 'Email', 'Pass', 'Phone', 'Pic'];
}