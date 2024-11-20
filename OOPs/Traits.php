<?php
trait ParentCompany_1{
  function name_1()
  {
    echo "This is First Company";
  }
}
trait ParentCompany_2{
  function name_2()
  {
    echo"This is Second Company";
  }
}
class child{
  use ParentCompany_1;
  use ParentCompany_2;
}
$obj = new child();
$obj->name_1();
echo"<br/>";
$obj->name_2();