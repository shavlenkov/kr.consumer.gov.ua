<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Category;
use MoonShine\Fields\Text;
use MoonShine\Fields\Select;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\TinyMce; 

use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Enums\ClickAction;
use MoonShine\Decorations\Tabs; 
use MoonShine\Decorations\Tab; 
use MoonShine\Fields\Textarea; 


class PostResource extends ModelResource
{
    protected string $model = Post::class;

    protected string $title = 'Posts';

    protected ?ClickAction $clickAction = ClickAction::DETAIL;

    public function fields(): array
    {

         $categories = Category::select(['id', 'name'])->get();

    $a = [];

    foreach ($categories as $category) {
        $a[$category->id] = $category->name;
    }



        return [
            Tabs::make([
                Tab::make('Content', [
                    ID::make()->sortable(),
                    Text::make('Title', 'title'),
                    Textarea::make('Description', 'short_description'),
                    TinyMce::make('Description2', 'long_description'),
                    Select::make('Category', 'category_id')
                    ->options($a),
                    Switcher::make('Опубликовать', 'active'),
                    Image::make('Image', 'image_url')
                      ->dir('/') // Директория где будут хранится файлы в storage (по умолчанию /)
                      ->disk('public') // Filesystems disk
                      ->allowedExtensions(['jpg', 'gif', 'png'])
                ]),
                Tab::make('SEO', [
                    ID::make()->sortable(),
                    Text::make('Title', 'seo_title'),
                    Textarea::make('Title', 'seo_descr'),
                    Text::make('Title', 'seo_tags'),
                ])
                  
            ])

        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
