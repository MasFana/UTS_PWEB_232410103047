# UTS Praktikum Pemrograman Berbasis Website  

Projek Laravel sederhana yang memuat sistem login manual, dashboard, profil pengguna, dan halaman pengelolaan data user.

Link: https://uts-pweb232410103047.up.railway.app/login
---

## Fitur Utama

- **Login Manual** menggunakan username & password.
- **Dashboard**: Menyambut user setelah login.
- **Profile**: Menampilkan info user yang sedang login.
- **Pengelolaan**: Menampilkan daftar user dari controller dalam bentuk tabel.
- **Blade Component**: Navbar & Footer reusable.

---

## Struktur Folder

```
/routes
└── web.php

/app/Http/Controllers
└── PageController.php

/resources/views
├── layouts/
│   └── app.blade.php
├── components/
│   ├── navbar.blade.php
│   └── footer.blade.php
├── login.blade.php
├── dashboard.blade.php
├── profile.blade.php
└── pengelolaan.blade.php

```

---

## Routing (routes/web.php)

```php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class,'index'])->name('dashboard');

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'login'])->name('login');

Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');

Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::get('/logout', [PageController::class, 'logout'])->name('logout');
````

---

## Controller: PageController.php

* Semua halaman diproses melalui controller `PageController`.
* Login dilakukan dengan mencocokkan input dari user terhadap array user statis.

### Contoh struktur array user:

```php
protected $users = [
    'admin' => [
        'username' => 'admin',
        'name' => 'Administrator',
        'role' => 'Admin',
        'email' => 'admin@mail.com',
        'password' => 'admin123',
    ],
    'adi' => [
        'username' => 'adi',
        'name' => 'King Adi',
        'role' => 'User',
        'email' => 'adi@mail.com',
        'password' => 'adi123',
    ],
    ...
];
```

---

## Halaman View

### 1. `login.blade.php`

Form login dengan input `username` dan `password`.

```blade
<form method="POST" action="{{ route('login') }}">
  @csrf
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit">Login</button>
</form>
```

### 2. `dashboard.blade.php`

Menampilkan:

```blade
Selamat Datang King {{ request('username') }}
```

### 3. `profile.blade.php`

Tampilkan detail lengkap user:

```blade
Nama: {{ $user['username'] }}
Email: {{ $user['email'] }}
Role: {{ $user['role'] }}
```

### 4. `pengelolaan.blade.php`

Loop dan tampilkan user dalam tabel:

```blade
@foreach($users as $user)
<tr>
  <td>{{ $user['username'] }}</td>
  <td>{{ $user['email'] }}</td>
  <td>{{ $user['role'] }}</td>
</tr>
@endforeach
```

---
## Halaman Layouts dan Components

### 1. `app.blade.php`

```blade
<body class="relative bg-black font-sans text-white">

   @if (!request()->is('login'))
      <x-navbar></x-navbar>
   @endif

   <div class="relative z-10">
      @yield('content')
   </div>
   @if (!request()->is('login'))
      <x-footer></x-footer>
   @endif
</body>
```

### 2. `navbar.blade.php`

### 3. `footer.blade.php`


## Menjalankan Proyek

1. Clone repositori:

   ```bash
   git clone https://github.com/MasFana/UTS_PWEB_232410103047
   cd UTS_PWEB_232410103047
   ```

2. Install dependency:

   ```bash
   composer install
   ```

3. Copy file `.env` dan generate key:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Jalankan server lokal:

   ```bash
   php artisan serve
   ```

5. Akses di browser:

   ```
   http://localhost:8000
   ```

---

## Catatan 

* Sistem login ini **tidak menggunakan autentikasi Laravel bawaan (Auth)**, hanya cocok untuk demo atau latihan.
* Tidak ada database yang digunakan, semua data user disimpan sebagai array di controller.
* Untuk logout cukup arahkan ke route `/logout` yang akan mengarahkan kembali ke halaman login.
