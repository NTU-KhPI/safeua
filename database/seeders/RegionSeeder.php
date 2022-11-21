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
                'name' => 'Cherkasy',
                'title' => 'Черкаська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Chernihiv',
                'title' => 'Чернігівська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Dnipro',
                'title' => 'Дніпровська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Donetsk',
                'title' => 'Донецька область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Kharkiv',
                'title' => 'Харківська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Kherson',
                'title' => 'Херсонська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Khmelnytskyy',
                'title' => 'Хмельницька область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Mykolayiv',
                'title' => 'Миколаївська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Poltava',
                'title' => 'Полтавська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Vinnytsya',
                'title' => 'Вінницька область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Zaporizhzhya',
                'title' => 'Запорізька область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Zhytomyr',
                'title' => 'Житомирська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Sevastpol',
                'title' => 'м. Севастополь',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Crimea',
                'title' => 'Крим',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Kirovohrad',
                'title' => 'Кіровоградська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Luhansk',
                'title' => 'Луганська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Sumy',
                'title' => 'Сумська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Kyiv-сity',
                'title' => 'м. Київ',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Kyiv',
                'title' => 'Київська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Ternopil',
                'title' => 'Тернопільська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Chernivtsi',
                'title' => 'Чернівецька область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Ivano-Frankivsk',
                'title' => 'Івано-Франківська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Rivne',
                'title' => 'Рівненська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Volyn',
                'title' => 'Волинська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Lviv',
                'title' => 'Львівська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Transcarpathia',
                'title' => 'Закарпатська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
            [
                'name' => 'Odessa',
                'title' => 'Одеська область',
                'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repudiandae commodi inventore quis
                itaque maiores dolores suscipit dolorem, excepturi, laudantium placeat ea ab beatae voluptatum eos
                aspernatur? Reprehenderit libero fugit soluta cumque ipsum.',
                'photo' => 'Zaporizhzhya.jpg',
            ],
        ];
        DB::table('regions')->insert($regions);
    }
}