<?php
    class pen{
        private $name;
        private $color;
        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
        public function getName(){
            return $this->name;
        }
        public function getColor(){
            return $this->color;
        }
        public function getInfo(){
            return "{$this->name}" . "{$this->color}";
        }
    }
    $pen = new pen("Visconti","Black");
    echo "Название - " . $pen->getName(); echo "<br>";
    echo "Цвет пасты - " . $pen->getColor();