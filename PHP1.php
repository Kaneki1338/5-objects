<?php
    class monitor{
        private $brand;
        private $size;
        function __construct($brand,$size){
        $this->brand = $brand;
        $this->size = $size;
        }
        public function getBrand(){
        return $this->brand;
        }
        public function getSize(){
        return $this->size;
        }
        public function getInfo(){
        return "{$this->brand}" . "{$this->size}";
        }
    }
    $monitor = new monitor("ACER",27);
    echo "Модель - " . $monitor->getBrand(); echo "<br>";
    echo "Дюйм - " . $monitor->getSize();