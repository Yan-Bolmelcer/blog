<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 1.1 Blog [CRUD]</h1>
    <br>
</p>

## УСТАНОВКА

### ТРЕБОВАНИЯ

- PHP 7.2
- MySql 8.0
- Yii 1.1

### УСТАНОВКА ФРЕЙМВОРКА 

- Yii 1.1 уже установлен, нужно изменить путь в файле `index.php` (пример):
```php
  $yii=dirname(__FILE__).'/../blog/framework/yii.php';
  ```

### СЕРВЕР

Для тестирования (локально):
- OpenServer 5.4.3 +
- Apache 2.4 (PHP 7.2 - 7.4)
- MySql 8.0

### КЛОНИРОВАНИЕ РЕПОЗИТОРИЯ 

1. Скопируйте URL репозитория с GitHub.
2. Откройте терминал и выполните команду:

   ```bash
   git clone https://github.com/Yan-Bolmelcer/blog.git
   cd ваш_репозиторий
   ```


### БАЗА ДАННЫХ
- Отредактируйте файл `protected/config/main.php` с реальными данными, например:

```php
return array(
	'connectionString' => 'mysql:host=localhost;dbname=blog',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '1234',
	'charset' => 'utf8',

);
```
- Создание БД:

```sql
CREATE DATABASE blog;
USE blog;
```
- Импорт данных (в корне проекта будет помещен файл для импорта БД `blog.sql`)

### ЗАПУСК

Запуск производится любым удобным способом.


### ПОЛЬЗОВАТЕЛИ ДЛЯ АВТОРИЗАЦИИ

- Логин: Oleg, Petr, Alena
- Пароль: password
