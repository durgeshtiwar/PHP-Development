<!-- LateStaticBinding -->
<?php
// class LateStaticBinding{
//   static public $totalSale = 1000;
//   static function  totalSale()
//   {
//     echo static::$totalSale;
//   }
// }
// class child extends LateStaticBinding{
//   static public $totalSale = 150;
// }
// LateStaticBinding::totalSale();
// echo"<br>";
// child::totalSale();


//Abstract class
// abstract class ProductFeatures{
//   public $country = "India";
//   abstract function productName();
//   abstract function productDetails();
//   abstract function productOwner();
//   function common()
//   {
//     echo"This is the Common Function";
//   }
// }
// class child extends productFeatures{
//   function productName(){
//     echo"Product Name is Steel";
//   }
//   function productDetails(){
//     echo"This is the Details of Product";
//   }
//   function productOwner(){
//     echo"Owner name is Durgesh Tiwari";
//   }
//   function Other()
//   {
//     echo "This is Other Function with ".$this->country;
//   }
// }
// $obj = new child();
// $obj->productName();
// echo "<br/>";
// $obj->productDetails();
// echo "<br/>";
// $obj->productOwner();
// echo "<br/>";
// $obj->common();
// echo "<br/>";
// $obj->Other();

//Interface
interface ProductFeatures{
  //public $country = "India";
  function productName();
  function productDetails();
  function productOwner();
  // function common()
  // {
  //   echo"This is the Common Function";
  // }
}
class child implements productFeatures{
  function productName(){
    echo"Product Name is Steel";
  }
  function productDetails(){
    echo"This is the Details of Product";
  }
  function productOwner(){
    echo"Owner name is Durgesh Tiwari";
  }
  function Other()
  {
    echo "This is Other Function with ";
  }
}
$obj = new child();
$obj->productName();
echo "<br/>";
$obj->productDetails();
echo "<br/>";
$obj->productOwner();
echo "<br/>";
//$obj->common();
//echo "<br/>";
$obj->Other();
