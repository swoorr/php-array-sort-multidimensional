<?php

/**
 * arraySort.php
 *
 * Array String Sort Wizard
 *
 * @author Furkan Sahin <furkansahin23@gmail.com>
 * @datetime 17 January 2021
 *
 */

class stringWizard
{

	public $stringNames;
	private $stringInput;

	/**
	 * @param string $stringInput
	 *
	 * @return void
	 */
	function __construct($stringInput = "")
	{
		if (!is_string($stringInput)) {
			print_r("parameter must be string\n");
		} else {
			$this->stringNames = $stringInput;
			$this->output();
		}
	}

	/**
	 * @return void
	 */
	public function output(): void
	{
		print_r($this->stringSort($this->stringToArray(), "letter", "word"));
	}

	/**
	 * @return array
	 */
	private function stringToArray(): array
	{
		$this->stringNames = explode(" ", $this->stringNames);

		foreach ($this->stringNames as $key => $value) {
			$arrayData[] = ["index" => $key, "word" => $value, "letter" => substr($value, -1)];
		}

		return $arrayData;
	}

	/**
	 * @param array $data
	 * @param string $order
	 * @param string $result
	 *
	 * @return array
	 */
	private function stringSort(array $data, string $order = "letter", string $result = "word"): array
	{
		// array sort by any
		array_multisort(array_map(function ($val) use ($order) {
			return $val[$order];
		}, $data), SORT_ASC, $data);

		// output any from multidimensional array
		$data = array_column($data, $result);

		return $data;
	}
}

/**
 * example usage
 * you can run on terminal as : php arraySort.php
 * or web browser as : php -S localhost:8000
 */
header("Content-type:application/json");
new stringWizard([]);
new stringWizard();
new stringWizard("");
new stringWizard("Mehmet bugün bir yazılım yapacak");
new stringWizard("Yazılım geliştirmek ve algoritma üretmek çok zevkli bir iş");
