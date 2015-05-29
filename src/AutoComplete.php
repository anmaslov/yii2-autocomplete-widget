<?php
/**
 * @link https://github.com/anmaslov/yii2-autocomplete-widget
 * @copyright Copyright &copy; Alexey Maslov, 2015
 * @license http://opensource.org/licenses/mit-license.php
 */

namespace anmaslov\autocomplete;

use yii\helpers\Json;
use yii\helpers\Html;
use yii\base\InvalidConfigException;

class AutoComplete extends \yii\widgets\InputWidget
{
    public $clientOptions = [];

    /**
     * @var array the data
     */
    public $data = [];

    public $container = [];
    /**
     * @inheritdoc
     */
    public function run()
    {
        if (empty($this->data) || !is_array($this->data)) {
            throw new InvalidConfigException("You must define the 'data' property");
        }

        $this->registerAssets();
        echo Html::tag('div', Html::textInput($this->name, $this->value, $this->options), $this->container);
    }

    public function init()
    {
        parent::init();
        Html::addCssClass($this->options, 'form-control');
    }

    /**
     * Register assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        AutoCompleteAsset::register($view);
        $id = $this->options['id'];

        if (!$this->clientOptions['lookup']){
            $this->clientOptions['lookup'] = array_values($this->data);
        }

        $options = $this->clientOptions !== false && !empty($this->clientOptions)
            ? Json::encode($this->clientOptions)
            : 'null';

        $js[] = "jQuery('#$id').autocomplete($options);";
        $view->registerJs(implode("\n", $js));
    }
}
?>