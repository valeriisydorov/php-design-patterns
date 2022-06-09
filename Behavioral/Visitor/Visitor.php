<?php
declare(strict_types=1);

namespace DesignPatterns\Behavioral\Visitor;

interface Visitor
{
    /**
     * @param ConcreteComponentOne $element
     * @return void
     */
    public function visitConcreteComponentOne(ConcreteComponentOne $element): void;

    /**
     * @param ConcreteComponentTwo $element
     * @return void
     */
    public function visitConcreteComponentTwo(ConcreteComponentTwo $element): void;
}
