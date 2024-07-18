<?php

namespace App\Controllers;

use App\Models\RegistrationModel;
use CodeIgniter\Controller;

class RegistrationController extends Controller
{
    public function register()
    {
        helper(['form', 'url']);
        $model = new RegistrationModel();

        // print_r($_POST);die;
     
            
                $data = [
                    'mobile_no' => $this->request->getPost('mobile_no'),
                    'Login_otp' => $this->request->getPost('Login_otp'),
                    
                ];

                $model->insert($data);
                return redirect()->to('/'); // redirect to a success page or another action
            } 
            // return redirect()->to('/success');
        }
    
        
    