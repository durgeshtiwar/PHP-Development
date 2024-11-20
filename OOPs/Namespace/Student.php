<?php
namespace Student{
  class Details{
    function admissionDates()
    {
      echo"This is student's admission Date";
      return $this;
    }
    function passoutDates()
    {
      echo" and This is student's passout Date";
    }
  }
}