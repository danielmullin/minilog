<?php

declare(strict_types = 1);

/**
 *  A simple logger library built on top of Monolog.
 *  
 *  MinilogInterface.php
 *  
 *  The contract interface for the Minilog class.
 */

namespace DanielMullin\Minilog\Interfaces;

interface MinilogInterface
{
    /**
     * @param string $name
     */
    public function __construct(string $name = 'minilog');
    
    /**
     * @param int $level
     */
    public function addConsoleHandler(int $level = Logger::DEBUG): void;
    
    /**
     * @param string $to
     * @param int $level
     */
    public function addEmailHandler(string $to, int $level = Logger::ERROR): void;
    
    /**
     * @param string $path
     * @param int $level
     */
    public function addFileHandler(string $path, int $level = Logger::DEBUG): void;
    
    /**
     * @param string $path
     * @param int $level
     */
    public function addServerApiHandler(string $path, int $level = Logger::DEBUG): void;
    
    /**
     * @param string $message
     * @param array $context
     */
    public function debug(string $message, array $context = []): void;
    
    /**
     * @param string $message
     * @param array $context
     */
    public function info(string $message, array $context = []): void;
    
    /**
     * @param string $message
     * @param array $context
     */
    public function warning(string $message, array $context = []): void;
    
    /**
     * @param string $message
     * @param array $context
     */
    public function error(string $message, array $context = []): void;
}
