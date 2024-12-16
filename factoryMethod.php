<?php

class BaseTaxi {
  public function getCarModel() {}

  public function getPrice() {}
}

class EconomTaxi extends BaseTaxi {
  public function getCarModel() {
    return "Econom Car Model";
  }

  public function getPrice() {
    return 30;
  }
}

class StandardTaxi extends BaseTaxi {
  public function getCarModel() {
    return "Standard Car Model";
  }

  public function getPrice() {
    return 50;
  }
}

class LuxuryTaxi extends BaseTaxi {
  public function getCarModel() {
    return "Luxury Car Model";
  }

  public function getPrice() {
    return 80;
  }
}

$myEconomTaxi = new EconomTaxi();
echo $myEconomTaxi->getCarModel();  
echo $myEconomTaxi->getPrice();  

$myStandardTaxi = new StandardTaxi();
echo $myStandardTaxi->getCarModel(); 
echo $myStandardTaxi->getPrice();   

$myLuxuryTaxi = new LuxuryTaxi();
echo $myLuxuryTaxi->getCarModel();  
echo $myLuxuryTaxi->getPrice();    

?>
