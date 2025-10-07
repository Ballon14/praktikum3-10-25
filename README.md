# Laravel Video Project

Aplikasi Laravel sederhana untuk menampilkan data video dalam bentuk tabel.

## 📋 Requirements

Sebelum memulai, pastikan sistem Anda telah terinstall:

- PHP >= 8.1
- Composer
- Node.js & NPM
- Web Server (Apache/Nginx) atau bisa menggunakan Laravel built-in server

## 🚀 Cara Instalasi

### 1. Clone Repository

```bash
git clone <repository-url>
cd <nama-folder-project>
```

### 2. Install Dependencies PHP

```bash
composer install
```

### 3. Install Dependencies JavaScript

```bash
npm install
```

### 4. Setup Environment

Copy file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Build Assets (Tailwind CSS)

Untuk development:
```bash
npm run dev
```

Atau untuk production:
```bash
npm run build
```

## ▶️ Cara Menjalankan Project

### Opsi 1: Menggunakan Laravel Development Server

1. Buka terminal dan jalankan:
```bash
php artisan serve
```

2. Buka browser dan akses:
```
http://localhost:8000
```

### Opsi 2: Dengan Vite Dev Server (Recommended untuk Development)

1. Buka terminal pertama, jalankan Laravel server:
```bash
php artisan serve
```

2. Buka terminal kedua, jalankan Vite dev server:
```bash
npm run dev
```

3. Buka browser dan akses:
```
http://localhost:8000
```

## 📁 Struktur Project

```
├── app/
│   └── Http/
│       └── Controllers/
│           └── VideosController.php    # Controller untuk data video
├── resources/
│   └── views/
│       └── videos.blade.php           # Tampilan halaman video
├── routes/
│   └── web.php                        # Routing aplikasi
├── composer.json                      # Dependencies PHP
└── package.json                       # Dependencies JavaScript
```

## 🔗 Route yang Tersedia

- `/` - Halaman welcome
- `/videos` - Halaman daftar video

## 💡 Fitur

- Menampilkan data video dalam bentuk tabel
- Data video berisi:
  - ID Video
  - ID Author
  - Deskripsi
  - Upload Date
  - Views
  - Likes
- Styling menggunakan Tailwind CSS
- Hover effect pada baris tabel

## 🛠️ Troubleshooting

### Error: Class "App\Http\Controllers\VideosController" not found
```bash
composer dump-autoload
```

### CSS tidak muncul / Tailwind tidak bekerja
```bash
npm run build
# atau
npm run dev
```

### Port 8000 sudah digunakan
Jalankan server di port lain:
```bash
php artisan serve --port=8001
```

## 📝 Catatan

- Project ini menggunakan Laravel 10
- Tailwind CSS dikonfigurasi melalui Vite
- Data video saat ini menggunakan array statis di controller
- Untuk production, pastikan menjalankan `npm run build` sebelum deployment

## 📄 License

MIT License
