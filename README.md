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
            "url": "https://github.com/danielmullin/minilog"
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

Extrapolate to individual class files and load via Factory pattern or similar to reduce memory footprint.

Dynamic log level adjustment so that ignored logs in one application cycle can be trigged to be logged if a later error occurs during the cycle.

Persist elevated alerts inside the logging layer, so that if an exception has been flagged subsequent log requests would not be filtered by Monologs implementation.

Batch log messages to single payload if it can demonstrate improved efficiency.

Route some or all log requests over a syslog ingestion solution or queue system to reduce impact on the logged application with slow / locked file writes for example, and process the slower resolutions at a later date. 


