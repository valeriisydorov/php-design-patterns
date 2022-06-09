<?php
declare(strict_types=1);

namespace DesignPatterns\Behavioral\Visitor;

class ConcreteComponentTwo implements Component
{
    /**
     * @param Visitor $visitor
     * @return void
     */
    public function accept(Visitor $visitor): void
    {
        $visitor->visitConcreteComponentTwo($this);
    }

    /**
     * @return string
     */
    public function actionConcreteComponentTwo(): string
    {
        return 'Two';
    }
}
