<?php

class CategoriesController extends AppController
{
    
    var $name = "Categories";
    
    var $helpers = array('Html','Form');
    
    var $components = array('Session','Paginator');
    

    public function index()
    {
     
        $this->layout = "home";
        
    }
    
    public function add( $id = null )
    {
        
        $this->layout = "home";
        
        if( isset($id) )
            $this->set('title','Edit Category');
        else       
            $this->set('title','Add Category');
        
        /* Check edit or new case */
        if( isset( $id ) && $id != '' )
        {
          
            if( !empty($this->request->data) )
            {
                 $this->Category->set( $this->request->data );
                 if( $this->Category->validates( $this->request->data ) )
                 {
                    $this->Category->saveAll( $this->request->data );
                    $this->redirect( array( 'controller' => 'categories', 'action' => 'showall' ) );
                 }
                 else
                 {
                    
                    $error = $this->validationErrors;
                    pr($error);      
                    
                 }
            }
            else
            {
             
                $this->Category->unbindModel(array(
                                               
                    'hasMany' => array('Product','Children'),                                               
                    'belongsTo' => array( 'Parent' ),
                    'hasOne' => array( 'CategoryDesc' )                                   
                                               
                ));
                $getCategoryList = $this->Category->find('list', array( 'fields' => array('id','categoryName') ));
                $this->set('getCategoryList',$getCategoryList);
                
                $this->Category->unbindModel(array(
                                                   
                    'hasMany' => array('Product','Children'),                                               
                    'belongsTo' => array( 'Parent' )                
                                                   
                ));
                $getData = $this->Category->find( 'first', array( 'conditions' => array( 'Category.id' => $id ) ) );            
                $this->data = $getData;
                
            }            
            
        }
        else
        {
            if( !empty( $this->request->data ) )
            {
                $this->Category->set( $this->request->data );
                if( $this->Category->validates( $this->request->data ) )
                {
                    
                    /* Start here setup parent_id could be blank */
                    if( isset($this->request->data['Category']['parent_id']) && $this->request->data['Category']['parent_id'] == '' )
                    {
                        $this->request->data['Category']['parent_id'] = 0;       
                    }
                   
                    /* New Data insert case */
                    $this->Category->saveAll($this->request->data);
                    $this->Category->unbindModel(array(
                                                       
                        'hasMany' => array('Product','Children'),                                               
                        'belongsTo' => array( 'Parent' ),
                        'hasOne' => array( 'CategoryDesc' )                                   
                                                       
                    ));
                    
                    $getCategoryList = $this->Category->find('list', array( 'fields' => array('id','categoryName') ));
                    $this->set('getCategoryList',$getCategoryList);
                    
                    $this->Session->write( 'success','Category Added' );
                    $this->Session->setFlash( 'Sucessfully Category Added' );
                    
                }
                else
                {
                    $error = $this->validationErrors;
                    pr($error);                   
                }
            }
            else
            {
                $this->Category->unbindModel(array(
                                                       
                        'hasMany' => array('Product','Children'),                                               
                        'belongsTo' => array( 'Parent' ),
                        'hasOne' => array( 'CategoryDesc' )                                   
                                                       
                    ));
                    
                    $getCategoryList = $this->Category->find('list', array( 'fields' => array('id','categoryName') ));
                    $this->set('getCategoryList',$getCategoryList);
            }
            
            $this->Category->unbindModel(array(
                                                       
                'hasMany' => array('Product','Children'),                                               
                'belongsTo' => array( 'Parent' ),
                'hasOne' => array( 'CategoryDesc' )                                   
                                               
            ));
            
            $getCategoryList = $this->Category->find('list', array( 'fields' => array('id','categoryName') ));
            $this->set('getCategoryList',$getCategoryList);
        }
    }
    
    public function showall()
    {
        
        $this->layout = "home";
        $this->set('showcategories','Show Categories');
        
        /* Get All Category listing values and relates values */
        $this->Category->unbindModel( array(
                                            
            //'hasMany' => array( 'Product','Children' ),
            //'belongsTo' => array( 'Parent' ),
            //'hasOne' => array( 'CategoryDesc' )
        
        ) );
        
        //pr( $this->Category->find( 'all', array( 'fields'=>array('Category.categoryName','count(Product.category_id) as Pcount') ) ) );
        //exit;
        /* Starts Here Paginator Settings */
        $this->Paginator->settings = array(                           
            'limit' => 10,
            'order' => array(
                
                'Category.id' => 'desc'                 
                
            )
        );
        
        $getAllCat = $this->paginate('Category');       
        $this->set( 'getAllCat', $getAllCat );  
       
        $this->render('showall');
        
    }
    
    /* Start Function for view specific category */
    public function view( $id )
    {
        
        $this->layout = "home";
        $this->set( 'view', 'View Categories' );
        
        /* Starts Here code getting specific category data */
        
        $this->Category->recursive = -1;
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
