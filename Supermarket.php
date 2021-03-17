<?php

    namespace supermarket\Supermarket;

    use supermarket\Product\Product;

    class Supermarket
    {
        private int $fashionableWheels;
        private int $storageTemp;
        private array $products = array();

        public function __construct(int $fashionableWheels, int $storageTemp)
        {
            $this->storageTemp = $storageTemp;
            $this->fashionableWheels = $fashionableWheels;
        }


        public function getReport()
        {
            $products = $this->getProducts();
            foreach ($products as $product) {
                echo $product->isSellable() ? $product->getBrandName().' is sellable'.'<br/>' : $product->getBrandName(
                    ).' is not sellable'.'<br/>';
            }
        }

        /**
         * @return array
         */
        public function getProducts(): array
        {
            return $this->products;
        }

        public function removeNonSallableProducts()
        {
            $products = $this->getProducts();
            foreach ($products as $product) {
                if ($product->getCategory() !== 'Truck' & $product->isSellable() === false) {
                    $this->deleteProduct($product);
                }
            }
        }

        public function deleteProduct($product): void
        {
            $key = array_search($product, $this->products);
            if ($key !== false) {
                unset($this->products[$key]);
            }
        }

        public function checkIfProductsAreSellable()
        {
            $products = $this->getProducts();
            foreach ($products as $product) {
                $product->checkIfSellable();
            }
        }

        /**
         * @param $product
         */
        public function addProduct($product): void
        {
            $this->products[] = $product;
        }

        /**
         * @return int
         */
        public function getFashionableWheels(): int
        {
            return $this->fashionableWheels;
        }

        /**
         * @param int $fashionableWheels
         */
        public function setFashionableWheels(int $fashionableWheels): void
        {
            $this->fashionableWheels = $fashionableWheels;
        }

        /**
         * @return int
         */
        public function getStorageTemp(): int
        {
            return $this->storageTemp;
        }

        /**
         * @param int $storageTemp
         */
        public function setStorageTemp(int $storageTemp): void
        {
            $this->storageTemp = $storageTemp;
        }

        public function displayProducts()
        {
            $products = $this->getProducts();

            echo '<br/>'.'After clean up the available products are : '.'<br/>';
            foreach ($products as $product) {
                echo $product->getBrandName().'<br/>';
            }
        }


    }
