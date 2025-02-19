<?php

declare(strict_types=1);

namespace JustCarmen\Webtrees\Module\FancyResearchLinks\Plugin;

use Fisharebest\Webtrees\I18N;
use JustCarmen\Webtrees\Module\FancyResearchLinks\FancyResearchLinksModule;


class NLD_DeKrantVanToenPlugin extends FancyResearchLinksModule
{

	/**
	 * The plugin label is used in the sidebar
	 *
	 * @return string
	 */
	public function pluginLabel(): string
	{
		return 'De Krant van Toen';
	}

	/**
	 * The plugin name is the internal name and is generated automatically
	 *
	 * @return string
	 */
	public function pluginName(): string
	{
		return strtolower(basename(__FILE__, 'Plugin.php'));
	}

	public function researchArea(): string
	{
		return 'NLD';
	}

	public function researchLink($attributes): string
	{
		$name = $attributes['NAME'];
		$searchname = $name['first'] . ' ' . $name['surname'];
		$searchname = str_replace(' ', '+', $searchname);

		// The link below works, although 'officially' the search should be done by a POST request
		return 'https://www.dekrantvantoen.nl/srch/query.do?q=' . $searchname;
	}
}
