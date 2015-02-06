<?php
namespace Fisharebest\Webtrees;

/**
 * webtrees: online genealogy
 * Copyright (C) 2015 webtrees development team
 * Copyright (C) 2015 JustCarmen
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

class nl_delpher_kranten_plugin extends research_base_plugin {

	static function getPluginName() {
		return 'NL | Delpher Krantenarchief';
	}

	static function createLink($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return $link = 'http://kranten.delpher.nl/nl/results?query=' . urlencode('"') . $fullname . urlencode('"') . '&coll=ddd';
	}

	static function encode_plus() {
		return true;
	}

}
