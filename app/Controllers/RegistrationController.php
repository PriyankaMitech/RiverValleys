<?php

namespace App\Controllers;

use App\Models\RegistrationModel;
use CodeIgniter\Controller;
use Twilio\Rest\Client;

class RegistrationController extends Controller
{
  
    public function sendotp()
    {
        $request = $this->request->getPost();
    
        // Check if mobile number is provided
        if (!isset($request['mobile_no'])) {
            return $this->response->setJSON(['success' => false, 'message' => 'Mobile number not provided']);
        }
    
        // Validate the mobile number (you might want to add more validation here)
        $mobile_no = $request['mobile_no'];
        if (!preg_match('/^\d{10}$/', $mobile_no)) {
            return $this->response->setJSON(['success' => false, 'message' => 'Invalid mobile number format']);
        }
    
        // Load the model
        $userModel = new RegistrationModel();
    
        // Check if the mobile number exists in the database
        $user = $userModel->where('mobile_no', $mobile_no)->first();
    
        // Generate OTP
        $otp = rand(1000, 9999);
    
        if (!$user) {
            // Data to insert
            $data = [
                'mobile_no' => $mobile_no,
                'Login_otp' => $otp,
            ];
    
            // Insert the new user
            $userModel->insert($data);
        } else {
            // Data to update
            $data = [
                'Login_otp' => $otp,
            ];
    
            $userModel->update($user['id'], $data);
        }
    
        // Respond with success message and OTP (for debugging)
        return $this->response->setJSON(['success' => true, 'message' => 'OTP sent successfully', 'otp' => $otp]);
    }
    public function register()
    {
        $request = $this->request->getPost();
        $mobile_no = $request['mobile_no'];
        $login_otp = $request['Login_otp'];
    
        // Load the model
        $userModel = new RegistrationModel();
    
        // Fetch the user by mobile number
        $user = $userModel->where('mobile_no', $mobile_no)->first();
    
        if ($user && $user['Login_otp'] == $login_otp) {
            // OTP matched, proceed with registration
            // You can add more logic here to complete the registration process
    
            return $this->response->setJSON(['success' => true, 'message' => 'OTP verification completed']);
        } else {
            // OTP did not match
            return $this->response->setJSON(['success' => false, 'message' => 'Invalid OTP']);
        }
    }
    
}
