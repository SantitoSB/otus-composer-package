# Пакет для переворачивания строк

## Требования
php >= 7.4

## Установка пакета

```bash
$ composer require sergey-antonov/otus-composer-package
```

## Использование
```php
<?php
$reverser = new Reverser();
echo $reverser->execute('Test string!');
```