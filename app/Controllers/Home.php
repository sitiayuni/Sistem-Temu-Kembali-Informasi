<?php

namespace App\Controllers;
ini_set('max_execution_time', 0);
class Home extends BaseController
{
    public function publikasi(): string
    {
        return view('publikasi');
    }

    public function info(): string
    {
        return view('info');
    }

    public function search()
    {
        // $selectedOption = $this->request->getPost('faculty');
        // $searchText = $this->request->getPost('search_text');

        // $selectedText = $this->getFacultyText($selectedOption);

        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $kueri = $this->request->getPost('search_text');
            $data = [
                'kueri' => $kueri,
                
            ];
        
            $options = [
                'http' => [
                    'method' => 'POST',
                    'header' => 'Content-type: application/x-www-form-urlencoded',
                    'content' => http_build_query($data),
                ],
            ];
        
            $context = stream_context_create($options);
            $result = file_get_contents('http://127.0.0.1:8000/cari2', false, $context);
        
            $data = json_decode($result, true);
            
            // Mengecek apakah penguraian JSON berhasil
            if ($data === null) {
                die('Gagal mengurai JSON dari API.');
            }

            return view('search', [
                'searchText' => $data
            ]);
        }
    }

    private function getFacultyText($value)
    {
        switch ($value) {
            case '1':
                return 'Fakultas Ekonomi dan Bisnis';
            case '2':
                return 'Fakultas Hukum';
            case '3':
                return 'Fakultas Pertanian';
            case '4':
                return 'Fakultas Keguruan dan Ilmu Pendidikan';
            case '5':
                return 'Fakultas Teknik';
            case '6':
                return 'Fakultas Ilmu Sosial dan Ilmu Politik';
            case '7':
                return 'Fakultas Matematika dan Ilmu Pengetahuan Alam';
            case '8':
                return 'Fakultas Kedokteran';
            default:
                return 'Semua';
        }
    }
}
