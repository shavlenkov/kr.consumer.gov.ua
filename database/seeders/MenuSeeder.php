<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu = [
            'Про управління' => [
                'Про Головне управління',
                'Структура',
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
             ]

            ];

        foreach ($menu as $parentTitle => $subMenu) {

    $parentMenuItem = Menu::create([
        'name' => $parentTitle,
        'parent_id' => null,
    ]);

   
    foreach ($subMenu as $childTitle) {
        Menu::create([
            'name' => $childTitle,
            'parent_id' => $parentMenuItem->id,
        ]);
    }
}

    }
}
