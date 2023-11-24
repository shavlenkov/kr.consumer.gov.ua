<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Banner;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

use MoonShine\Fields\Url;
use MoonShine\Fields\Text;
use MoonShine\Fields\Image;

class BannerResource extends ModelResource
{
    protected string $model = Banner::class;

    protected string $title = 'Banners';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Name', 'name'),
                Url::make('Url', 'url'),
                Image::make('Image', 'image_url')
            ->dir('/') // Директория где будут хранится файлы в storage (по умолчанию /)
            ->disk('public') // Filesystems disk
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
