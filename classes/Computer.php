<?php
include_once __DIR__ . '/Prodotto.php';

class Computer extends Prodotto {
    public $ram;
    public $display;

    public function __construct($_ram, $_display,$_code, $_type, $_brand, $_model) {
        parent::__construct($_code, $_type, $_brand, $_model);
        $this->ram = $_ram;
        $this->display = $_display;
    }
    public function print() {
        $info = parent::print();
        return $info . ' ' . $this->ram . ' ' . $this->display;
    }

}
$computer = new Computer('64 GB', '27 pollici', 'C74456', 'Computer', 'Apple', 'iMac');


?>
