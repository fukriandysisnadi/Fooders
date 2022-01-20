<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    public function run()
    {
        DB::table('foods')->insert([
            ['name' => 'AyamGoreng', 'description' => 'Ayam yang telah direndam setelah berjam-jam lalu di goreng hingga crispy', 'category_id' => '1', 'price' => '20000', 'cover' => 'AyamGoreng.jpg', 'video' => 'https://www.youtube.com/embed/RFNcUvBhKQI'],
            ['name' => 'Rendang', 'description' => 'Dibuat dari daging sapi pilihan yang dipotong dalam keadaan sehat dan diolah menggunakan bumbu khas daerah padang asli. Sangat nikmat', 'category_id' => '1', 'price' => '20000', 'cover' => 'Rendang.jpg', 'video' => 'https://www.youtube.com/embed/DMcFqtm1lfY'],
            ['name' => 'NasiGoreng', 'description' => 'Nasi yang pulen ditambah dengan topping yang banyak dan fresh, lalu digoreng menjadi satu menggunakan bumbu rahasia dari Fooders', 'category_id' => '1', 'price' => '25000', 'cover' => 'NasiGoreng.jpg', 'video' => 'https://www.youtube.com/embed/Js9FXCkn798'],
            ['name' => 'Spaghetti', 'description' => 'Dipilih dari pasta yang berkualitas dan homemade. lalu dimasak dengan saus khusus dari Fooders yang berotentik italia', 'category_id' => '1', 'price' => '30000', 'cover' => 'Spaghetti.jpg', 'video' => 'https://www.youtube.com/embed/BmnoGc1fxew'],
            ['name' => 'BaksoKuah', 'description' => 'Bakso yang dibuat dari daging olahan dengan kualitas tinggi. Disajikan dengan kuah kaldu yang sangat kental dan nikmat', 'category_id' => '1', 'price' => '35000', 'cover' => 'Bakso.jpg', 'video' => 'https://www.youtube.com/embed/TL-I7c1Ysos'],
            ['name' => 'Pempek', 'description' => 'Dibuat dengan ikan tenggiri segar dengan 100% daging utuh tanpa adanya kulit ataupun bahan lainnya', 'category_id' => '1', 'price' => '40000', 'cover' => 'Pempek.jpg', 'video' => 'https://www.youtube.com/embed/N8qzKpXPlWA'],
            ['name' => 'EsJeruk', 'description' => 'Dari buah jeruk pilihan yang memiliki kadar manis murni yang tinggi dan juga sehat saat dikonsumsi', 'category_id' => '2', 'price' => '15000', 'cover' => 'EsJeruk.jpg', 'video' => 'https://www.youtube.com/embed/syiyhcltYa0'],
            ['name' => 'JusBuah', 'description' => 'Dibuat dari buah yang masih fresh dan segar kemudian langsung di jus tanpa menggunakan gula.', 'category_id' => '2', 'price' => '18000', 'cover' => 'JusBuah.jpg', 'video' => 'https://www.youtube.com/embed/0uaAlMurttE'],
            ['name' => 'EsTehManis', 'description' => 'Diseduh dari daun teh hijau pilihan yang dicampur dengan gula dan juga es batu', 'category_id' => '2', 'price' => '10000', 'cover' => 'EsTehManis.jpg', 'video' => 'https://www.youtube.com/embed/dHhOXtZwDd4'],
            ['name' => 'EsTeller', 'description' => 'Minuman es khas jawa tengah ini dikemas dalam beberapa buah yang ditambahkan es serut lalu dilettakan susu kental manis dan sirum diatas es serutnya', 'category_id' => '2', 'price' => '22000', 'cover' => 'EsTeller.jpg', 'video' => 'https://www.youtube.com/embed/mgzM8QMylok'], 
            ['name' => 'KentangGoreng', 'description' => 'Diambil dari kentang segar pilihan yang diambil dan dipotong menggunakan mesin kemudian digoreng hingga matang', 'category_id' => '3', 'price' => '19000', 'cover' => 'KentangGoreng.jpg', 'video' => 'https://www.youtube.com/embed/HSGGGSOebh0'],
            ['name' => 'OnionRing', 'description' => 'Diambil dari bawang bombay yang bagus dan masih fresh yang kemudian dipotong dan dibaluri tepung lalu di goreng hingga matang.', 'category_id' => '3', 'price' => '17000', 'cover' => 'OnionRing.jpg', 'video' => 'https://www.youtube.com/embed/JyP8rRYfHDE'],
            ['name' => 'CurlyFries', 'description' => 'Diambil dari kentang segar pilihan yang diambil dan dipotong  bergelombang menggunakan mesin kemudian digoreng hingga matang', 'category_id' => '3', 'price' => '20000', 'cover' => 'CurlyFries.jpg', 'video' => 'https://www.youtube.com/embed/4RFy3grxV7E'],
        ]);
    }
}
