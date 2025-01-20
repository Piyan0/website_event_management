<?php

namespace Database\Seeders;
use App\Models\Event;
use App\Models\User;
use App\Models\Comment;
use App\Models\History;
use App\Models\Bookmark;
use App\Models\Tag;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  */
  public function run(): void
  {
    $TAG_SOCIAL = 1;
    $TAG_GAMING = 2;
    $TAG_FORUM = 3;
    $TAG_HOBI = 4;
    $TAG_SPORT = 5;
    
    $data = [
      [
        "tittle" => "Pesta Rakyat Merdeka",
        "location" => "Lapangan Merdeka",
        "date" => "2024-08-17",
        "time" => "16:00",
        "description" => "Perayaan kemerdekaan dengan berbagai hiburan, lomba, dan kuliner.",
        "tag_id" => $TAG_SOCIAL
      ],
      [
        "tittle" => "Lomba Lari 10K",
        "location" => "Stadion Utama",
        "date" => "2024-09-01",
        "time" => "07:00",
        "description" => "Lomba lari untuk semua usia dengan hadiah menarik.",
        "tag_id" => $TAG_SPORT
      ],
      [
        "tittle" => "Turnamen Esports Mobile Legends",
        "location" => "Warnet Ternama",
        "date" => "2024-09-15",
        "time" => "13:00",
        "description" => "Kompetisi Mobile Legends dengan hadiah jutaan rupiah.",
        "tag_id" => $TAG_GAMING
      ],
      [
        "tittle" => "Kelas Lukis Pemula",
        "location" => "Galeri Seni Kota",
        "date" => "2024-09-22",
        "time" => "10:00",
        "description" => "Belajar dasar-dasar melukis dengan instruktur profesional.",
        "tag_id" => $TAG_HOBI
      ],
      [
        "tittle" => "Diskusi Buku Sastra Indonesia",
        "location" => "Perpustakaan Kota",
        "date" => "2024-09-29",
        "time" => "15:00",
        "description" => "Diskusi tentang karya-karya sastra Indonesia terkini.",
        "tag_id" => $TAG_FORUM
      ],
      [
        "tittle" => "Festival Musik Tradisional",
        "location" => "Alun-alun Kota",
        "date" => "2024-10-06",
        "time" => "19:00",
        "description" => "Pentas musik tradisional dari berbagai daerah di Indonesia.",
        "tag_id" => $TAG_SOCIAL
      ],
      [
        "tittle" => "Turnamen Futsal Antar-kampus",
        "location" => "Gedung Olahraga",
        "date" => "2024-10-13",
        "time" => "14:00",
        "description" => "Kompetisi futsal antar-kampus dengan hadiah menarik.",
        "tag_id" => $TAG_SPORT
      ],
      [
        "tittle" => "Turnamen Game DOTA 2 Online",
        "location" => "Online",
        "date" => "2024-10-20",
        "time" => "19:00",
        "description" => "Kompetisi DOTA 2 online dengan hadiah menarik.",
        "tag_id" => $TAG_GAMING
      ],
      [
        "tittle" => "Kelas Fotografi Dasar",
        "location" => "Studio Fotografi",
        "date" => "2024-10-27",
        "time" => "09:00",
        "description" => "Belajar teknik-teknik dasar fotografi.",
        "tag_id" => $TAG_HOBI
      ],
      [
        "tittle" => "Diskusi tentang Perkembangan Teknologi",
        "location" => "Ruang Seminar Universitas",
        "date" => "2024-11-03",
        "time" => "10:00",
        "description" => "Diskusi tentang isu-isu terkini dalam dunia teknologi.",
        "tag_id" => $TAG_FORUM
      ],
      [
        "tittle" => "Pameran Seni Rupa Kontemporer",
        "location" => "Galeri Seni Modern",
        "date" => "2024-11-10",
        "time" => "10:00",
        "description" => "Pameran karya seni rupa dari seniman-seniman muda.",
        "tag_id" => $TAG_SOCIAL
      ],
      [
        "tittle" => "Lomba Renang Antar-klub",
        "location" => "Kolam Renang Olimpiade",
        "date" => "2024-11-17",
        "time" => "08:00",
        "description" => "Kompetisi renang antar-klub dengan kategori usia yang beragam.",
        "tag_id" => $TAG_SPORT
      ],
      [
        "tittle" => "Turnamen Game PUBG Mobile",
        "location" => "Warnet Gaming",
        "date" => "2024-11-24",
        "time" => "15:00",
        "description" => "Kompetisi PUBG Mobile dengan hadiah menarik.",
        "tag_id" => $TAG_GAMING
      ],
      [
        "tittle" => "Kelas Tari Tradisional Jawa",
        "location" => "Sanggar Seni",
        "date" => "2024-12-01",
        "time" => "16:00",
        "description" => "Belajar menari tradisional Jawa dengan instruktur berpengalaman.",
        "tag_id" => $TAG_HOBI
      ],
      [
        "tittle" => "Diskusi tentang Pendidikan Karakter",
        "location" => "Aula Sekolah",
        "date" => "2024-12-08",
        "time" => "13:00",
        "description" => "Diskusi tentang pentingnya pendidikan karakter bagi anak-anak.",
        "tag_id" => $TAG_FORUM
      ],
      [
        "tittle" => "Festival Film Dokumenter",
        "location" => "Bioskop Kota",
        "date" => "2024-12-15",
        "time" => "19:00",
        "description" => "Pemutaran film dokumenter terbaik dari berbagai negara.",
        "tag_id" => $TAG_SOCIAL
      ],
      [
        "tittle" => "Lomba Sepeda Gunung",
        "location" => "Jalur Pendakian",
        "date" => "2024-12-22",
        "time" => "08:00",
        "description" => "Lomba sepeda gunung dengan berbagai kategori kesulitan.",
        "tag_id" => $TAG_SPORT
      ],
      [
        "tittle" => "Turnamen Game Counter-Strike=>Global Offensive",
        "location" => "Warnet Gaming",
        "date" => "2024-12-29",
        "time" => "14:00",
        "description" => "Kompetisi CS:GO dengan hadiah menarik.",
        "tag_id" => $TAG_GAMING
      ],
      [
        "tittle" => "Kelas Memasak Kue Tradisional",
        "location" => "Balai Desa",
        "date" => "2025-01-05",
        "time" => "10:00",
        "description" => "Belajar membuat berbagai jenis kue tradisional Indonesia.",
        "tag_id" => $TAG_HOBI
      ],
      [
        "tittle" => "Diskusi tentang Literasi Digital",
        "location" => "Ruang Kelas Universitas",
        "date" => "2025-01-12",
        "time" => "14:00",
        "description" => "Diskusi tentang pentingnya literasi digital di era informasi.",
        "tag_id" => $TAG_FORUM
      ]

    ];
    
    $tag_data= [
      "Sosial", "Gaming", "Forum", "Hobi", "Sport"
      ];
    
    foreach($tag_data as $tag){
      Tag::create([
        "tag_name"=> $tag
        ]);
    }
    
    foreach($data as $i){
      Event::create([
        "tittle"=> $i["tittle"],
        "location"=> $i["location"],
        "date"=> $i["date"],
        "time"=> $i["time"],
        "description"=> $i["description"],
        "tag_id"=> $i["tag_id"]
        ]);
    }
    
    User::create([
      "name"=> "Piyan Apriyanto",
      "email"=> "sample@gmail.com",
      "password"=> "1234"
      ]);
      
    History::create([
      "user_id"=> 1,
      "event_id"=> 2
      ]);
    History::create([
      "user_id"=> 1,
      "event_id"=> 1
      ]);

  }
}