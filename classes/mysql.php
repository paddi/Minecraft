<?php
class MySql
{
	private $_db_host = "127.0.0.1";
	private $_db_username = "root";
	private $_db_password = "parker";
	private $_database = "crafity";
	
	// Starts connection to the database
	public function startConnection()
	{
		try
		{
			if(!@$this->_connection = mysql_connect($this->_db_host, $this->_db_username, $this->_db_password))
			{
				throw new Exception("Can't connect to MySql host ".mysql_error());
			}
			else
			{
				if(!@mysql_select_db($this->_database, $this->_connection))
				{
						
					throw new Exception("Can't connect to MySql database ".mysql_error());	
				}
				else
				{
					//echo "<p>Successfully connected to the <strong>host</strong> and <strong>database</strong>.</p>";

				}
			}
		}
		catch(Exception $MySql_e)
		{
			echo "<p><strong>MySql Error:</strong> ".$MySql_e."</p>";
		}
	}
	
	public function CloseConnection()
	{
		mysql_close($this->_connection);
	} 
	
	public function SelectDB($database)
	{
		mysql_select_db($database);
	}
}

?>