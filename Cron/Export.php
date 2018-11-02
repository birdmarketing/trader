<?php

namespace BirdMarketing\Trader\Cron;

use Zend\Log\Writer\Stream;
use Zend\Log\Logger;

class Export {

	public function execute(): void {
		$writer = new Stream(BP . '/var/log/cron.log');
		$logger = new Logger();
		$logger->addWriter($writer);
		$logger->info('Export -> execute()');
	}

}