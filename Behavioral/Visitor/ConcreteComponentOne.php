<?php
declare(strict_types=1);

namespace DesignPatterns\Behavioral\Visitor;

class ConcreteComponentOne implements Component
{
    /**
     * @param Visitor $visitor
     * @return void
     */
    public function accept(Visitor $visitor): void
    {
        $visitor->visitConcreteComponentOne($this);
    }

    /**
     * @return string
     */
    public function actionConcreteComponentOne(): string
    {
        return 'One';
    }
}
