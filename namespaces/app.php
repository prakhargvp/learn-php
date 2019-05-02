<?php

namespace App;

include "project.php";

// Use alias to resolve conflict of using same name of class (Table)
use Project\Table as ProjectTable;

class Table 
{
	public static function get()
	{
		echo "App.Table.get \n";
	}
}

ProjectTable::get(); // Project.Table.get
Table::get();	// App.Table.get

