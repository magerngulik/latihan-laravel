

# Catatan Belajar
Lihat dan perhatikan jika lupa lihat di sini saja.

## Migration 
- Untuk membuat migration bisa ketia membuat model dengan menggunakan snippet artisan ada juga key di terminal tapi yang paling mudah dengan snippet

## Tinker
tinker berfungsi untuk mengelola data di dalam database
### Untuk mengakses tinker bisa menggunakan kata kunci " php artisan tinker "
### tinker ini berbentuk class object deklaration jadi setiap objek harus di definisikan dulu di awal untuk mendefinisikan nya sebagia berikut:
-$nama_object = new App/Models/Nama_Model
-example:
-$post = new App/Models/Post;

### ketika sudah di akes tinker ini memiliki beberapa cara untuk mengolah data di antaranya:
- $post->all() untuk akses semua data yang ada di dalam database
- $post->find(id) ex: $post->find(1) untuk mencari data berdasarkan id
- $post-nama_column = "data dari column"
  example:
  * $post->product_name = "Product Pertama"
  * $post->price = 30000   
  * $post->qty = 50

- jika sudah semua filed dalam table tersebut terpenuhi maka kita bisa menggunakan perintah berikut ini untuk save data ke database
* $post->save()
- $post::where('id','2')->update(["title"=>"postingan ketiga"]) update data dalam fild dengan mengunakan where
- $post::find(2)->update(["title"=>"postingan ketiga"]) update data dalam fild dengan mengunakan where


### Route Model Binding
Jika kita ingin mencari sebuah data biasa nya menggunakan id atau sesuatu yang unique tapi dengan RMD kita bisa mencari field apapun di dalam laravel dengan keyword apa pun


* Route::get('/posts/{post:slug}', function (Post $post) {
*    return $post;
* });

Perlu di ingat nama nya harus sama antara nama di url dengan nama di dalam parameter function yang di gunakan hal ini juga harus terhubung langsung dengan model yang sudah di buat.


## Membuat model
- php artisan make:model -m Category buat model dan migration 
- php artisan help make:model untuk mengakses daftar apa saja yang bisa di buat 


## Catatan Untuk video ke 8 
- buat semua model dan migrasi dengan printah berikut 
    * php artisan make:model -m Category
- kemudian edit tambahkan column nama dan slug pada table category
    * $table->string('name')->unique();
    * $table->string('slug')->unique();
- selanjutkan buatlah column foreignKey di tabel post
    * $table->foreignId("category_id");
- refresh artisan migrate dengan kode berikut:
    * php artisan migrate:fresh
- isi data category dengan create atau manual satu persatu
    * satu persatu 
    `$category->name ="Programing"`
    `$category->slug ="programing"`
    `$category->save()`

    * dengan create
    `$category::create([`
        `"name" => "Programing",`
        `"slug" => "programing"`
    `])`

- jangan lupa untuk mengizinkan ada nya masuk di file model
   `protected $fillable = ["title", "excerpt","body"];` Menseleksi semua yang ingin masuk
   `protected $guarded = ["id"];` Menseleksi semua yang ingin di lindungi

- selanjutnya input data post yang sudah memiliki category id dengan tinker create
    * example
    `$post::create([`
        `"title"=>"Postingan Ke Ketiga",`
        `"category_id" => 2,`
        `"slug"=>"postingan-ke-ketiga",`
        `"excerpt"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi eveniet atque ut exercitationem nesciunt modi",`
        `"body"=> "<p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi eveniet atque ut exercitationem nesciunt modi. Et,` `dolores adipisci dignissimos quo distinctio ipsum officia, sit nulla delectus possimus recusandae nostrum facere placeat aliquid ab.` `Vero laudantium ex cum ullam repudiandae natus non veniam explicabo labore est aperiam alias porro consequatur beatae necessitatibus` `doloremque modi,</p>`
        `<p> velit ut rerum? Ipsum ipsa cumque, consequuntur quae facere sit nulla maiores odio exercitationem officia molestiae molestias` `tenetur veritatis. Fuga impedit optio corrupti officiis atque, nesciunt nisi eius repudiandae quibusdam sunt ea numquam vitae amet` `ipsum porro aliquid facilis enim asperiores sequi quaerat, odio cum. Esse rerum sapiente suscipit provident fuga neque placeat!` `Temporibus, enim nihil molestias earum tempora adipisci, aliquid soluta commodi itaque nam, perspiciatis quam.</p>`
        `<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum cupiditate dolorem sunt eveniet! Minima quibusdam debitis` `voluptates amet ex veniam, deleniti sit vel, commodi placeat similique optio, a perspiciatis consequuntur beatae iure aspernatur nam.` `Officiis minus eos ipsam consectetur ipsa omnis quos voluptas sunt blanditiis perspiciatis, libero quod molestiae saepe.</p>",`
    `]);`

- untuk melihat data yang sudah di seleksi dengan where bisa menggunakan perintah berikut 
 `$post::where('category_id',1)->get()`

## Untuk lebih memahami tentang relationship maka anda bisa melihat gambar berikut:
![App Screenshot](https://raw.githubusercontent.com/magerngulik/latihan-laravel/main/public/img/1.png)

- untuk menghubungkan antara model post dan category harus di definisikan seperti berikut ini:
    * many to one(dimiliki)
    `Post{`
    `public function category()`
    `{`
        `return $this->belongsTo(Category::class);`
    `}`
    `}`

    * one to many(memiliki)
    `Category{`
    `public function post()`
    `{`
        `return $this->hasMany(Post::class);`
    `}`
    `}`

- Sekarang tinggal panggil di dalam view 
`<p> By Sandika Galih in {{ $post->category->name }}</p>`

- bikin view untuk menghandle category dan categories



## Catatan Untuk video ke 9 
Di video ke 9 ini akan membahas yang nama nya seeder, sederhananya perintah ini akan mempermudah dalam mumbuat data dummy di dalam database kita ketika pembuatan

-lokasi
`database\seeders\`

- berfungsi untuk melakukan running di dalam file databaseSeeder
`php artisan db:seed`

- bisa juga ketika kita melakukan migration dengan menambahkan `--seed` pada akhir migration seperti berikut ini:
`php artisan migrate:fresh --seed`

## catatan untuk video ke 10
pada awal di video 10 kita akan mengenal library faker yang di gunakan untuk membuat data dummy bisa di akses di web berikut:
https://fakerphp.github.io/formatters/

cara untuk mengubah settingan faker pada laravel ke bahasa indonesia sebagai berikut:
- buka file `config\app` kemudia serching faker 
- edit file faker tersebut seperti berikut ini: 
`'faker_locale' => env('FAKER_LOCALE','en_US'),`
- langkah selanjutnya buka file .env lalu buat perintah beriut di paling bawah
`FAKER_LOCALE =id_ID`

- langkah membuat factory bisa menggunakan snippet atau menggunakan terminal:
`php artisan make:factory` hanya factory saja
`php artisan make:factory -mfs` dengan migration factory dan seeder

- untuk mendapatkan data berdasarkan urutan terahir dari uid
`"posts"=> Post::latest()->get()`


## catatan untuk video ke 11
pertama kita akan mengatasi permasalahan n + 1 problem dimana ini terjadi diakibatkan data yang kita ambil itu melakukan query ke db secara berulang ulang untuk mengetahui berapa jumlah data query yang kita panggil kita bisa menggunakan sebuah extension dari laravel yang bernama clockwork 
- cara install clockwork
    * kunjugi situs berikut  
    `https://underground.works/clockwork/`
    * kemudian install dengan komposer di directory project kita
    `composer require itsgoingd/clockwork`
    * lalu install clockwork extension di pada browser chrome dengan kata kunci clock work
- cara pakai clock work
    * klik kanan pada bagian browser project kita lalu klik kanan inspect element -> clockwork

- untuk mengatasi permasalahan n+1 ini laravel sudah menyediakan yang nama nya eager loading yang akan memuat seluruh data hasil join ke table lain sekalian ketika perintah pertama di mulai lengkapnya bisa di baca di sini
    * https://laravel.com/docs/5.2/eloquent-relationships#eager-loading

- cara menggunakan eager loading 
untuk menggunakan eager loading kita bisa menggunakan kata kunci `with`

- ada 2 cara untuk melakukan eager loading ini yaitu dengan memangguilnya langsung ketika mengakses model atau dengan menuliskan nya langsung di dalam model tersebut
    * contoh 1:
        ```php
        public function index(){
        return view('posts',[
            "title"=> "All Post",
            "posts"=> Post::with(['category','author'])->latest()->get()
        ]);
    } 

    * contoh 2: terkadang kita membutuhkan data setelah model utama di load seperti menggunakan route model binding cara ini tidak bisa menggunakan eager loadin tetapi bisa bisa menggunakan cara yang lain yang di sebut *lazy eager loading* yang menggunakan kata kunci *load*
    * untuk lengkapnya bisa baca di sini: https://laravel.com/docs/5.2/eloquent-relationships#lazy-eager-loading

          ```php

        Route::get('/authors/{author:username}',function (User $author){
                                                //ini route model binding
            return view('posts',
            [
                "title" => "Post By Author: $author->name",
                "posts" => $author->post->load('author','category'),
                                        //fungsi load di sini  
            ]
            );
        });
















