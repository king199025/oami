<?php

use yii\db\Migration;

class m171029_152237_create_filling_table_categories extends Migration
{

    public function up()
    {
        $this->insert('category', [
            'id' => 1,
            'name' => 'Электроника',
            'icon' => '',
            'slug' => 'elektronika',
            'parent_id' => 0,
            'description' => '<p>Описание</p>',
        ]);
            $this->insert('category', [
                'id' => 2,
                'name' => 'Телефоны',
                'icon' => '',
                'slug' => 'telefonyi',
                'parent_id' => 1,
                'description' => '<p>Описание</p>',
            ]);
                $this->insert('category', [
                    'id' => 10,
                    'name' => 'Мобильные телефоны',
                    'icon' => '',
                    'slug' => 'mobilnyie telefonyi',
                    'parent_id' => 2,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 11,
                    'name' => 'Умные часы и браслеты',
                    'icon' => '',
                    'slug' => 'umnyie-chasyi-i-brasletyi',
                    'parent_id' => 2,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 12,
                    'name' => 'Аксессуары для телефонов',
                    'icon' => '',
                    'slug' => 'aksessuaryi-dlya-telefonov',
                    'parent_id' => 2,
                    'description' => '<p>Описание</p>',
                ]);

                        $this->insert('category', [
                            'id' => 103,
                            'name' => 'Карты памяти',
                            'icon' => '',
                            'slug' => 'kartyi-pamyati',
                            'parent_id' => 12,
                            'description' => '<p>Описание</p>',
                        ]);
                        $this->insert('category', [
                            'id' => 104,
                            'name' => 'Моноподы и пульты для селфи',
                            'icon' => '',
                            'slug' => 'monopodyi-i-pultyi-dlya-selfi',
                            'parent_id' => 12,
                            'description' => '<p>Описание</p>',
                        ]);
                        $this->insert('category', [
                            'id' => 105,
                            'name' => 'Аккумуляторы',
                            'icon' => '',
                            'slug' => 'akkumulyatoryi',
                            'parent_id' => 12,
                            'description' => '<p>Описание</p>',
                        ]);
                        $this->insert('category', [
                            'id' => 106,
                            'name' => 'Держатели для мобильных устройств',
                            'icon' => '',
                            'slug' => 'derzhateli-dlya-mobilnyih-ustroystv',
                            'parent_id' => 12,
                            'description' => '<p>Описание</p>',
                        ]);
                        $this->insert('category', [
                            'id' => 107,
                            'name' => 'Док-станции',
                            'icon' => '',
                            'slug' => 'dok-stantsii',
                            'parent_id' => 12,
                            'description' => '<p>Описание</p>',
                        ]);
                        $this->insert('category', [
                            'id' => 108,
                            'name' => 'Чехлы',
                            'icon' => '',
                            'slug' => 'chehlyi',
                            'parent_id' => 12,
                            'description' => '<p>Описание</p>',
                        ]);
                        $this->insert('category', [
                            'id' => 109,
                            'name' => 'Кабели для зарядки',
                            'icon' => '',
                            'slug' => 'kabeli-dlya-zaryadki',
                            'parent_id' => 12,
                            'description' => '<p>Описание</p>',
                        ]);
                        $this->insert('category', [
                            'id' => 110,
                            'name' => 'Антенны и усилители сигнала',
                            'icon' => '',
                            'slug' => 'antennyi-i-usiliteli-signala',
                            'parent_id' => 12,
                            'description' => '<p>Описание</p>',
                        ]);
                        $this->insert('category', [
                            'id' => 111,
                            'name' => 'Громкая связь для авто',
                            'icon' => '',
                            'slug' => 'gromkaya-svyaz-dlya-avto',
                            'parent_id' => 12,
                            'description' => '<p>Описание</p>',
                        ]);
                        $this->insert('category', [
                            'id' => 112,
                            'name' => 'Подвески',
                            'icon' => '',
                            'slug' => 'podveski',
                            'parent_id' => 12,
                            'description' => '<p>Описание</p>',
                        ]);
                        $this->insert('category', [
                            'id' => 113,
                            'name' => 'Стилусы',
                            'icon' => '',
                            'slug' => 'stilusyi',
                            'parent_id' => 12,
                            'description' => '<p>Описание</p>',
                        ]);
                        $this->insert('category', [
                            'id' => 114,
                            'name' => 'Универсальные внешние аккумуляторы',
                            'icon' => '',
                            'slug' => 'universalnyie-vneshnie-akkumulyatoryi',
                            'parent_id' => 12,
                            'description' => '<p>Описание</p>',
                        ]);
                        $this->insert('category', [
                            'id' => 115,
                            'name' => 'Чехлы-аккумуляторы',
                            'icon' => '',
                            'slug' => 'chehlyi-akkumulyatoryi',
                            'parent_id' => 12,
                            'description' => '<p>Описание</p>',
                        ]);
                        $this->insert('category', [
                            'id' => 116,
                            'name' => 'Гарнитуры для проводных телефонов',
                            'icon' => '',
                            'slug' => 'garnituryi-dlya-provodnyih-telefonov',
                            'parent_id' => 12,
                            'description' => '<p>Описание</p>',
                        ]);
                $this->insert('category', [
                    'id' => 13,
                    'name' => 'Чехлы',
                    'icon' => '',
                    'slug' => 'chehlyi',
                    'parent_id' => 2,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 14,
                    'name' => 'Защитные пленки и стекла',
                    'icon' => '',
                    'slug' => 'zaschitnyie-plenki-i-stekla',
                    'parent_id' => 2,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 15,
                    'name' => 'Зарядные устройства и адаптеры',
                    'icon' => '',
                    'slug' => 'zaryadnyie-ustroystva-i-adapteryi',
                    'parent_id' => 2,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 16,
                    'name' => 'Внешние аккумуляторы',
                    'icon' => '',
                    'slug' => 'vneshnie-akkumulyatoryi',
                    'parent_id' => 2,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 17,
                    'name' => 'Ремешки для умных часов',
                    'icon' => '',
                    'slug' => 'remeshki-dlya-umnyih-chasov',
                    'parent_id' => 2,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 18,
                    'name' => 'Наушники и Bluetooth-гарнитуры',
                    'icon' => '',
                    'slug' => 'naushniki-i-bluetooth-garnituryi',
                    'parent_id' => 2,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 19,
                    'name' => 'Радиотелефоны',
                    'icon' => '',
                    'slug' => 'radiotelefonyi',
                    'parent_id' => 2,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 20,
                    'name' => 'Рации',
                    'icon' => '',
                    'slug' => 'ratsii',
                    'parent_id' => 2,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 21,
                    'name' => 'Спутниковые телефоны',
                    'icon' => '',
                    'slug' => 'sputnikovyie-telefonyi',
                    'parent_id' => 2,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 22,
                    'name' => 'Запасные части',
                    'icon' => '',
                    'slug' => 'zapasnyie-chasti',
                    'parent_id' => 2,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 23,
                    'name' => 'Проводные телефоны',
                    'icon' => '',
                    'slug' => 'provodnyie-telefonyi',
                    'parent_id' => 2,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 24,
                    'name' => 'Тарифные планы и номера',
                    'icon' => '',
                    'slug' => 'tarifnyie-planyi-i-nomera',
                    'parent_id' => 2,
                    'description' => '<p>Описание</p>',
                ]);
            $this->insert('category', [
                'id' => 3,
                'name' => 'Портативная техника',
                'icon' => '',
                'slug' => 'portativnaya-tehnika',
                'parent_id' => 1,
                'description' => '<p>Описание</p>',
            ]);
                $this->insert('category', [
                    'id' => 25,
                    'name' => 'Портативная акустика',
                    'icon' => '',
                    'slug' => 'portativnaya-akustika',
                    'parent_id' => 3,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 26,
                    'name' => 'Очки виртуальной реальности',
                    'icon' => '',
                    'slug' => 'ochki-virtualnoy-realnosti',
                    'parent_id' => 3,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 27,
                    'name' => 'Планшеты',
                    'icon' => '',
                    'slug' => 'planshetyi',
                    'parent_id' => 3,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 28,
                    'name' => 'Квадрокоптеры',
                    'icon' => '',
                    'slug' => 'kvadrokopteryi',
                    'parent_id' => 3,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 29,
                    'name' => 'Цифровые плееры',
                    'icon' => '',
                    'slug' => 'tsifrovyie-pleeryi',
                    'parent_id' => 3,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 30,
                    'name' => 'Электронные книги',
                    'icon' => '',
                    'slug' => 'elektronnyie-knigi',
                    'parent_id' => 3,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 31,
                    'name' => 'Диктофоны',
                    'icon' => '',
                    'slug' => 'diktofonyi',
                    'parent_id' => 3,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 32,
                    'name' => 'Магнитолы',
                    'icon' => '',
                    'slug' => 'Magnitolyi',
                    'parent_id' => 3,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 33,
                    'name' => 'Радиоприемники',
                    'icon' => '',
                    'slug' => 'Radiopriemniki',
                    'parent_id' => 3,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 34,
                    'name' => 'Пульсометры и шагомеры',
                    'icon' => '',
                    'slug' => 'pulsometryi-i-shagomeryi',
                    'parent_id' => 3,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 35,
                    'name' => 'Портативные рекордеры',
                    'icon' => '',
                    'slug' => 'portativnyie-rekorderyi',
                    'parent_id' => 3,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 36,
                    'name' => 'Словари и переводчики',
                    'icon' => '',
                    'slug' => 'slovari-i-perevodchiki',
                    'parent_id' => 3,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 37,
                    'name' => 'Калькуляторы',
                    'icon' => '',
                    'slug' => 'kalkulyatoryi',
                    'parent_id' => 3,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 38,
                    'name' => 'Аксессуары для цифровых плееров',
                    'icon' => '',
                    'slug' => 'aksessuaryi-dlya-tsifrovyih-pleerov',
                    'parent_id' => 3,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 39,
                    'name' => 'Аксессуары для электронных книг',
                    'icon' => '',
                    'slug' => 'aksessuaryi-dlya-elektronnyih-knig',
                    'parent_id' => 3,
                    'description' => '<p>Описание</p>',
                ]);
            $this->insert('category', [
                'id' => 4,
                'name' => 'Аудио- и видеотехника',
                'icon' => '',
                'slug' => 'audio-i-videotehnika',
                'parent_id' => 1,
                'description' => '<p>Описание</p>',
            ]);
                $this->insert('category', [
                    'id' => 40,
                    'name' => 'Телевизоры',
                    'icon' => '',
                    'slug' => 'televizoryi',
                    'parent_id' => 4,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 41,
                    'name' => 'Аудиотехника',
                    'icon' => '',
                    'slug' => 'audiotehnika',
                    'parent_id' => 4,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 42,
                    'name' => 'TV-тюнеры',
                    'icon' => '',
                    'slug' => 'tv-tyuneryi',
                    'parent_id' => 4,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 43,
                    'name' => 'Стационарные медиаплееры',
                    'icon' => '',
                    'slug' => 'statsionarnyie-mediapleeryi',
                    'parent_id' => 4,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 44,
                    'name' => 'Мультимедиа-проекторы',
                    'icon' => '',
                    'slug' => 'multimedia-proektoryi',
                    'parent_id' => 4,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 45,
                    'name' => 'DVD и Blu-ray плееры',
                    'icon' => '',
                    'slug' => 'dvd-i-blu-ray-pleeryi',
                    'parent_id' => 4,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 46,
                    'name' => 'Аксессуары',
                    'icon' => '',
                    'slug' => 'aksessuaryi-audio-photo',
                    'parent_id' => 4,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 47,
                    'name' => 'Домашние кинотеатры',
                    'icon' => '',
                    'slug' => 'domashnie-kinoteatryi',
                    'parent_id' => 4,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 48,
                    'name' => 'Мониторы',
                    'icon' => '',
                    'slug' => 'monitoryi',
                    'parent_id' => 4,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 49,
                    'name' => 'Спутниковое и кабельное телевидение',
                    'icon' => '',
                    'slug' => 'sputnikovoe-i-kabelnoe-televidenie',
                    'parent_id' => 4,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 50,
                    'name' => 'Системы MultiRoom',
                    'icon' => '',
                    'slug' => 'sistemyi-multiroom',
                    'parent_id' => 4,
                    'description' => '<p>Описание</p>',
                ]);
            $this->insert('category', [
                'id' => 5,
                'name' => 'Фото- и видеокамеры',
                'icon' => '',
                'slug' => 'foto-i-videokameryi',
                'parent_id' => 1,
                'description' => '<p>Описание</p>',
            ]);
                $this->insert('category', [
                    'id' => 51,
                    'name' => 'Фотоаппараты',
                    'icon' => '',
                    'slug' => 'fotoapparatyi',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 52,
                    'name' => 'Объективы',
                    'icon' => '',
                    'slug' => 'obektivyi',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 53,
                    'name' => 'Видеокамеры',
                    'icon' => '',
                    'slug' => 'videokameryi',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 54,
                    'name' => 'Экшн-камеры',
                    'icon' => '',
                    'slug' => 'ekshn-kameryi',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 55,
                    'name' => 'Квадрокоптеры с камерой',
                    'icon' => '',
                    'slug' => 'kvadrokopteryi-s-kameroy',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 56,
                    'name' => 'Аксессуары',
                    'icon' => '',
                    'slug' => 'aksessuaryi-photo',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 57,
                    'name' => 'Сумки и чехлы',
                    'icon' => '',
                    'slug' => 'sumki-i-chehlyi',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 58,
                    'name' => 'Карты памяти',
                    'icon' => '',
                    'slug' => 'kartyi-pamyati',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 59,
                    'name' => 'Фотовспышки',
                    'icon' => '',
                    'slug' => 'fotovspyishki',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 60,
                    'name' => 'Штативы и моноподы',
                    'icon' => '',
                    'slug' => 'shtativyi-i-monopodyi',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 61,
                    'name' => 'Цифровые фоторамки и фотоальбомы',
                    'icon' => '',
                    'slug' => 'tsifrovyie-fotoramki-i-fotoalbomyi',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 62,
                    'name' => 'Пленочные фотоаппараты',
                    'icon' => '',
                    'slug' => 'flenochnyie-fotoapparatyi',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 63,
                    'name' => 'Фотоаппараты моментальной печати',
                    'icon' => '',
                    'slug' => 'fotoapparatyi-momentalnoy-pechati',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 64,
                    'name' => 'Веб-камеры',
                    'icon' => '',
                    'slug' => 'veb-kameryi',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 65,
                    'name' => 'Фотопринтеры',
                    'icon' => '',
                    'slug' => 'fotoprinteryi',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 66,
                    'name' => 'Специальное оборудование',
                    'icon' => '',
                    'slug' => 'spetsialnoe-oborudovanie',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 67,
                    'name' => 'Видеоняни',
                    'icon' => '',
                    'slug' => 'videonyani',
                    'parent_id' => 5,
                    'description' => '<p>Описание</p>',
                ]);
            $this->insert('category', [
                'id' => 6,
                'name' => 'GPS-навигация',
                'icon' => '',
                'slug' => 'gps-navigatsiya',
                'parent_id' => 1,
                'description' => '<p>Описание</p>',
            ]);
                $this->insert('category', [
                    'id' => 68,
                    'name' => 'GPS-навигаторы',
                    'icon' => '',
                    'slug' => 'gps-navigatoryi',
                    'parent_id' => 6,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 69,
                    'name' => 'Карты и программы',
                    'icon' => '',
                    'slug' => 'kartyi-i-programmyi',
                    'parent_id' => 6,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 70,
                    'name' => 'Аксессуары',
                    'icon' => '',
                    'slug' => 'gps-aksessuaryi',
                    'parent_id' => 6,
                    'description' => '<p>Описание</p>',
                ]);
                $this->insert('category', [
                    'id' => 71,
                    'name' => 'GPS-трекеры',
                    'icon' => '',
                    'slug' => 'gps-trekeryi',
                    'parent_id' => 6,
                    'description' => '<p>Описание</p>',
                ]);

            $this->insert('category', [
                'id' => 7,
                'name' => 'Игровые приставки',
                'icon' => '',
                'slug' => 'igrovyie-pristavki',
                'parent_id' => 1,
                'description' => '<p>Описание</p>',
            ]);  
				$this->insert('category', [
					'id' => 72,
					'name' => 'Игровые приставки',
					'icon' => '',
					'slug' => 'igrovyiepristavki',
					'parent_id' => 7,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 73,
					'name' => 'Рули и геймпады',
					'icon' => '',
					'slug' => 'ruli-i-geympadyi',
					'parent_id' => 7,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 74,
					'name' => 'Аксессуары',
					'icon' => '',
					'slug' => 'aksessuaryi-pristavki',
					'parent_id' => 7,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 75,
					'name' => 'Игры для приставок и ПК',
					'icon' => '',
					'slug' => 'igryi-dlya-pristavok-i-pk',
					'parent_id' => 7,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 76,
					'name' => 'Мультиплатформенные приставки',
					'icon' => '',
					'slug' => 'multiplatformennyie-pristavki',
					'parent_id' => 7,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 77,
					'name' => 'Карты оплаты',
					'icon' => '',
					'slug' => 'kartyi-oplatyi',
					'parent_id' => 7,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 78,
					'name' => 'Квадрокоптеры',
					'icon' => '',
					'slug' => 'kvadrokopteryi',
					'parent_id' => 7,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 79,
					'name' => 'Игры для классических приставок',
					'icon' => '',
					'slug' => 'igryi-dlya-klassicheskih-pristavok',
					'parent_id' => 7,
					'description' => '<p>Описание</p>',
				]);
            $this->insert('category', [
                'id' => 8,
                'name' => 'Техника для авто',
                'icon' => '',
                'slug' => 'tehnika-dlya-avto',
                'parent_id' => 1,
                'description' => '<p>Описание</p>',
            ]);
				$this->insert('category', [
					'id' => 80,
					'name' => 'Видеорегистраторы',
					'icon' => '',
					'slug' => 'videoregistratoryi',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 81,
					'name' => 'Автомагнитолы',
					'icon' => '',
					'slug' => 'avtomagnitolyi',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 82,
					'name' => 'Автоакустика',
					'icon' => '',
					'slug' => 'avtoakustika',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 83,
					'name' => 'Радар-детекторы',
					'icon' => '',
					'slug' => 'radar-detektoryi',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 84,
					'name' => 'Усилители',
					'icon' => '',
					'slug' => 'usiliteli',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 85,
					'name' => 'FM-трансмиттеры',
					'icon' => '',
					'slug' => 'fm-transmitteryi',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 86,
					'name' => 'Аксессуары',
					'icon' => '',
					'slug' => 'auto-aksessuaryi',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 87,
					'name' => 'Антенны',
					'icon' => '',
					'slug' => 'antennyi',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 88,
					'name' => 'Бортовые компьютеры',
					'icon' => '',
					'slug' => 'bortovyie-kompyuteryi',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 89,
					'name' => 'Камеры заднего вида',
					'icon' => '',
					'slug' => 'kameryi-zadnego-vida',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 90,
					'name' => 'Парктроники',
					'icon' => '',
					'slug' => 'parktroniki',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 91,
					'name' => 'Радиостанции',
					'icon' => '',
					'slug' => 'radiostantsii',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 92,
					'name' => 'Телевизоры и мониторы',
					'icon' => '',
					'slug' => 'televizoryi-i-monitoryi',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 93,
					'name' => 'Чейнджеры',
					'icon' => '',
					'slug' => 'cheyndzheryi',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 94,
					'name' => 'Устройства громкой связи',
					'icon' => '',
					'slug' => 'ustroystva-gromkoy-svyazi',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 95,
					'name' => 'Алкотестеры',
					'icon' => '',
					'slug' => 'alkotesteryi',
					'parent_id' => 8,
					'description' => '<p>Описание</p>',
				]);
            $this->insert('category', [
                'id' => 9,
                'name' => 'Оптические приборы',
                'icon' => '',
                'slug' => 'opticheskie-priboryi',
                'parent_id' => 1,
                'description' => '<p>Описание</p>',
            ]);
				$this->insert('category', [
					'id' => 96,
					'name' => 'Бинокли',
					'icon' => '',
					'slug' => 'binokli',
					'parent_id' => 1,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 97,
					'name' => 'Телескопы',
					'icon' => '',
					'slug' => 'teleskopyi',
					'parent_id' => 1,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 98,
					'name' => 'Микроскопы',
					'icon' => '',
					'slug' => 'mikroskopyi',
					'parent_id' => 1,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 99,
					'name' => 'Приборы ночного видения',
					'icon' => '',
					'slug' => 'priboryi-nochnogo-videniya',
					'parent_id' => 1,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 100,
					'name' => 'Лупы',
					'icon' => '',
					'slug' => 'lupyi',
					'parent_id' => 1,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 101,
					'name' => 'Аксессуары',
					'icon' => '',
					'slug' => 'aksessuaryi',
					'parent_id' => 1,
					'description' => '<p>Описание</p>',
				]);
				$this->insert('category', [
					'id' => 102,
					'name' => 'Прицелы',
					'icon' => '',
					'slug' => 'pritselyi',
					'parent_id' => 1,
					'description' => '<p>Описание</p>',
				]);
    }

    public function down()
    {
        $this->delete('category');
    }


    /*public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m171029_152237_create_filling_table_categories cannot be reverted.\n";

        return false;
    }*/
}
