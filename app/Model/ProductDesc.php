<?php

class ProductDesc extends AppModel
{
    
    var $name = "ProductDesc";
    
    var $belongsTo = array(
                           
        'Product' => array(
                           
            'className' => 'Product',
            'foreignKey' => 'Product.id'
                           
        )                       
                           
    );
    
    /* Validate Type */
    var $validate = array(
                          
        'sku_code' => array(
                        
            'notEmpty' => array(
            
                'rule' => array( 'notEmpty' ),
                'message' => array( 'Sku Code could not be blank' )
            
            )                
                        
        ),
        'color' => array(
                        
            'notEmpty' => array(
            
                'rule' => array( 'notEmpty' ),
                'message' => array( 'Product color could not be blank' )
            
            )                
                        
        ),
        'price' => array(
                        
            'notEmpty' => array(
            
                'rule' => array( 'notEmpty' ),
                'message' => array( 'Product price could not be blank' )
            
            )                
                        
        ),
        'productDesc' => array(
                        
            'notEmpty' => array(
            
                'rule' => array( 'notEmpty' ),
                'message' => array( 'Product description could not be blank' )
            
            )                
                        
        ),
        'image' => array(
                        
            'chkImage' => array(
            
                'rule' => array( 'chkImage' ),
                'message' => array( 'Product image could not be blank' )
            
            )                
                        
        )
                          
    );
    
    public function chkImage( $data )
    {
        
        if( $this->data['ProductDesc']['image']['error'] == '4' )
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
