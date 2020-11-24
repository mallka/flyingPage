Flying Page widget for  yii2
=============
Wrapper for flying-page .

ref：https://github.com/gijo-varghese/flying-pages


Install
------------

Via Composer 

```
php composer.phar require --prefer-dist yiirise/yii2-flyingpage "dev-master"
```

Add bellow line into your composer.json

```
"mallka/yii2-flyingpage": "dev-master"
```

and then exeute composer update

How to use:
-----



```php
<?= \mallka\flyingpage\FlyingPage::widget([
      'delay'=>0,//delay: Start prefetching after a delay (in seconds). Will be started when the browser becomes idle, using requestIdleCallback. Default to 0.
      'ignoreKeywords'=>['A','B'],  //ignoreKeywords: An array of keywords to ignore from prefetching. Example ['/logout','/cart','about.html','sample.png','#'].
      'maxRPS'=>3,//maxRPS: Maximum requests per second the queue should process. Set to 0 to process all requests immediately (without queue). Default to 3.
      'hoverDelay'=>50,//hoverDelay: Delay in prefetching links on mouse hover (in milliseconds). Default 50.
  ]); ?>
```



