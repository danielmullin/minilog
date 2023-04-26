# minilog

A simple logger library built on top of Monolog.

## ABOUT

This package is built on top of Monolog, which already provides good performance and multi-threading management. 

To configure the minimum log levels per target, you can pass the log level as an argument when adding a handler.

It can be changed at runtime by modifying the log level of the handler.

## INSTALLATION

Add the repository to you composer.json

```json
    "repositories": [
        /...
	 {
            "type": "git",
            "url": "https://github.com/danielmullin/bookwhen"
        }
	.../
    ],
```

and add to your project requirements

```json
    "require": {
        /...
        "danielmullin/minilog": "dev-master",
        .../
```

and ensure minimum stability compatability

```json
   "minimum-stability": "dev",
```

## USAGE


iHere's an example of how to use this package

```php
<?php

require_once 'vendor/autoload.php';

use DanielMullin\Minilog\Minilog;
use Monolog\Logger;

$logger = new MiniLog();

// Add console handler with minimum log level of DEBUG
$logger->addConsoleHandler(Logger::DEBUG);

// Add email handler with minimum log level of ERROR
$logger->addEmailHandler('email@danielmullin.com', Logger::ERROR);

// Add file handler with minimum log level of INFO
$logger->addFileHandler('/var/log/minilog.log', Logger::INFO);

$logger->debug('Debug message');
$logger->info('Info message');
$logger->warning('Warning message');
$logger->error('Error message');

```

## @TODO

Beyond initial 1 hour development time, it would be good to...

