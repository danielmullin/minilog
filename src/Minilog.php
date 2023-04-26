<?php

declare(strict_types = 1);

/**
 *  A simple logger library built on top of Monolog.
 */

namespace DanielMullin\Minilog;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\NativeMailerHandler;
use Monolog\Handler\RotatingFileHandler;

class Minilog
{
    private $logger;

    /**
     * 
     * @param string $name
     */
    public function __construct(string $name = 'minilog')
    {
        $this->logger = new Logger($name);
    }

    /**
     * 
     * @param int $level
     */
    public function addConsoleHandler(int $level = Logger::DEBUG): void
    {
        $this->logger->pushHandler(new StreamHandler('php://stdout', $level));
    }

    /**
     * 
     * @param string $to
     * @param int $level
     */
    public function addEmailHandler(string $to, int $level = Logger::ERROR): void
    {
        $this->logger->pushHandler(new NativeMailerHandler('email@danielmullin.com', 'Log', $to, $level));
    }

    /**
     * 
     * @param string $path
     * @param int $level
     */
    public function addFileHandler(string $path, int $level = Logger::DEBUG): void
    {
        $this->logger->pushHandler(new RotatingFileHandler($path, 0, $level));
    }

    /**
     * 
     * @param string $message
     * @param array $context
     */
    public function debug(string $message, array $context = []): void
    {
        $this->logger->debug($message, $context);
    }

    /**
     * 
     * @param string $message
     * @param array $context
     */
    public function info(string $message, array $context = []): void
    {
        $this->logger->info($message, $context);
    }

    /**
     * 
     * @param string $message
     * @param array $context
     */
    public function warning(string $message, array $context = []): void
    {
        $this->logger->warning($message, $context);
    }

    /*
     * 
     */
    public function error(string $message, array $context = []): void
    {
        $this->logger->error($message, $context);
    }
}
