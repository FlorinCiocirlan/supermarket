<?php

    namespace supermarket\Product\Milk;
    require_once('Product.php');
    use supermarket\Product\Product;

    class Milk extends Product {
        private bool $isSour = false;
        private int $tempLimit;

        public function __construct(string $brandName, int $tempLimit, string $category)
        {
            parent::__construct($brandName, $category);
            $this->tempLimit = $tempLimit;
        }

        public function checkIfIsSour(int $storageTemp): void{
            if($storageTemp > $this->getTempLimit()){
                $this->setIsSour(true);
            }
        }

        public function checkIfSellable() {
            if($this->isSour() === true) {
                $this->setIsSellable(false);
            }
        }

        /**
         * @return bool
         */
        public function isSour(): bool
        {
            return $this->isSour;
        }

        /**
         * @param bool $isSour
         */
        public function setIsSour(bool $isSour): void
        {
            $this->isSour = $isSour;
        }


        /**
         * @return int
         */
        public function getTempLimit(): int
        {
            return $this->tempLimit;
        }

        /**
         * @param int $tempLimit
         */
        public function setTempLimit(int $tempLimit): void
        {
            $this->tempLimit = $tempLimit;
        }


    }