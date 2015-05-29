yii2-Autocomplete-widget
============================

The Autocomplete extension is a Yii 2 wrapper widget for for the [Autocomplete for jQuery plugin](https://github.com/devbridge/jQuery-Autocomplete).
AutoComplete allows you to easily create autocomplete/autosuggest boxes for text input fields.

Has no dependencies other than jQuery.

The widget is specially styled for Bootstrap 3.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install, either run

```
$ php composer.phar require anmaslov/yii2-autocomplete-widget "*"
```

or add

```
"anmaslov/yii2-autocomplete-widget": "*"
```

to the ```require``` section of your `composer.json` file.

## Usage

Get data from model

```php
$data = Link::find()
            ->select('title as value')
            ->asArray()
            ->limit(5)
            ->all();
```

In view

```php
use anmaslov\autocomplete\AutoComplete;

echo AutoComplete::widget([
            'name' => 'link',
            'data' =>  $model,
             'clientOptions' => [
                 'minChars' => 2,
             ],
        ])
```

## License

**yii2-autocomplete-widget** is released under the [MIT License](http://opensource.org/licenses/mit-license.php).