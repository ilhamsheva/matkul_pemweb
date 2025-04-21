## Senin, 21 April 2025

Hari ini kita belajar cara mengedit di **admin panel**. Berikut adalah beberapa kode yang digunakan untuk mengonfigurasi panel admin:

- `protected static ?string $model = Product::class;`:  
  Berfungsi untuk menentukan **model** yang digunakan dalam panel admin.

- `protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';`:  
  Berfungsi untuk menentukan **ikon navigasi** yang ditampilkan di panel admin.

- `protected static ?string $navigationGroup = 'Product';`:  
  Berfungsi untuk mengelompokkan **item navigasi** dalam panel admin.

- `protected static ?string $navigationLabel = 'Product Manager';`:  
  Berfungsi untuk menentukan **label** yang ditampilkan untuk item navigasi di panel admin.

- `protected static ?string $breadcrumb = 'Product Manager';`:  
  Berfungsi untuk menentukan **jalur navigasi** yang ditampilkan di panel admin untuk item ini.

- `protected static ?string $pluralLabel = 'Product Settings';`:  
  Berfungsi untuk menentukan **label jamak** yang ditampilkan untuk item navigasi di panel admin.