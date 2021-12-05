<?php

declare(strict_types=1);

namespace JustCarmen\Webtrees\Module\FancyResearchLinks\Plugin;

use Fisharebest\Webtrees\I18N;
use JustCarmen\Webtrees\Module\FancyResearchLinks\FancyResearchLinksModule;

class DSDresdenGrabstattenSowjetischerBurgerPlugin extends FancyResearchLinksModule
{
    public static function pluginLabel(): string
    {
        return 'Центр Документации Дрезден - Могилы советских граждан';
    }

    public static function pluginName(): string
	{
		return strtolower(basename(__FILE__, 'Plugin.php'));
	}

    public static function researchArea(): string
    {
        return 'RUS';
    }

    public static function researchLink($attributes): string
    {
        $name = $attributes['NAME'];

		return 'https://ru.stsg.de/cms/node/11119?suchwort=' . $name['surn'] . '&beginn=%D0%9D%D0%B0%D1%87%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5+%D0%B1%D1%83%D0%BA%D0%B2%D1%8B+%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D0%B8';
    }
}
