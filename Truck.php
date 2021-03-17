<?php
namespace supermarket\Product\Truck;
require_once('Product.php');
use supermarket\Product\Product;

class Truck extends Product {
     private int $wheelsNumber;
     private bool $isFashionable = true;

     public function __construct(string $brandName, int $wheelsNumber, string $category)
     {
         parent::__construct($brandName, $category);
         $this->wheelsNumber = $wheelsNumber;
     }

    public function checkIfSellable() {
        if($this->isFashionable() !== true) {
            $this->setIsSellable(false);
        }
    }

    public function checkIfFashionable(int $wheels) {
         if($this->getWheelsNumber() !== $wheels){
             $this->setIsFashionable(false);
         }
    }

    /**
     * @return bool
     */
    public function isFashionable(): bool
    {
        return $this->isFashionable;
    }

    /**
     * @param bool $isFashionable
     */
    public function setIsFashionable(bool $isFashionable): void
    {
        $this->isFashionable = $isFashionable;
    }



     /**
      * @return int
      */
     public function getWheelsNumber(): int
     {
         return $this->wheelsNumber;
     }

     /**
      * @param int $wheelsNumber
      */
     public function setWheelsNumber(int $wheelsNumber): void
     {
         $this->wheelsNumber = $wheelsNumber;
     }


}