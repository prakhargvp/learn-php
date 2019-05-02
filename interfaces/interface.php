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
// Countable - PHP Standard interafce
class Table implements TableInterface, LogInterface, Countable
{
	public function save(array $data) {
		return 'foo';
	}

	public function log($message) {
		return $message . "\n";
	}

	public function count() {
		return 10;
	}
}

echo (new Table())->save([]);
echo (new Table())->log("interfaces are awesome.");
echo (new Table())->count();
