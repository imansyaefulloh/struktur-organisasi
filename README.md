# How to install this project

1. Clone this repository git@github.com:imansyaefulloh/struktur-organisasi.git

# git clone git@github.com:imansyaefulloh/struktur-organisasi.git

2. create new database "struktur_organisasi"

3. copy example .env.example

# cp .env.example .env

// set application key
# php artisan key:generate

4. edit env variable

```bash
DB_DATABASE=struktur_organisasi
DB_USERNAME=homestead
DB_PASSWORD=secret
```

5. run this command

// run database migration
# php artisan migrate

// populate dummy data
# php artisan db:seed 

// run this application using laravel builtin server
# php artisan serve


// login using
username => iman@gmail.com
password => secret