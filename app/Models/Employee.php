<?php 

namespace App\Models;

use CodeIgniter\Model;

class Employee extends Model {
    protected $table = 'employee';
    protected $primaryKey = 'Emp_ID';
    protected $allowedFields = ['Emp_ID', 'F_Name', 'L_Name', 'Email', 'Pass', 'Phone', 'Pic', 'Pos_ID'];
}