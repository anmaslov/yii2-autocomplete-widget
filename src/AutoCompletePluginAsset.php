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

class AutoCompletePluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/devbridge-autocomplete';

    public $js = [
        'dist/jquery.autocomplete.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

}