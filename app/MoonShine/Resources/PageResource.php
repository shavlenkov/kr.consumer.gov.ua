<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Page;
use App\Models\Submenu;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Select;

class PageResource extends ModelResource
{
    protected string $model = Page::class;

    protected string $title = 'Pages';

    public function fields(): array
    {

  $categories = Submenu::select(['id', 'name'])->get();

    $a = [];

    foreach ($categories as $category) {
        $a[$category->id] = $category->name;
    }

        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Name', 'name'),
                Text::make('URL', 'url'),
                Select::make('Submenu', 'parent_id')
                    ->options($a),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
