# How to install this project

1. Clone this repository git@github.com:imansyaefulloh/struktur-organisasi.git

$ git clone git@github.com:imansyaefulloh/struktur-organisasi.git

install dependency

```bash
$ composer install
```

2. create new database "struktur_organisasi"

3. copy example .env.example

```bash
$ cp .env.example .env
```

set application key

```bash
$ php artisan key:generate
```

4. edit env variable

```bash
DB_DATABASE=struktur_organisasi
DB_USERNAME=homestead
DB_PASSWORD=secret
```

5. run this command

run database migration

```bash
$ php artisan migrate
```

populate dummy data

```bash
$ php artisan db:seed 
```

run this application using laravel builtin server

```bash
$ php artisan serve
```

live demo => http://org.imansyaefulloh.com/

username => iman@gmail.com
password => secret