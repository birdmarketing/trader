<?php

namespace BirdMarketing\Trader\Cron;

use Zend\Log\Writer\Stream;
use Zend\Log\Logger;

use Magento\Framework\App\ObjectManager;
use Magento\Framework\File\Csv;
use Magento\Framework\Filesystem;
use Magento\Framework\App\Filesystem\DirectoryList;

class Import {

	private $objectManager;
	private $filesystem;
	private $csv;

	private $writer;
	private $logger;

	public function __construct(ObjectManager $objectManager, Filesystem $filesystem, Csv $csv) {
		$this->objectManager = $objectManager;
		$this->filesystem = $filesystem;
		$this->csv = $csv;

		// setup logger with file writer
		$this->writer = new Stream(BP . '/var/log/trader.log');
		$this->logger = new Logger();
		$this->logger->addWriter($this->writer);
	}

	public function execute(): void {
		$this->logger->info('Import started');

		$tmp = $this->filesystem->getDirectoryRead(DirectoryList::ROOT);
		$this->logger->info(print_r($tmp, true));
	}

	private function import(): void {

	}

}