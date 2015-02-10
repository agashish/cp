<?php

class Product extends AppModel
{
    
    var $name = "Product";
    
    var $hasOne = array(
        
        'ProductDesc' => array(
                               
            'className' => 'ProductDesc',
            'foreignKey' => 'product_id'
                               
        )        
        
    );
    
    var $belongsTo = array(
                           
        'Category' => array(
                            
            'className' => 'Category',
            'foreignKey' => 'category_id'
                                
        )                       
                           
    );
    
    /* Start validation process here */
    var $validate = array(
                          
        'productName' => array(
                               
            'notEmpty' => array(
                                
                'rule' => array('notEmpty'),
                'message' => 'Product name could not be blank!'
                                
            )                       
                               
        ),
        'product_alias' => array(
                               
            'notEmpty' => array(
                                
                'rule' => array('notEmpty'),
                'message' => 'Product alias could not be blank!'
                                
            )                       
                               
        ),
        'category_id' => array(
                               
            'chkCategory' => array(
                                
                'rule' => array('chkCategory'),
                'message' => 'Category could not be blank!'
                                
            )                       
                               
        )
                          
    );    
    
    
    public function chkCategory( $data )
    {
        
        if( isset($this->data['Product']['category_id']) && $this->data['Product']['category_id'] == '' )
        {
            return false;
        }
        else
        {
            return true;
        }
        
    }
    
    
}

?>