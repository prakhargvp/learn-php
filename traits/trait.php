<?php

// using magic keyword trait
trait Log {
	protected function log($msg) {
		echo "{$msg}\n";
	}
}


class Table {
	use Log;

	public function save() {
		$this->log('save start');
	}
}

(new Table())->save();