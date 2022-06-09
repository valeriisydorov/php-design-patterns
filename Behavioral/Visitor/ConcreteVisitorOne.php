<?php
declare(strict_types=1);

namespace DesignPatterns\Behavioral\Visitor;

class ConcreteVisitorOne implements Visitor
{
    /**
     * @param ConcreteComponentOne $element
     * @return void
     */
    public function visitConcreteComponentOne(ConcreteComponentOne $element): void
    {
        echo $element->actionConcreteComponentOne() . " + ConcreteVisitorOne" . PHP_EOL;
    }

    /**
     * @param ConcreteComponentTwo $element
     * @return void
     */
    public function visitConcreteComponentTwo(ConcreteComponentTwo $element): void
    {
        echo $element->actionConcreteComponentTwo() . " + ConcreteVisitorOne" . PHP_EOL;
    }
}
