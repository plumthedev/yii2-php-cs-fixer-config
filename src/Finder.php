<?php
/**
 * Yii2 PHP CS Fixer Config
 *
 * @author Kacper Pruszynski (plumthedev)
 * @link https://github.com/plumthedev/yii2-php-cs-fixer-config
 * @copyright Copyright (c) 2019 - 2019 plumthedev
 * @license https://github.com/plumthedev/yii2-php-cs-fixer-config/blob/master/LICENSE
 * @version 1.2.0
 */

namespace plumthedev\PhpCsFixer;

use PhpCsFixer\Finder as PhpCsFixerFinder;
use yii\base\InvalidArgumentException;
use yii\helpers\ArrayHelper;

class Finder extends PhpCsFixerFinder
{
    /**
     * Yii app directories to exclude with PhpCsFixerConfig.
     * @var array
     */
    public $yiiAppExclude = [];

    public function __construct()
    {
        parent::__construct();
        $this->yiiAppExclude = $this->getYiiAppExclude();
        $this->exclude($this->yiiAppExclude);
    }

    /**
     * Get Yii2 App Basic directories to exclude.
     *
     * @see https://github.com/yiisoft/yii2-app-basic
     * @return array
     */
    protected function getYiiAppBasicExclude()
    {
        return [
            'mail',
            'runtime',
            'vagrant',
            'views',
            'web',
            'vendor',
            'node_modules',
        ];
    }

    /**
     * Get Yii2 App Advanced directories to exclude.
     *
     * @see https://github.com/yiisoft/yii2-app-advanced
     * @return array
     */
    protected function getYiiAppAdvancedExclude()
    {
        return [
            'backend/runtime',
            'backend/views',
            'backend/web',
            'backend/assets',
            'common/mail',
            'console/runtime',
            'docs',
            'environments',
            'frontend/assets',
            'frontend/runtime',
            'frontend/views',
            'frontend/web',
            'vagrant',
            'vendor',
            'node_modules',
        ];
    }

    /**
     * Return Yii app directories to exclude.
     * If values have been specified, they will be returned,
     * otherwise merge default directories for basic and advanced app.
     *
     * @return array Directories to exclude
     */
    public function getYiiAppExclude()
    {
        if (!empty($this->yiiAppExclude)) {
            return $this->yiiAppExclude;
        }
        return ArrayHelper::merge(
            $this->getYiiAppBasicExclude(),
            $this->getYiiAppAdvancedExclude()
        );
    }

    /**
     * Set Finder directories to exclude.
     *
     * @param array $yiiAppExclude Directories to exclude.
     * @param bool $mergeWithDefault Whether to merge with default directories to exclude.
     * @throws InvalidArgumentException Throw exception if directories to exclude is not array.
     */
    public function setYiiAppExclude($yiiAppExclude, $mergeWithDefault = true)
    {
        if (!is_array($yiiAppExclude)) {
            throw new InvalidArgumentException('Directories to exclude must be a array.');
        }

        if ($mergeWithDefault) {
            $yiiAppExclude = ArrayHelper::merge(
                $yiiAppExclude,
                $this->getYiiAppExclude()
            );
        }

        $this->yiiAppExclude = $yiiAppExclude;
    }
}
