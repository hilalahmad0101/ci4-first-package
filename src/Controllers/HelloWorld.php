<?php 

namespace HelloWorldPackage\Controllers;

use CodeIgniter\Controller;

class HelloWorld extends Controller
{
    public function index()
    {
        return view('HelloWorldPackage\Views\hello_world');
    }
}
