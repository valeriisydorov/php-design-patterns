<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Interface AbstractProductTwo
 * @package DesignPatterns\Creational\AbstractFactory
 */
interface AbstractProductTwo
{
    /**
     * @return string
     */
    public function usefulFunctionTwo(): string;

    /**
     * @param AbstractProductOne $collaborator
     * @return string
     */
    public function anotherUsefulFunctionTwo(AbstractProductOne $collaborator): string;
}
