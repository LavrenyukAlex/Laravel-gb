<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function categories(): array
    {
        return [
            [
                'id' => '1',
                'name' => 'Спорт'
            ],
            [
                'id' => '2',
                'name' => 'Политика',
            ],
            [
                'id' => '3',
                'name' => 'Финансы'
            ],
            [
                'id' => '4',
                'name' => 'Новости моды'
            ],
            [
                'id' => '5',
                'name' => 'Мировые новости'
            ]
        ];
    }

    public function news(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Спорт',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                   Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                   Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                   Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
                'category_id' => 1

            ], [
                'id' => 2,
                'name' => 'Спорт1',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                   Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                   Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                   Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
                'category_id' => 1

            ], [
                'id' => 3,
                'name' => 'Спорт2',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                   Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                   Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                   Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
                'category_id' => 1

            ], [
                'id' => 4,
                'name' => 'Спорт',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                   Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                   Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                   Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
                'category_id' => 1

            ],[
                'id' => 5,
                'name' => 'Спорт',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                   Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                   Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                   Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
                'category_id' => 1

            ],
            [
                'id' => 6,
                'name' => 'Политика',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                  Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                  Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                 Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 2
            ],[
                'id' => 7,
                'name' => 'Политика',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                  Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                  Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                 Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 2
            ],[
                'id' => 8,
                'name' => 'Политика',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                  Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                  Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                 Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 2
            ],[
                'id' => 9,
                'name' => 'Политика',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                  Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                  Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                 Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 2
            ],[
                'id' => 10,
                'name' => 'Политика',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                  Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                  Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                 Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 2
            ],
            [
                'id' => 11,
                'name' => 'Финансы',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                  Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                   Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                   Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 3
            ],[
                'id' => 12,
                'name' => 'Финансы',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                  Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                   Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                   Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 3
            ],[
                'id' => 13,
                'name' => 'Финансы',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                  Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                   Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                   Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 3
            ],[
                'id' => 14,
                'name' => 'Финансы',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                  Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                   Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                   Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 3
            ],[
                'id' => 15,
                'name' => 'Финансы',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                  Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                   Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                   Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 3
            ],
            [
                'id' => 16,
                'name' => 'Новости моды',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                 Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                 Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 4
            ],[
                'id' => 17,
                'name' => 'Новости моды',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                 Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                 Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 4
            ],[
                'id' => 18,
                'name' => 'Новости моды',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                 Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                 Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 4
            ],[
                'id' => 19,
                'name' => 'Новости моды',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                 Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                 Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 4
            ],[
                'id' => 20,
                'name' => 'Новости моды',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                 Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                 Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 4
            ],
            [
                'id' => 21,
                'name' => 'Мировые новости',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                 Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 5
            ],[
                'id' => 22,
                'name' => 'Мировые новости',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                 Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 5
            ],[
                'id' => 23,
                'name' => 'Мировые новости',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                 Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 5
            ],[
                'id' => 24,
                'name' => 'Мировые новости',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                 Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 5
            ],[
                'id' => 25,
                'name' => 'Мировые новости',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                 Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',

                'category_id' => 5
            ]

        ];
    }
}
