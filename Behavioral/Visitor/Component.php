<?php
declare(strict_types=1);

namespace DesignPatterns\Behavioral\Visitor;

interface Component
{
    /**
     * @param Visitor $visitor
     * @return void
     */
    public function accept(Visitor $visitor): void;
}
