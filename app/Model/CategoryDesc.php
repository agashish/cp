<?php

class CategoryDesc extends AppModel
{
    
    var $name = "CategoryDesc";
    var $belongsTo = array(
                           
        'Category' => array(
                            
            'className' => 'Category',
            'foriegnKey' => 'category_id'
                            
        )                       
                           
    );
    
    /* Validate Type */
    var $validate = array(
                          
        'type' => array(
                        
            'notEmpty' => array(
            
                'rule' => array( 'notEmpty' ),
                'message' => array( 'Type could not be blank' )
            
            )                
                        
        )                      
                          
    );
    
}

?>
