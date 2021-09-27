<?php
    class copybook{
        private $type;
        private $pages;
        private $color;
        function __construct($type,$pages,$color){
            $this->type = $type;
            $this->pages = $pages;
            $this->color = $color;
        }
        public function getType(){
            return $this->type;
        }
        public function getPages(){
            return $this->pages;
        }
        public function getColor(){
            return $this->color;
        }
        public function getInfo(){
            return "{$this->type}" . "{$this->pages}" . "{$this->color}";
        }
    }
    $copybook = new copybook("клетку", 50, "зеленый");
    echo "Тетрадь в  - " . $copybook->getType(); echo "<br>";
    echo "Кол-во страниц  - " . $copybook->getPages(); echo "<br>";
    echo "Цвет  - " . $copybook->getColor(); 