<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        // User::create([
        //     'name' => 'Shinei Nouzen',
        //     'email' => "Shinei@gmail.com",
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'akaya Nouzen',
        //     'email' => "akaya@gmail.com",
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Musashi Kishimoto',
            'slug' => 'musashi-kishimoto'
        ]);

        Category::create([
            'name' => 'Anonymous',
            'slug' => 'anonymous'
        ]);

        
        Category::create([
            'name' => 'Nishimura',
            'slug' => 'nishimura'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => '86 -EIGHTY SIX- 86-エイティシックス- Eiti Shikkusu',
        //     'slug' => 'eighty-six-86',
        //     'excerpt' => 'Sebuah manga adaptasi digambar oleh Motoki Yoshihara telah menjadi serial di Square Enix. Sebuah manga seinen di terbitkan pada majalah Young Gangan sejak 2018. Lalu adaptasi manga kedua berjudul Gakuen 86 karya Suzume Somemiya, rencananya akan diserial melalu Media Factory. Sebuah majalah manga bulanan, adaptasi serial anime produksi A-1 Pictures akan dijadwalkan tayang perdana pada April 2021.',
        //     'body' => 'Republik San Magnolia telah berperang dengan Kekaisaran Giad selama sembilan tahun.. Meskipun awalnya menderita kerugian yang menghancurkan dari Legion mekanik otonom Kekaisaran, Republik telah mengembangkan unit otonomnya sendiri, yang disebut Juggernaut, yang diarahkan dari jarak jauh oleh seorang Handler. Sementara di permukaan publik percaya perang sedang terjadi di antara mesin, kenyataannya jauh lebih mengerikan. Pada kenyataannya, Juggernaut diujicobakan oleh manusia dan semuanya berusia 86-an, sebutan yang diberikan kepada minoritas Colorata San Magnolia yang awalnya memiliki hak yang sama sebagai ras Alba yang dominan tetapi dianiaya dan dikambinghitamkan oleh pemerintah Alba yang dipimpin rasis untuk intinya Colorata dianggap bukan manusia, tidak diizinkan memiliki nama dan dipaksa tinggal di kamp interniran di Bangsal 86 sementara dipaksa bertempur dalam perang Republik dengan Kekaisaran untuk mendapatkan kemajuan.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Kage no Jitsuryokusha ni Naritakute! Shadow Gaiden',
        //     'slug' => 'the-eminence-in-shadow ',
        //     'excerpt' => '
        //     The Eminence in Shadow 陰の実力者になりたくて, Kage no Jitsuryokusha ni Naritakute! Merupakan seri novel Jepang yang ditulis oleh Daisuke Aizawa dan diilustrasikan oleh Tōzai. Series ini memulai debutnya secara online pada Mei 2018 di situs web penerbitan novel karya penggunanya Shōsetsuka ni Narō. Seri ini kemudian diakuisisi oleh Enterbrain dan telah menerbitkan empat volume sejak bulan November 2018.',
        //     'body' => 'Seperti pahlawan yang orang-orang banggakan di masa kecil mereka, seorang pemuda memiliki kekuatan tersebut bersembunyi di balik bayangan. Setelah menyembunyikan kekuatan dan kehidupan medioker sebagai rakyat jelata setiap harinya, sambil menjalani latihan keras di malam hari. Dia akhirnya bereinkarnasi ke dunia lain dan mendapatkan kekuatan terkuat. Pemuda yang hanya menggunakan kekuatannya di balik bayangan, rekan-rekannya yang salah paham, dan organisasi besar di dalam bayangan yang tengah hancur.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }

    
}
