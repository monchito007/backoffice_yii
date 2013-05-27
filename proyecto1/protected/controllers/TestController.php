<?php
// 
// VERY DUMMY TEST CONTROLLER
// FOR THE SAKE OF THE EXAMPLE
// TEST IT AS http : / / <yourapplicationurl> / index.php ? r=test/test
 
class TestController extends Controller{
 
     // no layouts here
     public $layout = '';
 /*
     public function actionTest()
     {
     //
     // get a reference to the path of PHPExcel classes 
     $phpExcelPath = Yii::getPathOfAlias('ext.phpexcel.Classes');
 
     // Turn off our amazing library autoload 
      spl_autoload_unregister(array('YiiBase','autoload'));        
 
     //
     // making use of our reference, include the main class
     // when we do this, phpExcel has its own autoload registration
     // procedure (PHPExcel_Autoloader::Register();)
    include($phpExcelPath . DIRECTORY_SEPARATOR . 'PHPExcel.php');
 
     // Create new PHPExcel object
     $objPHPExcel = new PHPExcel();
    
    $objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue('A1', $model->usuaris->nom_usuari)
    ->setCellValue('B2', 'world!')
    ->setCellValue('C1', 'Hello')
    ->setCellValue('D2', 'world!');

    $objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue('A4', 'Miscellaneous glyphs')
    ->setCellValue('A5', 'eaeuaeioueiuyaouc');
 
    $objPHPExcel->getActiveSheet()->setTitle('Simple');
 
    $objPHPExcel->setActiveSheetIndex(0);
     
    ob_end_clean();
    ob_start();
    
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="test.xls"');
    header('Cache-Control: max-age=0');
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    $objWriter->save('php://output');
      Yii::app()->end();
 
       // 
       // Once we have finished using the library, give back the 
       // power to Yii... 
       spl_autoload_register(array('YiiBase','autoload'));
       }
       */
       public function actionTest()
	{
		// renders the view file 'protected/views/test/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		
                $model=Comentaris::model()->findAll();
                Yii::app()->request->sendFile('miarchivo.xls',
                    $this->renderPartial('excel',array(
                        
                        'model'=>$model,
                        
                    ),true));
                
                //$this->render('index');
                
                
                
	}
       
}
