<?php
declare(strict_types=1);

namespace DesignPatterns\Behavioral\Visitor;

class ConcreteVisitorTwo implements Visitor
{
    /**
     * @param ConcreteComponentOne $element
     * @return void
     */
    public function visitConcreteComponentOne(ConcreteComponentOne $element): void
    {
        echo $element->actionConcreteComponentOne() . " + ConcreteVisitorTwo";
    }

    /**
     * @param ConcreteComponentTwo $element
     * @return void
     */
    public function visitConcreteComponentTwo(ConcreteComponentTwo $element): void
    {
        echo $element->actionConcreteComponentTwo() . " + ConcreteVisitorTwo";
    }
}
