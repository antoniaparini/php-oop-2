<?php
class Prodotto {
    public $code;
    public $type;
    public $brand;
    public $model;

    public function __construct($_code, $_type, $_brand, $_model) {
        $this->code = $_code;
        $this->type = $_type;
        $this->brand = $_brand;
        $this->model = $_model;
    }
    public function print() {
        return $this->type . ' ' . $this->brand . ' ' . $this->model;
    }

}


?>
