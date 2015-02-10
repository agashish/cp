<?php

class ProductsController extends AppController
{
    
    var $name = "Products";
    
    var $helpers = array('Html','Form');
    
    var $components = array('Session','Paginator');
    

    public function index()
    {
     
        $this->layout = "home"; 
        
    }
    
    public function add( $id = null )
    {
        
        $this->layout = "home";
        if( isset($id) && $id != "" )
            $this->set( 'title','Edit Product' );
        else    
            $this->set( 'title','Add Product' );
            
        if( isset($id) && $id != "" )
        {
            
            /* Edit and Update condition accordingly */
            if( !empty($this->request->data) )
            {
                
                /* Update case */
                if( $this->request->data['ProductDesc']['image']['name'] == '' )
                {
                    $this->request->data['ProductDesc']['image'] = '';
                    $this->request->data['ProductDesc']['status'] = 1;    
                }              
                $this->Product->saveAll( $this->request->data );                
                
            }
            else
            {
                
                /* Edit view case accordingly */                
                $getFirstData = $this->Product->find( 'first', array( 'conditions' => array( 'Product.id' => base64_decode($id) ) ) );
                $this->data = $getFirstData;
                
            }
            
        }
        else
        {
            error_reporting(0);
            /* New Data Insertion according product and category */            
            if( !empty( $this->request->data ) )
            {
                
                $this->loadModel( 'ProductDesc' );
                $this->Product->set( $this->request->data['Product'] );
                $this->ProductDesc->set( $this->request->data['ProductDesc'] );
                
                /* Starts here validation process */
                $setFlag = false;
                if( $this->Product->validates( $this->request->data['Product'] ) )
                {
                       $setFlag = true;
                }
                else
                {
                       $setFlag = false;
                       $error1 = $this->Product->validationErrors;
                }
                                
                if( $this->ProductDesc->validates( $this->request->data['ProductDesc'] ) )
                {
                       $setFlag = true;
                }
                else
                {
                       $setFlag = false;
                       $error2 = $this->ProductDesc->validationErrors;
                }
                
                
                if( $setFlag == true )
                {
                    
                    /* Start here Product image could be blank because might be admin has no product picture right now but we need to unpublished in case of image field will blank */
                    $imgChk = $this->request->data['ProductDesc']['image']['error'];
                    if( isset($imgChk) && $imgChk == 4 )
                    {
                        unset( $this->request->data['ProductDesc']['image'] );
                        $this->request->data['ProductDesc']['image'] = '';
                        $this->request->data['ProductDesc']['status'] = 1;                       
                    }
                    else
                    {
                        $this->request->data['ProductDesc']['image'] = '';
                    }
                    
                    $this->Product->saveAll( $this->request->data );
                    $this->redirect( '/products/showall' );
                    $this->Session->setFlash( "Product has been added." );
                    
                }
                else
                {
                    
                    if( is_array( $error1 ) && is_array( $error2 )  )
                        $error = array_merge( $error1,$error2 );
                    else if( is_array( $error1 ) || is_array( $error2 ) )
                    {
                        
                        if( !is_array( $error1 ) )
                            $error = $error2;
                        else
                            $error = $error1;
                        
                    }
                    else
                    {
                        
                    }
                        
                    //pr($error);
                    
                }
                
            }
                          
        }   
            
    }
    
    public function showall()
    {
        
        $this->layout = "home";
        $this->set('showproducts','Show Products');
        
        /* Starts Here Paginator Settings */
        $this->Paginator->settings = array(                           
            'limit' => '10',
            'order' => array(
                
                'Product.id' => 'desc'                 
                
            )
        );
        
        //pr( $this->Product->find('all', array( 'fields'=>array('Category.id','Product.id','Product.productName','count(Product.category_id) as Pcount'),'group' => array('Product.category_id') )) );
        //exit;
        
        $getAllPro = $this->paginate('Product');
        $this->set( 'getAllPro', $getAllPro );  
       
        $this->render('showall');
        
    }
    
    /* Start Function for view specific category */
    public function view( $id )
    {
        
        $this->layout = "home";
        $this->set( 'view', 'View Product' );
        
        /* Starts Here code getting specific category data */
        
        $this->recursive = -1;
        $conditions = array( 'Category.id' => $id );
        $getCategoryData = $this->Category->CategoryDesc->find( 'first', array( 'conditions' => $conditions ) );
        $this->set( 'getCategoryData', $getCategoryData );
    }
    
    public function delete( $id )
    {
        
        $this->Category->delete($id,$cascade = true);
        $this->redirect( '/categories/showall' );
        
    }
    
}

?>
