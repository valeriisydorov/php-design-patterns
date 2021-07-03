<?php
declare(strict_types=1);


namespace DesignPatterns\Creational\Singleton;



/**
 * Class Singleton
 * @package DesignPatterns\Creational\Singleton
 */
final class Singleton
{
    /**
     * @var null
     */
    private static $instance = null;

    /**
     * Singleton protected constructor.
     */
    protected function __construct() {}

    /**
     * Singleton protected __clone method.
     */
    protected function __clone() {}

    /**
     * @throws \Exception
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static();
            echo "The instance of class Singleton has just been created.\n";
        } else {
            echo "The instance of class Singleton has already been created.\n";
        }

        return static::$instance;
    }
}
