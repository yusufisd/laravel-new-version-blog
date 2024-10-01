PROJE HAKKINDA:

Laravel'in son sürümü kullanılarak yazılmıştır. Klasik blog kategorisi ve blog yazısı CRUD işlemlerini sağlayan, kayıt ve giriş işlemlerini içeren aynı zamanda her blog girildiğinde abonelere mail gönderilmesinni sağlayan ufak bir proje. 

PROJE NASIL ÇALIŞTIRILIR?

Projeyi çalıştırmak için lokalinize kurduktan sonra 'composer install' komutunu terminalde çalıştırın. Daha sonra '.env' dosyanızı oluşturun. Kendi veritabanı ve smtp bilgilerinize göre ayarlamalarınızı yapın.

Veritabanı bağlantınızı da tamamladıktan sonra terminalde sırasıyla aşağıdaki komutları çalıştırın:
         - php artisan migrate
         - php artisan db:seed AuthorSeeder
         - php artisan db:seed BlogCategorySeeder
         - php artisan db:seed BlogSeeder

Projeniz artık çalışıyor.



         
