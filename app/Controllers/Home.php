<?php

namespace App\Controllers;
use App\Models\Admin_model;


class Home extends BaseController
{
    public function index(): string
        {
            return view('home');
        }

    public function Header()
        {
            return view('header');
        }

    public function Footer()
        {
            return view('footer');
        }
    
    public function AddCart()
        {
            return view('addtocart');
        }
        public function Category()
        {
            return view('category');
        }
    public function admindashboard() 
    {
        return view('Admin/admindashboard');
    }
    // public function get_menu_list() 
    // {
    //     return view('Admin/menu_list');
    // }
    public function get_menu_list() 
    {
        $model = new Admin_model();

        $uri = service('uri');
        $menu_id = $uri->getSegment(2);   // Assuming the ID is the second segment

        if(!empty($menu_id)){

            $wherecond1 = array('is_deleted' => 'N', 'id' => $menu_id);

            $data['single_data'] = $model->get_single_data('tbl_menu', $wherecond1);


        }else{
            $wherecond = array('is_deleted' => 'N');
            $data['menu_data'] = $model->getalldata('tbl_menu', $wherecond);
        }
        return view('Admin/menu_list',$data);


    }
    public function setmenu()
    {
        $menu_name = $this->request->getVar('menu_name');
        $url_location = $this->request->getVar('url_location');
        $data = [
            'menu_name' => $menu_name,
            'url_location' => $url_location,
            'created_on' => date('Y:m:d H:i:s'),
        ];
        $db = \Config\Database::connect();
        $menuTable = $db->table('tbl_menu');
        $existingMenu = $menuTable
            ->where('menu_name', $menu_name)
            ->where('url_location', $url_location)
            ->get()
            ->getFirstRow();
        if ($existingMenu && ($this->request->getVar('id') == "" || $existingMenu->id != $this->request->getVar('id'))) {
            session()->setFlashdata('error', 'Menu name and URL location combination already exists.');
            return redirect()->to('menulist'); 
        }

        if ($this->request->getVar('id') == "") {
            $menuTable->insert($data);
            session()->setFlashdata('success', 'Menu added successfully.');
        } else {
            $menuTable->where('id', $this->request->getVar('id'))->update($data);
            session()->setFlashdata('success', 'Menu updated successfully.');
        }

        return redirect()->to('menulist');
    }
    public function setproduct()
    {
        $productname = $this->request->getVar('productname');
        $brand_name = $this->request->getVar('brand_name');
        $price = $this->request->getVar('price');
        $description = $this->request->getVar('description');
        $ingredients = $this->request->getVar('Ingredients');
        $howtouse = $this->request->getVar('howtouse');
        
        $data = [
            'productname' => $productname,
            'brand_name' => $brand_name,
            'price' => $price,
            'description' => $description,
            'ingredients' => $ingredients,
            'howtouse' => $howtouse,
            // 'created_on' => date('Y:m:d H:i:s'),
        ];
    
        $db = \Config\Database::connect();
        $productTable = $db->table('tbl_product');
    
        if ($this->request->getFile('product_image1')->isValid()) {
            $image1 = $this->request->getFile('product_image1');
            $image1Name = $image1->getRandomName();
            $image1->move(ROOTPATH . 'public/localbrand/images', $image1Name);
            $data['product_image1'] = $image1Name;
        }
        
        if ($this->request->getFile('product_image2')->isValid()) {
            $image2 = $this->request->getFile('product_image2');
            $image2Name = $image2->getRandomName();
            $image2->move(ROOTPATH . 'public/localbrand/images', $image2Name);
            $data['product_image2'] = $image2Name;
        }
    
        if ($this->request->getFile('product_image3')->isValid()) {
            $image3 = $this->request->getFile('product_image3');
            $image3Name = $image3->getRandomName();
            $image3->move(ROOTPATH . 'public/localbrand/images', $image3Name);
            $data['product_image3'] = $image3Name;
        }
    
        if ($this->request->getFile('product_image4')->isValid()) {
            $image4 = $this->request->getFile('product_image4');
            $image4Name = $image4->getRandomName();
            $image4->move(ROOTPATH . 'public/localbrand/images', $image4Name);
            $data['product_image4'] = $image4Name;
        }
    
        $existingProduct = $productTable
            ->where('productname', $productname)
            ->where('brand_name', $brand_name)
            ->get()
            ->getFirstRow();
        
        if ($existingProduct && ($this->request->getVar('id') == "" || $existingProduct->id != $this->request->getVar('id'))) {
            session()->setFlashdata('error', 'Product name and brand combination already exists.');
            return redirect()->to('productlist'); 
        }
    
        if ($this->request->getVar('id') == "") {
            $productTable->insert($data);
            session()->setFlashdata('success', 'Product added successfully.');
        } else {
            $productTable->where('id', $this->request->getVar('id'))->update($data);
            session()->setFlashdata('success', 'Product updated successfully.');
        }
    
        return redirect()->to('addproduct');
    }
    
    public function delete()
    {
        $uri = service('uri');
        $id = $uri->getSegment(2);   // Assuming the ID is the second segment
        $table = $uri->getSegment(3); // Assuming the table name is the third segment
        
       
        $data = ['is_deleted' => 'Y'];
        $db = \Config\Database::connect();

        $update_data = $db->table($table)->where('id', $id);
        $update_data->update($data);
        session()->setFlashdata('success', 'Data deleted successfully.');
        return redirect()->back();

        // Redirect or return a response as needed
    }

    public function addproduct()
    {
        $model = new Admin_model();

        $uri = service('uri');
        $menu_id = $uri->getSegment(2);   // Assuming the ID is the second segment

        if(!empty($menu_id)){

            $wherecond1 = array('is_deleted' => 'N', 'id' => $menu_id);

            $data['single_data'] = $model->get_single_data('tbl_product', $wherecond1);


        }else{
            $wherecond = array('is_deleted' => 'N');
            $data['menu_data'] = $model->getalldata('tbl_product', $wherecond);
        }
        return view('Admin/addproduct',$data);

    }
}