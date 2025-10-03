<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function index() {
        $videos = [
            [
                'id_video' => 1,
                'id_author' => 'Cha_Eunwoo',
                'deskripsi' => 'Kpop Dance Hunters Gods eye up with ...',
                'upload_date' => '2022-09-02',
                'views' => '21.5K',
                'likes' => 'N/A'
            ],
            [
                'id_video' => 2,
                'id_author' => 'Cha_Eunwoo',
                'deskripsi' => 'Second top Song Pop cover with Klien...',
                'upload_date' => '2022-09-02',
                'views' => '16.0K',
                'likes' => 'N/A'
            ],
            [
                'id_video' => 3,
                'id_author' => 'Cha_Eunwoo',
                'deskripsi' => 'Third viral K-pop space clip with ...',
                'upload_date' => '2022-09-02',
                'views' => '10.8K',
                'likes' => 'N/A'
            ],
            [
                'id_video' => 4,
                'id_author' => 'Cha_Eunwoo',
                'deskripsi' => 'Fourth high-class clip in front of ...',
                'upload_date' => '2022-09-02',
                'views' => '6.7K',
                'likes' => 'N/A'
            ],
            [
                'id_video' => 5,
                'id_author' => 'Cha_Eunwoo',
                'deskripsi' => 'Fifth viral dance video',
                'upload_date' => '2022-09-02',
                'views' => '5.9K',
                'likes' => 'N/A'
            ],
            [
                'id_video' => 6,
                'id_author' => 'BLACKPINK',
                'deskripsi' => 'KPOP music clone first 24h viral on ...',
                'upload_date' => '2022-09-01',
                'views' => '15.4K',
                'likes' => '2.4K'
            ],
        ];

        return view('videos', ['listvideo' => $videos]);
    }
}
