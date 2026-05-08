BUG 1 — Broken Authentication

Deskripsi:
Sistem login hanya memeriksa email tanpa memvalidasi password user.

BUG 2 — Broken Access Control:

Deskripsi
Endpoint admin dapat diakses tanpa authentication dan authorization.

BUG 3 — Plaintext Password

Deskripsi
Password user disimpan langsung ke database tanpa hashing.

4 Dampak Jika Dibiarkan
~ Password bocor
~ akses ilegal terhadap sistem
~ login tanpa password

perbaikan

~ Hash::make()
~ bcrypt hashing
Implementasi Laravel Sanctum
Pada branch yoga-fix, authentication diperbaiki menggunakan Laravel Sanctum.
Protected Route
Route::middleware('auth:sanctum')->group(function () {

});