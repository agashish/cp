<?php

class SearchesController extends AppController
{
    
    var $name = "Searches";
    
    var $helpers = array('Html','Form');
    
    var $components = array('Session','Paginator');
    
    var $uses = array();
    
    public function search()
    {
     
        $this->layout = "home";
        $this->autorender = false;
        
        /* Start here advanced search code block */
        if( isset( $this->request->query['_method'] ) )
        {
            
            /* Start Here code for setting up the search logic accordingly */
            //Category / product name
            
            //It might be possible user nothing fill click over search button than we will return default data
            $categoryId = $this->request->query['data']['Search']['category_id'];
            $productName = $this->request->query['data']['Search']['productName'];
            if( $categoryId == '' && $productName == '' )
            {
                
                /* We will retrive the default all data through pagination */
                $this->loadModel( 'Category' );
                $this->loadModel( 'Product' );
                $this->loadModel( 'ProductDesc' );

                /* Setup paginator settings */
                $this->Paginator->settings = array(
                
                    'limit' => 10,
                    'order' => array(
                        
                        'Product.productName' => 'asc'
                        
                    )
                                                   
                );
                                
                $getAllPro = $this->paginate('Product');
                $this->set( 'getAllPro', $getAllPro );
                $this->set('search','Search');
                
            }
            else
            {
                /* We will retrive the default all data through pagination */
                $this->loadModel( 'Category' );
                $this->loadModel( 'Product' );
                $this->loadModel( 'ProductDesc' );

                /* Setup paginator settings */
                $this->Paginator->settings = array(
                
                    'limit' => 10,
                    'order' => array(
                        
                        'Product.productName' => 'asc'
                        
                    )
                                                   
                );
                                
                $getAllPro = $this->paginate('Product');
                $this->set( 'getAllPro', $getAllPro );
                $this->set('search','Search');
            }
            
        }
        
    }
    
}

?>
