<?php
include_once __DIR__ . '/Prodotto.php';

class Smartphone extends Prodotto {
    public $memory;
    public $color;

    public function __construct($_code, $_type, $_brand, $_model, $_memory, $_color ) {
        parent::__construct($_, $_type, $_brand, $_model);
        $this->memory = $_memory;
        $this->color = $_color;

    }

}
$smartphone = new Smartphone('C74458', 'Smartphone', 'Apple', 'iPhone 12 Pro Max','512 GB', 'Blu pacifico');
$smartphone2 = new Smartphone('D6789', 'Smartphone', 'Samsung', 'S21 Ultra 5G','512 GB', 'Black');

?>
