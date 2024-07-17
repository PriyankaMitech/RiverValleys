<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrationModel extends Model
{
    protected $table = 'register'; // Replace 'your_table_name' with the actual table name
    protected $primaryKey = 'id';

    protected $allowedFields = ['mobile_no', 'Login_otp'];

  
}
