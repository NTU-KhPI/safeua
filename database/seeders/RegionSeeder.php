<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            [
                'name' => 'Черкаська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Чернігівська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Дніпровська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Донецька область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Харківська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Херсонська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Хмельницька область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Миколаївська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Полтавська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Вінницька область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Запорізька область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Житомирська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'м. Севастополь',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Крим',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Кіровоградська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Луганська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Сумська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'м. Київ',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Київська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Тернопільська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Чернівецька область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Івано-Франківська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Рівненська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Волинська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Львівська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Закарпатська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Одеська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
        ];
        DB::table('regions')->insert($regions);
    }
}
