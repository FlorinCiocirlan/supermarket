<?php
    namespace supermarket\Product\Shovel;
    require_once('Product.php');
    use supermarket\Product\Product;

    class Shovel extends Product{
        private string $size;
        private string $material;
        private bool $isStolen = false;

        public function __construct(string $brandName, string $size, string $material, string $category){
            parent::__construct($brandName, $category);
            $this->size = $size;
            $this->material = $material;
        }

        public function checkIfStolen(): void{
            $shovelSize = $this->getSize();
            $shovelMaterial = $this->getMaterial();
            if($shovelSize === 'Small' && $shovelMaterial === 'Chocolate'){
                $this->isStolen = true;
            }
        }

        public function checkIfSellable() {
            if($this->isStolen() === true) {
                $this->setIsSellable(false);
            }
        }

        /**
         * @return bool
         */
        public function isStolen(): bool
        {
            return $this->isStolen;
        }

        /**
         * @param bool $isStolen
         */
        public function setIsStolen(bool $isStolen): void
        {
            $this->isStolen = $isStolen;
        }

        /**
         * @return string
         */
        public function getSize(): string
        {
            return $this->size;
        }

        /**
         * @param string $size
         */
        public function setSize(string $size): void
        {
            $this->size = $size;
        }

        /**
         * @return string
         */
        public function getMaterial(): string
        {
            return $this->material;
        }

        /**
         * @param string $material
         */
        public function setMaterial(string $material): void
        {
            $this->material = $material;
        }


    }

