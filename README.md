
#### Тестовый проект через командную строку о пользователях и их обязанностях

Установка:
1) Развернуть у себя репозиторий:
- git clone ... (link of repositiry)
2) Создать .env скопировав .env.example


#### Где смотреть
- Консольные команды в App\Console\Commands
- Всё об обьектах данных собрано в App\Models

#### Доступные команды

1) php artisan user:can writer writing

Доступные роли:
- writer
- tester
- manager
- designer

Существующие действия (можно любую другую строку писать, так как не вижу условия строгой блокировки,
так как манипуляции с строкой действия никаких не произвожу):
- testing
- writing
- spiking
- setting
- drawing

2) php artisan user:list-actions writer

Доступные роли:
- writer
- tester
- manager
- designer
