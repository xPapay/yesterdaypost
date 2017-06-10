<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;

class ArticleCollection extends Collection
{
	public function columnize($numOfCols)
	{
		$cols = [];

		for ($i = 0; $i < $numOfCols; $i++)
		{
			$cols[] = new static;
		}

		$colIndex = 0;

		while ($item = array_shift($this->items))
		{
			if ($colIndex == $numOfCols)
			{
				$colIndex = 0;
			}

			$cols[$colIndex]->push($item);

			$colIndex++;
		}

		return new static($cols);
	}
}