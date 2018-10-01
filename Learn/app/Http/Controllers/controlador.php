<?php
/**
 * Created by PhpStorm.
 * User: Gomez
 * Date: 9/7/2018
 * Time: 3:03 PM
 */

namespace Laravel_Learn\Http\Controllers;
 
use Laravel_Learn\Http\Controllers\Controller;
class controlador extends Controller{
    public function teste($param){
        return "Estou no controller ".$param;
    }
}