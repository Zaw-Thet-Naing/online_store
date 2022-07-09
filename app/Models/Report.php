<?php 
namespace App\Models;
use App\Models\Order;
use App\Traits\Balancing;
use App\Interfaces\B;

class Report implements B{
    use Balancing;
    
    public function __construct(){
        dd("This is constructor.");
    }
    const CONSTANT = "constant value";
    public static $my_static = "static var";

    public static function balanceQty(){
        return "Balance quantity";
    }

    public function reduceQty(){
        return $this->comfirmOrder();
    }

    public function callA(){

    }
}
?>