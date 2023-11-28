<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Page;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu = [
            'Про управління' => [
                'Про Головне управління' => ['url' => 'http://google.com/fdfsdfsdfsd'],
                'Структура' => [
                    'pages' => [
                        'fdfdsf' => ['url' => 'http://a.com'],
                        'dsfdsfds' =>['url' => 'http://b.com'],
                    ]
                ],
                'Розпорядок роботи',
                'Профспілкова організація',
                'Кадрова політика',
                'Очищення влади',
                'Державні установи (лабораторії, лікарні) ветеринарної медицини',
                'Кіровоградська регіональна державна лабораторія ветеринарної медицини'
            ],
             'Діяльність' => [
                "Суб'єктам господарювання",
                'Внутрішній аудит',
                'Оцінювання службової діяльності посадових осіб',
                'Закупівлі',
                'Плани та звіти про виконання',
                'Система енергетичного менеджменту'
             ],
             'Напрямки' => [
                "КОНТРОЛЬ ЗА ЦІНАМИ",
                'ФІТОСАНІТАРНА БЕЗПЕКА, НАСІННИЦТВО ТА РОЗСАДНИЦТВО',
                'ХАРЧОВІ ПРОДУКТИ ТА ВЕТЕРИНАРНА МЕДИЦИНА',
                'САНІТАРНО-ЕПІДЕМІОЛОГІЧНИЙ НАГЛЯД',
                'ЗАХИСТ ПРАВ СПОЖИВАЧІВ',
                'РЕЄСТРАЦІЯ СІЛЬСЬКОГОСПОДАРСЬКОЇ ТЕХНІКИ'
             ],
             'Публічна інформація' => [
                'Перелік відомостей, що містить службову інформацію',
                'Інформація про використання бюджетних коштів',
                'Про стан розгляду запитів на публічну інформацію',
                'Доступ до публічної інформації'
             ],
             "Зв'язки з громадськістю" => [
                'Вимоги до звернення',
                'Залишити звернення',
                'Аналіз звернень громадян'
             ],
             'Стоп корупція' => [
                'Запобігання проявам корупції',
                'Нормативно-правова база',
                'Планування діяльності',
                'ДЕКЛАРУВАННЯ',
                'Повідом про корупцію'
             ],
             'У воєнний час' => []

            ];

        foreach ($menu as $parentTitle => $subMenu) {

    $parentMenuItem = Menu::create([
        'name' => $parentTitle,
    ]);

    foreach ($subMenu as $childTitle => $childData) {

        if(is_numeric($childTitle)) {
           Submenu::create([
            'name' => $childData,
            'url' => null,
            'parent_id' => $parentMenuItem->id,
        ]);
        } else {
            if(isset($childData['url'])) {
           Submenu::create([
            'name' => $childTitle,
            'url' => $childData['url'],
            'parent_id' => $parentMenuItem->id,
           ]);
           } else if(isset($childData['pages'])) {
           $b = Submenu::create([
            'name' => $childTitle,
            'url' => null,
            'parent_id' => $parentMenuItem->id,
           ]);

           foreach($childData['pages'] as $childTitle2 => $childData2) {
             Page::create([
                'name' => $childTitle2,
                'parent_id' => $b->id,
                'url' => $childData2['url']
             ]);
           }

        
           }
        }


      }
}

        }

}
