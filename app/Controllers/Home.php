<?php

namespace App\Controllers;

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
    
}