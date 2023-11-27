<?php

declare(strict_types=1);

namespace App\Providers;

use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\UserResource;
use App\MoonShine\Resources\PostResource;
use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\BannerResource;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\SubmenuResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
    {
        return [

            MenuGroup::make('Каталог', [
                MenuItem::make(static fn() => 'Матеріали', new PostResource()),
                MenuItem::make(static fn() => 'Категорії', new CategoryResource()),
            ])->translatable(),

            MenuGroup::make('Меню', [
                MenuItem::make(static fn() => 'Головне меню', new MenuResource()),
                MenuItem::make(static fn() => 'Підменю', new SubmenuResource()),
            ])->translatable(),

            MenuItem::make(
                static fn() => 'Користувачі',
                new UserResource()
            ),

             MenuItem::make(
                'Банери',
                new BannerResource()
            ),
        ];
    }

    /**
     * @return array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
