<?php

    namespace supermarket\Product;

    abstract class Product
    {
        private string $brandName;
        private string $uniqueCode;
        private bool $isSellable = true;
        private string $category;

        protected function __construct(string $brandName, string $category)
        {
            $this->brandName = $brandName;
            $this->category = $category;
            $this->uniqueCode = $this->generateUniqueCode();
        }

        /**
         * @return string
         */
        public function getCategory(): string
        {
            return $this->category;
        }

        /**
         * @param string $category
         */
        public function setCategory(string $category): void
        {
            $this->category = $category;
        }



        private function generateUniqueCode()
        {
            $bytes = random_bytes(20);
            return bin2hex($bytes);
        }

        /**
         * @return bool
         */
        public function isSellable(): bool
        {
            return $this->isSellable;
        }

        /**
         * @param bool $isSellable
         */
        public function setIsSellable(bool $isSellable): void
        {
            $this->isSellable = $isSellable;
        }


        /**
         * @return string
         */
        public function getBrandName(): string
        {
            return $this->brandName;
        }

        /**
         * @param string $brandName
         */
        public function setBrandName(string $brandName): void
        {
            $this->brandName = $brandName;
        }

        /**
         * @return string
         */
        public function getUniqueCode(): string
        {
            return $this->uniqueCode;
        }

        /**
         * @param string $uniqueCode
         */
        public function setUniqueCode(string $uniqueCode): void
        {
            $this->uniqueCode = $uniqueCode;
        }


    }
