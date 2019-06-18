<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index() {
      echo \ConfigCat::getValue('teststring');
    }
}
