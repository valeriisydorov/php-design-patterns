<?php
declare(strict_types=1);


namespace DesignPatterns\Structural\Composite;

class Leaf extends Component
{
    /**
     * @return string
     */
    public function operation(): string
    {
        return 'Leaf';
    }
}
