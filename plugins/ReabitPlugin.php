<?php

declare(strict_types=1);

namespace JustCarmen\Webtrees\Module\FancyResearchLinks\Plugin;

use Fisharebest\Webtrees\I18N;
use JustCarmen\Webtrees\Module\FancyResearchLinks\FancyResearchLinksModule;

class ReabitPlugin extends FancyResearchLinksModule
{
    public static function pluginLabel(): string
    {
        return 'Національний банк репресованих'; /*National Bank of Repressed Persons*/
    }

    public static function pluginName(): string
	{
		return strtolower(basename(__FILE__, 'Plugin.php'));
	}

    public static function researchArea(): string
    {
        return 'UKR';
    }

    public static function researchLink($attributes): string
    {
        $name = $attributes['NAME'];

		return 'http://www.reabit.org.ua/nbr/?st=4&region=&ss=&logic=or&f1_type=begins&f1_str=' . $name['surn'] . '&f2_type=begins&f2_str=' . $name['givn'];
    }
}
