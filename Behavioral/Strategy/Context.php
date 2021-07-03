<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy;

/**
 * Class Context
 * @package DesignPatterns\Behavioral\Strategy
 */
class Context
{
    /**
     * @var AlgorithmInterface
     */
    private $algorithm;

    /**
     * Context constructor.
     * @param AlgorithmInterface $algorithm
     */
    public function __construct(AlgorithmInterface $algorithm)
    {
        $this->algorithm = $algorithm;
    }

    /**
     * @param AlgorithmInterface $algorithm
     */
    public function setAlgorithm(AlgorithmInterface $algorithm): void
    {
        $this->algorithm = $algorithm;
    }

    /**
     * @param array $data
     * @return int
     */
    public function doAlgorithm(array $data): int
    {
        return $this->algorithm->implement($data);
    }
}
