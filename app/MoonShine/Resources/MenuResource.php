<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Switcher;

class MenuResource extends ModelResource
{
    protected string $model = Menu::class;

    protected string $title = 'Primary Menu';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Name', 'name'),
                Switcher::make('Опубликовать', 'active'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
