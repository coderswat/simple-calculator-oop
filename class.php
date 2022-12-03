<?php
// © coderswat
class Calc {
  private $format;
  private $num1;
  private $num2;
  
  public function __construct(string $type,int $first,int $second){
    $this->format = $type;
    $this->num1 = $first;
    $this->num2 = $second;
  }
    public function calculation(){
    switch ($this->format) {
      case 'add':
        return $this->num1 + $this->num2;
        break;
      case 'sub':
        return $this->num1 - $this->num2;
        break;
      case 'mul':
        return $this->num1 * $this->num2;
        break;
      case 'dive':
        return $this->num1 / $this->num2;
        break;
      default:
        echo "Error";
        break;
    }  
    
   // made by @coderswat | visit coderswat.co
    
  }
  
}
?>