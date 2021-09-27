<?php
    class guitar{
        private $brand;
        private $mark;
        private $type;
        private $color;
        private $strings;
        function __construct($brand,$mark,$type,$color,$strings){
        $this->brand = $brand;
        $this->mark = $mark;
        $this->type = $type;
        $this->color = $color;
        $this->strings = $strings;
        }
        public function getBrand(){
        return $this->brand;
        }
        public function getMark(){
        return $this->mark;
        }
        public function getType(){
            return $this->type;
        }
        public function getColor(){
            return $this->color;
        }
        public function getStrings(){
            return $this->strings;
        }
        public function getInfo(){
        return "{$this->brand}" . "{$this->mark}" .  "{$this->type}" .  "{$this->color}" .  "{$this->strings}";
        }
    }
    $guitar = new guitar("Fender","FA-125CE DREAD NATURAL WN","Acoustics","Orange","Elixir 16027 NanoWeb 11-52");
    echo "Бренд гитары - " . $guitar->getBrand(); echo "<br>";
    echo "Название гитары - " . $guitar->getMark(); echo "<br>";
    echo "Тип гитары - " . $guitar->getType(); echo "<br>";
    echo "Цвет гитары - " . $guitar->getColor(); echo "<br>";
    echo "Струны гитары - " . $guitar->getStrings(); echo "<br>";