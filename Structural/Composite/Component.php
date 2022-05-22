<?php
declare(strict_types=1);


namespace DesignPatterns\Structural\Composite;

abstract class Component
{
    /**
     * @var
     */
    protected $parent;

    /**
     * @param Component $parent
     * @return void
     */
    public function setParent(Component $parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return Component
     */
    public function getParent(): Component
    {
        return $this->parent;
    }

    /**
     * @param Component $component
     * @return void
     */
    public function add(Component $component): void { }

    /**
     * @param Component $component
     * @return void
     */
    public function remove(Component $component): void { }

    /**
     * @return bool
     */
    public function isComposite(): bool
    {
        return false;
    }

    /**
     * @return string
     */
    abstract public function operation(): string;
}
