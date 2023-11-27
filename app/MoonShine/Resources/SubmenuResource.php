<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Submenu;
use App\Models\Menu;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Select;

class SubmenuResource extends ModelResource
{
    protected string $model = Submenu::class;

    protected string $title = 'Second Menu';

    public function fields(): array
    {

         $categories = Menu::select(['id', 'name'])->get();

    $a = [];

    foreach ($categories as $category) {
        $a[$category->id] = $category->name;
    }


        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Name', 'name'),
                 Select::make('Menu', 'parent_id')
                    ->options($a),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
