

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
![App Screenshot](https://raw.githubusercontent.com/magerngulik/sipador/main/assets/presentasi/1.png)



