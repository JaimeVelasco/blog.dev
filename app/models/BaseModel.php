<?php


use Carbon\Carbon;

class BaseModel extends Eloquent {

	/**
	  *Accessor to set timezone 
	  */
	public function getCreatedAtAttribute($value) {
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}

	/**
	  *Mutator to set username as lowercase 
	  */	
	public function setUsernameAttribute($value)
	{
	    $this->attributes['email'] = strtolower($value);
	}

	/**
	  *Mutator to Hash all passwords 
	  */
	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}

}