<?php

/**
 *
 *    Copyright (C) 2017 onOffice GmbH
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU Affero General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace onOffice\WPlugin\Model;

/**
 *
 * @url http://www.onoffice.de
 * @copyright 2003-2017, onOffice(R) GmbH
 *
 */

class InputModelOptionAdapterArray
{
	/** @var InputModelOption[] */
	private $_inputModels = array();

	/**
	 *
	 * @param InputModelOption $pInputModelOption
	 *
	 */

	public function addInputModelOption(InputModelOption $pInputModelOption)
	{
		$this->_inputModels []= $pInputModelOption;
	}


	/**
	 *
	 * @return array
	 *
	 */

	public function generateValuesArray()
	{
		$values = array();
		foreach ($this->_inputModels as $pInputModel)
		{
			$key = $pInputModel->getName();
			$values[$key] = $pInputModel->getValue();
		}

		return $values;
	}

}
