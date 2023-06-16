Kerjakanlah tugas berikut dalam waktu maksimal 120 menit:
Agen X merupakan sebuah penyelenggara konser yang membutuhkan sebuah aplikasi untuk
menyediakan layanan pemesanan tiket konser secara online kepada masyarakat, sekaligus
mempermudah proses pengecekan di gerbang masuk konser.
Buatlah sebuah aplikasi web sederhana berbasis PHP (Laravel), untuk menjawab kebutuhan
Agen X.
Fitur/fungsi yang diperlukan:
1. Portal pemesanan tiket konser (terbuka untuk publik), berupa formulir pengisian
biodata. Output dari portal ini adalah berupa tiket yang memiliki nomor ID untuk dibawa
ke tempat konser pada hari H nanti.
2. Modul admin (hanya bisa diakses oleh staf Agen X, melalui sebuah laman login) untuk
melihat daftar pemesan, dan ada fungsi edit dan delete data.
3. Modul check-in (hanya bisa diakses oleh staf Agen X, melalui sebuah laman login)
untuk digunakan pada hari H konser, di gerbang masuk.
• Penonton membawa tiket yang telah dipesan, kemudian diberikan kepada staf
Agen X
• Kemudian staf Agen X menginputkan nomor ID tiket ke dalam sebuah form. Jika
nomor ID valid, maka munculkan biodata pemilik tiket dan update status untuk
tiket dengan nomor ID tersebut sudah terpakai (tiket tidak boleh dipakai 2 kali
check-in)
• Penonton dipersilakan masuk ke venue konser
4. Modul laporan (hanya bisa diakses oleh staf Agen X, melalui sebuah laman login) untuk
melihat daftar penonton yang sudah check-in, dan yang belum check-in.
