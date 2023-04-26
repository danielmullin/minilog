<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use DanielMullin\Minilog\Minilog;
use Monolog\Logger;

$logger = new MiniLog();

// Add console handler with minimum log level of DEBUG
$logger->addConsoleHandler(Logger::DEBUG);

// Add email handler with minimum log level of ERROR
$logger->addEmailHandler('email@danielmullin.com', Logger::ERROR);

// Add file handler with minimum log level of INFO
$logger->addFileHandler('./minilog.log', Logger::INFO);

$logger->debug('Debug message');
$logger->info('Info message');
$logger->warning('Warning message');
$logger->error('Error message');
