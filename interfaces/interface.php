<?php

// define interface using interface keyword
interface TableInterface
{
	public function save(array $data);
}

interface LogInterface
{
	public function log($message);
}
// inherit interface using implements keyword
class Table implements TableInterface, LogInterface
{
	public function save(array $data) {
		return 'foo';
	}

	public function log($message) {
		return $message . "\n";
	}
}

echo (new Table())->save([]);
echo (new Table())->log("interfaces are awesome.");