<?php

class Category extends AppModel
{
    
    var $name = "Category";
    
    var $hasMany = array(
                         
        'Children'   => array(
                              
            'className'  => 'Category',
            'foreignKey' => 'parent_id'
                              
        ),
        'Product'  => array(
            
            'className'  => 'Product',
            'foreignKey' => 'category_id',
            'dependent'  => true
            
        )
                         
    );
    
    var $hasOne = array(
                        
        'CategoryDesc' => array(
                                
            'className' => 'CategoryDesc',
            'foreignKey' => 'category_id',
            'dependent' => true
                                
        )                    
                        
    );
    
    var $belongsTo = array(
                           
        'Parent'  => array(
                           
            'className' => 'Category',
            'foreignKey' => 'parent_id'
                           
        )                       
                           
    );
    
    var $validate = array(
                          
        'categoryName' => array(
                                
            'notEmpty' => array(
                                
                'rule' => array( 'notEmpty' ),
                'required' => true,
                'message' => 'Could not be blank'
                                
            )                                                        
        )                          
    );
}

?>