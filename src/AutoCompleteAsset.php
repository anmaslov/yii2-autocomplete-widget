<?php
/**
 * @link https://github.com/anmaslov/yii2-autocomplete-widget
 * @copyright Copyright &copy; Alexey Maslov, 2015
 * @license http://opensource.org/licenses/mit-license.php
 */

namespace anmaslov\autocomplete;

use yii\web\AssetBundle;

/**
 * AutoCompleteAsset
 *
 * @author Alexey Maslov <lelick29@gmail.com>
 */

class AutoCompleteAsset extends AssetBundle
{
    public $css = [
        'autocomplete.css',
    ];
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
}