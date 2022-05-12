<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\Prototype;

class ComponentWithBackReference
{
    /**
     * @var Prototype
     */
    public $prototype;

    /**
     * @param Prototype $prototype
     */
    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;
    }
}
