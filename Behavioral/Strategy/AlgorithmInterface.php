<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy;


/**
 * Interface AlgorithmInterface
 * @package DesignPatterns\Behavioral\Strategy
 */
interface AlgorithmInterface
{
    /**
     * @param $data
     * @return int
     */
    public function implement($data): int;
}
