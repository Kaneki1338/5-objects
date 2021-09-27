<?php
    class bag{
        private $brand;
        private $name;
        private $type;
        private $color;
        function __construct($brand, $name, $type, $color){
            $this->brand = $brand;
            $this->name = $name;
            $this->type = $type;
            $this->color = $color;
        }
        public function getBrand(){
            return $this->brand;
        }
        public function getName(){
            return $this->name;
        }
        public function getType(){
            return $this->type;
        }
        public function getColor(){
            return $this->color;
        }
        public function getInfo(){
            return "{$this->brand}" . "{$this->name}" . "{$this->type}" . "{$this->color}";
        }
    }
    $bag = new bag("Vans","Vans Old Skool Iii","Модный","Черно-белый");
    echo "Бренд - " . $bag->getBrand(); echo "<br>";
    echo "Модель - " . $bag->getName(); echo "<br>";
    echo "Тип - " . $bag->getType(); echo "<br>";
    echo "Цвет - " . $bag->getColor(); echo "<br>";