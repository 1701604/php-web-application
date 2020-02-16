<?php

namespace StarPlayers;

class Star
{
	// Attributes
	private $_name;
	private $_age;
	private $_club;
	
	// Constructor
	public function __construct($name, $age, $club)
	{
		$this-> _name = $name;
		$this-> _age = $age;
		$this-> _club = $club;
	}
	
	// Methods for Properties
	
	// Methods
	
	//Get and Set property accessors
	public function __get($property)
	{
		$method = "Get{$property}";
		if(method_exists($this, $method))
		{
			return $this->$method(); //Call it
		}
		return;
	}
	
	public function __set($property, $value)
	{
		$method = "Set{$property}";
		if(method_exists($this, $method))
		{
			$this->$method($value);
		}
		return;
	}
	
	public function GetName()
	{
		return $this->_name;
	}
	
	public function SetName($value)
	{
		$this->_name;
		return;
	}
	public function GetAge()
	{
		return $this->_age;
	}
	
	public function SetAge($value)
	{
		$this->_age;
		return;
	}
	public function GetClub()
	{
		return $this->_club;
	}
	
	public function SetClub($value)
	{
		$this->_club;
		return;
	}
}

?>