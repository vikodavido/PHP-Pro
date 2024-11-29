<?php
class Product {
    private $name;
    private $value;

    public function __construct($name, $value) {
        $this->name = $name;
        $this->value = $value;
    }

    public function getName() {}
    public function setName($name) {}
    public function getValue() {}
    public function setValue($value) {}
}
class ProductHandler {
    private $product;

    public function __construct(Product $product) {}

    public function save() {}
    public function update() {}
    public function delete() {}
}
class ProductPrinter {
    private $product;

    public function __construct(Product $product) {}

    public function show() {}
    public function print() {}
}
?>
