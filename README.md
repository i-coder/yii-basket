Basket
======
Basket test modul

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist coder.ept/yii2-basket "*"
```

```
"coder.ept/yii2-basket": "*"
```
```
php yii migrate --migrationPath=@app/vendor/coder.ept/yii2-basket/migrations create_table_order
```
to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \coderept\basket\AutoloadExample::widget(); ?>```