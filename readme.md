## For Chinese

[中文文档请点击这里](https://phphub.org/topics/1929)

## Description

[iseed](https://github.com/orangehill/iseed) is a Laravel package that provides a method to generate a new seed file based on data from the existing database table.

> This project was created by [The EST Group](http://est-group.org/) and [PHPHub](https://phphub.org/topics/1929).

## Screenshots

![](http://7xrxcg.com1.z0.glb.clouddn.com/c68ab3a16ae72dbecd344e81305d112d.png)

## Run the demo

You can refer to this [documentation](https://github.com/Aufree/laravel-packages-top100/blob/master/how-to-run-a-laravel-project.md) to know how to run this demo.

## Table of contents

1. Installation;
2. Basic Usage;
3. Recommend Usage;
4. More Usage.


### Installation

1). Require this package in your composer.json and update composer. This will download the package

```
composer require orangehill/iseed
```

2). After updating composer, add the ServiceProvider to the providers array in `config/app.php`

```php
'providers' => [
	...
	Orangehill\Iseed\IseedServiceProvider::class,
],
```

Done. Very simple, isn't it? :beers::beers::beers:

### Basic Usage

#### Export the specified tables

Just run this command:

```
php artisan iseed users
```

It will be generate `UsersTableSeeder.php` file.

You can also generate multiple seeder files at the same time, like:

```
php artisan iseed users,topics
```
it will be generate `UsersTableSeeder.php` and `TopicsTableSeeder.php` file.

#### Overwrite existing seeds -- force

Optional parameter which is used to automatically overwrite any existing seeds for desired tables.

```shell
php artisan iseed users --force
```

It will overwrite `UsersTableSeeder.php` file.

The `UsersTableSeeder.php` content is:

![](http://7xrxcg.com1.z0.glb.clouddn.com/f4147af61401615f9bd98e66c788a8be.png)

#### Specifies the DB -- database

Optional parameter which specifies the DB connection name:

```shell
php artisan iseed users --database=mysql2
```

### Recommend Usage

I advise you to use the package pack this way.

1. Import production database into a developer's computer;
2. The developer run `php artisan iseed ...` to generate the seeder files;
3. Submit all seeder files to the version management, then others can download the seeder files.

### More Usage

You can refer to the [documentation](https://github.com/orangehill/iseed) to learn more about this package.

---
欢迎关注 `LaravelTips`, 一个专注于为 Laravel 开发者服务, 致力于帮助开发者更好的掌握 Laravel 框架, 提升开发效率的微信公众号.

![](http://ww4.sinaimg.cn/large/76dc7f1bjw1f23moqj4qzj20by0bywfa.jpg)
