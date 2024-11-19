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

- Yii 1.1 нужно скачать с официального сайта, распаковать архив.
- Перейдите в папку, где установлен Yii (ниже пример): 
```bash
cd C:\OSPanel\domains\yii\framework
  ```
- Создайте новый проект с помощью команды:
  ```bash
php yiic webapp C:\OSPanel\domains\blog.local
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

Запуск производится любым удобным способом, я же воспользовался OpenServer.


### ПОЛЬЗОВАТЕЛИ ДЛЯ АВТОРИЗАЦИИ

Oleg, Petr, Alena

password
