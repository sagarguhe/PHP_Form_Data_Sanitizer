# PHP Form Data Sanitizer

This class lets you quickly sanitize the request array and make it ready to store in the database. This is my first try at OOP PHP so there may be many issues with standards and concepts. I will appreciate your incredible [contribution](#contribution).
<hr>

## Table of content
 * [Installation](#installation)
 * [Initialization](#initialization)
 * [Sanitize Request Array](#sanitize-request-array)
 * [MySQL Escape Array Elements](#mysql-escape-array-elements)
 * [Both Sanitize And Escape Array Elements](#both-sanitize-and-escape-array-elements)
 * [Sanitize String](#sanitize-string)
 * [MySQL Escape String](#mySQL-escape-string)
 * [Both Sanitize And Escape String](#both-sanitize-and-escape-string)

### Installation
```php
    require_once ('DataSanitizer.php');
```

### Initialization
```php
    $clean = new DataSanitizer($_REQUEST);
```

### Sanitize Request Array
Sanitize HTML in array element
```php
    $clean->sanitizeArrayHtml();
```

### MySQL Escape Array Elements
Mysql escape array elements
```php
    $clean->sqlEscapeArray();
```

### Both Sanitize And Escape Array Elements
Both sanitize and escape array elements
```php
    $clean->sanitizeAndSqlEscArray();
```
### Sanitize String
Alternative to `htmlspecialchars();`
```php
    $clean->sanitizeStr($str);
```

### MySQL Escape String
Alternative to `addslashes();`
```php
    $clean->sqlEscapeStr($str);
```

### Both Sanitize And Escape String
Both sanitize and Escape string
```php
    $clean->sanitizeAndSqlEscString($str);
```
<hr>

## Contribution
I need your contribution. Your contribution will make me learn from you and will make me more passionate about this community. Thanks!! :D
