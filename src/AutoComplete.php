<?php
namespace anmaslov\autocomplete;

use yii\base\Widget;
use yii\helpers\Html;

class AutoComplete extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Initial plugin';
        }
    }

    public function run()
    {
        return Html::encode($this->message);
    }
}
?>