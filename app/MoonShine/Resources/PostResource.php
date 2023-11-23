<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Category;
use MoonShine\Fields\Text;
use MoonShine\Fields\Select;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;


class PostResource extends ModelResource
{
    protected string $model = Post::class;

    protected string $title = 'Posts';

    public function fields(): array
    {

         $categories = Category::select(['id', 'name'])->get();

    $a = [];

    foreach ($categories as $category) {
        $a[$category->id] = $category->name;
    }



        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Title', 'title'),
                Text::make('Descr', 'descr'),
                 Select::make('Category', 'category_id')
                    ->options($a)
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
