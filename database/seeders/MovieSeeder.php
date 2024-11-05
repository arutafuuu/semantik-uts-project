<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'genre' => 'Fantasy, Adventure',
                'photo' => 'images/Ef2mPzt7oxYonv5bFrADW44NHc5ybignEa4FWRma.jpg',
                'age_restriction' => 12,
                'rating' => 7.6,
                'duration' => 152,
                'trailer' => 'https://youtu.be/VyHV0BRtdxo?si=EfbDvROGCSyMfFcm',
                'release_date' => '2001-11-16',
                'director' => 'Chris Columbus',
                'description' => 'Harry Potter discovers he is a wizard and attends Hogwarts, where he makes friends and uncovers his family history.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Harry Potter and the Chamber of Secrets',
                'genre' => 'Fantasy, Adventure',
                'photo' => 'images/Knn2rdEXHVP0f4bs2fUzhQjDQaxPZZQ7c14vybv4.jpg',
                'age_restriction' => 12,
                'rating' => 7.4,
                'duration' => 161,
                'trailer' => 'https://youtu.be/nE11U5iBnH0?si=lBf1py8uJC9IFH54',
                'release_date' => '2002-11-15',
                'director' => 'Chris Columbus',
                'description' => 'Harry returns to Hogwarts for his second year and uncovers the mystery of the Chamber of Secrets.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Harry Potter and the Prisoner of Azkaban',
                'genre' => 'Fantasy, Adventure, Mystery',
                'photo' => 'images/QMvLxOUwY0AGEgx0TzwoL6Hp55H2PXFbhTIyGKmm.jpg',
                'age_restriction' => 13,
                'rating' => 7.9,
                'duration' => 142,
                'trailer' => 'https://youtu.be/VwErvYgoH70?si=yLdQv9hgQRYZyzkN',
                'release_date' => '2004-05-31',
                'director' => 'Alfonso Cuarón',
                'description' => 'Harry learns about his godfather Sirius Black, who has escaped from prison and is believed to be after him.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Harry Potter and the Goblet of Fire',
                'genre' => 'Fantasy, Adventure',
                'photo' => 'images/dvGwVyVnL6iV7SXxGLfobKvNGDaws0qHVvBgUfD5.jpg',
                'age_restriction' => 13,
                'rating' => 7.7,
                'duration' => 157,
                'trailer' => 'https://youtu.be/80kuiBq95So?si=aezLJRxMoYGkgTOl',
                'release_date' => '2005-11-06',
                'director' => 'Mike Newell',
                'description' => 'Harry is mysteriously entered into the Triwizard Tournament and faces challenges that bring him face to face with Voldemort.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Chronicles of Narnia: The Lion, the Witch, and the Wardrobe',
                'genre' => 'Fantasy, Adventure',
                'photo' => 'images/tUM58Tng0EkfpOFjkounYVO186q9qSb74RbH8YIz.jpg',
                'age_restriction' => 10,
                'rating' => 6.9,
                'duration' => 143,
                'trailer' => 'https://youtu.be/usEkWtuNn-w?si=RSRfyCvezBQ8ryEs',
                'release_date' => '2005-12-09',
                'director' => 'Andrew Adamson',
                'description' => 'Four siblings discover the magical land of Narnia and join forces with Aslan to defeat the White Witch.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Chronicles of Narnia: Prince Caspian',
                'genre' => 'Fantasy, Adventure',
                'photo' => 'images/wtCcvyjV1I6DsQb4ELdKb9Ne7YeFHWtjn7Yro1O1.jpg',
                'age_restriction' => 10,
                'rating' => 6.5,
                'duration' => 150,
                'trailer' => 'https://youtu.be/zZfDS5eu7fA?si=LY4_xslpF-u4U9SY',
                'release_date' => '2008-05-16',
                'director' => 'Andrew Adamson',
                'description' => 'The Pevensies return to Narnia to help Prince Caspian reclaim his throne from an evil usurper.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Chronicles of Narnia: The Voyage of the Dawn Treader',
                'genre' => 'Fantasy, Adventure',
                'photo' => 'images/mdGtyeHHMnMTeZaQlI82q3SAEF2YAAUbLYJKcC0x.jpg',
                'age_restriction' => 10,
                'rating' => 6.3,
                'duration' => 113,
                'trailer' => 'https://youtu.be/AON1-Ox-Llc?si=xWwlCSybsMTg84GI',
                'release_date' => '2010-12-10',
                'director' => 'Michael Apted',
                'description' => 'Lucy, Edmund, and their cousin Eustace join Prince Caspian on a journey to find seven lost lords of Narnia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Lord of the Rings: The Fellowship of the Ring',
                'genre' => 'Fantasy, Adventure',
                'photo' => 'images/C3HNbUOJIyOWPP8NVamBjAKZDHB6MysGiETZNrjU.jpg',
                'age_restriction' => 13,
                'rating' => 8.8,
                'duration' => 178,
                'trailer' => 'https://youtu.be/_e8QGuG50ro?si=HzTCMN0JuBIFTEVk',
                'release_date' => '2001-12-10',
                'director' => 'Peter Jackson',
                'description' => 'Frodo Baggins embarks on an epic journey to destroy the One Ring and defeat Sauron, the Dark Lord.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Interstellar',
                'genre' => 'Sci-Fi, Adventure, Drama',
                'photo' => 'images/YPkFMYGvfC4TWaQ9Fw13QTr4Jtovdpb9zII9GZBw.jpg',
                'age_restriction' => 13,
                'rating' => 8.6,
                'duration' => 169,
                'trailer' => 'https://youtu.be/zSWdZVtXT7E?si=jKgQEwbIURBopPq6',
                'release_date' => '2014-11-07',
                'director' => 'Christopher Nolan',
                'description' => 'A group of astronauts travels through a wormhole in search of a new home for humanity as Earth becomes uninhabitable.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Negeri 5 Menara',
                'genre' => 'Drama',
                'photo' => 'images/W2YXjUqGavyTKAxDQMrSwC4DDvWsjElWCzxaQjzp.jpg',
                'age_restriction' => 7,
                'rating' => 7.1,
                'duration' => 115,
                'trailer' => 'https://youtu.be/jF2dZii3-JQ?si=iO_pAOcKmFR57e9f',
                'release_date' => '2012-02-01',
                'director' => 'Affandi Abdul Rachman',
                'description' => 'Alif, a boy from a rural area, finds friendship and inspiration while studying at an Islamic boarding school.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
