<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
*/

App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
*/
class CategoryHelper extends AppHelper
{
    
   function getCategoryCount($parentCategoryID){
        App::import("Model", "Category");  
        $model = new Category();  
        $count  = $model->find("count",array('conditions'=>array('Category.parent_id'=>$parentCategoryID)));
        return $count;
   }
   function getCategory($parentCategoryID){
        App::import("Model", "Category");  
        $model = new Category(); 
        $count  = $model->find("list",array('conditions'=>array('Category.parent_id'=>$parentCategoryID),'fields'=>array('id','category')));
       
        return $count;
   }
   function getCategoryName($categoryId){
        App::import("Model", "Category");  
        $model = new Category();
        $cat = $model->find('first',array('conditions'=>array('Category.id'=>$categoryId),'fields'=>array('category')));
        return $cat['Category']['category'];
   }
   function getCategoryThumb($imageName = null,$thumb_folder =null)
    { //echo APP . "Plugin/Companies/webroot/img/logo/".$thumb_folder."/" . $imageName; die;
        if ($imageName != '') {
            if(file_exists(APP . "Plugin/Categories/webroot/img/cat_pics/".$thumb_folder."/" . $imageName)) {
                return "Categories." . "cat_pics/".$thumb_folder."/" . $imageName;
            } else {
            return "Categories." . "cat_pics/".$thumb_folder."/" . "no_pic.png";
            }
        } else {
            return "Categories." . "cat_pics/".$thumb_folder."/" ."no_pic.png";
        }
    }


    
}