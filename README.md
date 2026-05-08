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
~ Credential theft
~ Account hijacking
~ Risiko reuse password