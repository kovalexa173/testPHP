<?php
    abstract class AbstractClass
{
    abstract protected function save();
    abstract protected function new();

    public function getName($prefix) {
        return 'Произвольная строка';
    }
}
class ConcreteClass extends AbstractClass{
    protected function save(){
        return 'Строка первого метода';
    }
    protected function new(){
        return 'Строка второго метода';
    }
    public function getName($prefix) {
        return "{$prefix}Произвольная строка";
    }
}
$class = new ConcreteClass;
echo $class->getName('Здорово! ')
?>