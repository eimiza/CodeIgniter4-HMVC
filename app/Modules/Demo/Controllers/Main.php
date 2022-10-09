<?php
namespace App\Modules\Demo\Controllers;
use App\Controllers\BaseController;


class Main extends BaseController
{
    public function __construct(){

    }

    public function index(){
        echo 'Showing index from demo Module';
    }
}
