<?php

/**
 * Hlutur sem heldur utan um skráningu, kann að búa sig til útfrá gögnum í formi og validate'a
 */
class Registration
{
	public $name;
	public $email;
	public $address;
	public $sex;
	public $spam;
	public $text;

	/**
	 * Forskilyrði: $data er fylki með lykill => gögn úr formi
	 * Eftirskilyrði: Registration hlutur er útfylltur með gögnum úr $data
	 */
	public function Populate($data)
	{
	}

	/**
	 * Forskilyrði: Registration hlutur er útfylltur með gögnum
	 * Eftirskilyrði: Aðferð skilar true ef registration hlutur uppfyllir kröfur, false ef ekki
	 */
	public function Valid()
	{
	}

	/**
	 * Forskilyrði: Búið er að keyra Validate() aðferð
	 * Eftirskilyrði: Skilar fylki af villum sem komu upp ef einhverjar, annars tóma fylkinu
	 */
	public function Errors()
	{
	}
}