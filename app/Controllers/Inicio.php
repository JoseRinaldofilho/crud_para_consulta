<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Inicio extends Controller{

    public function index()
    {
        echo view('templates/header');
        echo view('Inicio/index');
        echo view('templates/footer');
    }

}