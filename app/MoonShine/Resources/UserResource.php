<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Role;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Password;
use MoonShine\Models\MoonshineUser;
use MoonShine\Fields\Select;

class UserResource extends ModelResource
{
    protected string $model = User::class;

    protected string $title = 'Users';


    public function fields(): array
    {

  $categories = Role::select(['id', 'name'])->where('id', '>=', auth()->user()->role_id)->get();

    $a = [];

    foreach ($categories as $category) {
        $a[$category->id] = $category->name;
    }

        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Name', 'name'),
                Text::make('Email', 'email'),
                Password::make('Password', 'password')->hideOnIndex(), 
                Select::make('Role', 'role_id')
                    ->options($a)
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
