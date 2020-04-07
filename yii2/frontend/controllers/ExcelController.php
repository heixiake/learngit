<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 05/11/2017
 * Time: 7:57 PM
 */

class ExcelController extends \yii\web\Controller
{
    public function actionIndex()
    {
        echo "excel index";
    }

    /**
     * 导出
     */
    public function actionExport()
    {
        
    }

    /**
     * 导入
     */
    public function actionImport()
    {
        echo dir(__FILE__);
    }
}