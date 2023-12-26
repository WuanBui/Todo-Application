<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Project Information:
- Final exam for Advanced Web Development subject at VNUK Institute for Research and Executive Education
- Student: Bùi Minh Quân
- Student ID: 21020005
- Lecturer: Nguyễn Hữu Quyền

## DEMO

(https://youtu.be/-DKK26qnymQ)

## Tech

Technologies used in this project:

- [Laravel](https://github.com/laravel/laravel) - The Laravel PHP framework.
- [Livewire](https://github.com/livewire/livewire) - Laravel Livewire.
- [Tailwind CSS](https://github.com/tailwindlabs/tailwindcss) - Tailwind.

## Database Structure

<p align="center">

![Alt text](db-1.JPG)

</p>

## Tạo API Document với Scramble

Scramble là trình tạo tài liệu OpenAPI (Swagger) cho Laravel. Nó tự động tạo tài liệu API cho dự án của bạn mà không yêu cầu bạn phải viết chú thích PHPDoc theo cách thủ công.

<p align="center">

![docapi](https://github.com/WuanBui/Todo-Application-with-Authentication/assets/118819560/93997b08-b7c3-4b3d-b930-7c1f5d1487c4)


</p>

## List features of projects and screenshots

#### Telescope

Laravel Telescope makes a wonderful companion to your local Laravel development environment. Telescope provides insight into the requests coming into your application, exceptions, log entries, database queries, queued jobs, mail, notifications, cache operations, scheduled tasks, variable dumps, and more.

<p align="center">
  
![telescope](https://github.com/WuanBui/Todo-Application-with-Authentication/assets/118819560/a2f1622b-4446-481d-a4e3-52647af74abe)


</p>

#### Laravel Pulse

Laravel Pulse delivers at-a-glance insights into your application's performance and usage. With Pulse, you can track down bottlenecks like slow jobs and endpoints, find your most active users, and more.

<p align="center">

![Alt text](Capture.JPG)

</p>

#### Task Creation

##### Login and Register:

<p align="center"
  
![Login](https://github.com/WuanBui/Todo-Application-with-Authentication/assets/118819560/bd543501-07c5-4ae3-b5bd-2349bf7c8de4)

&

![Register](https://github.com/WuanBui/Todo-Application-with-Authentication/assets/118819560/057f75a5-74f0-4da9-94d9-69b2661cb088)


</p>

##### Users can add tasks:

<p align="center">

![Addtask](https://github.com/WuanBui/Todo-Application-with-Authentication/assets/118819560/743ab2d1-5b82-4a4b-80e6-426b6a33840e)

</p>

##### Edit:

<p align="center">

![edit](https://github.com/WuanBui/Todo-Application-with-Authentication/assets/118819560/4b8d11a4-2883-4616-b1b3-9e0cf5a226a1)


</p>

##### Delete:

<p align="center">

![delete](https://github.com/WuanBui/Todo-Application-with-Authentication/assets/118819560/77a488b3-f7a6-4939-8970-06ffd90b6811)


</p>

## How to run the application

Install the dependencies and devDependencies:

```sh
$ cd TODOapp
$ composer install
```

Create your .env file and generate the application key:

```sh
$ cp .env.example .env
$ php artisan key:generate
```

Run migrations and start the server:

```sh
$ php artisan migrate
$ php artisan serve
```
