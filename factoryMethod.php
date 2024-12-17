<?php

interface TaxiInterface {
  public function getCarModel(): string;
  public function getPrice(): int;
}

abstract class BaseTaxi {
  abstract public function createTaxi(): TaxiInterface;
}

class EconomTaxi implements TaxiInterface {
  public function getCarModel(): string {
    return "Econom Car Model";
  }

  public function getPrice(): int {
    return 30;
  }
}

class StandardTaxi implements TaxiInterface {
  public function getCarModel(): string {
    return "Standard Car Model";
  }

  public function getPrice(): int {
    return 50;
  }
}

class LuxuryTaxi implements TaxiInterface {
  public function getCarModel(): string {
    return "Luxury Car Model";
  }

  public function getPrice(): int {
    return 80;
  }
}

class EconomTaxiFactory extends BaseTaxi {
  public function createTaxi(): TaxiInterface {
    return new EconomTaxi();
  }
}

class StandardTaxiFactory extends BaseTaxi {
  public function createTaxi(): TaxiInterface {
    return new StandardTaxi();
  }
}
class LuxuryTaxiFactory extends BaseTaxi {
  public function createTaxi(): TaxiInterface {
    return new LuxuryTaxi();
  }
}

$economFactory = new EconomTaxiFactory();
$economTaxi = $economFactory->createTaxi();
echo $economTaxi->getCarModel() . "\n"; 
echo $economTaxi->getPrice() . "\n";   

$standardFactory = new StandardTaxiFactory();
$standardTaxi = $standardFactory->createTaxi();
echo $standardTaxi->getCarModel() . "\n"; 
echo $standardTaxi->getPrice() . "\n"; 

$luxuryFactory = new LuxuryTaxiFactory();
$luxuryTaxi = $luxuryFactory->createTaxi();
echo $luxuryTaxi->getCarModel() . "\n"; 
echo $luxuryTaxi->getPrice() . "\n"; 

?>
