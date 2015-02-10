<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
                                <h4><?php print $this->Session->Flash();  ?></h4>
				<h1 class="page-header"><?php print $title; ?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-envelope"></span> Contact Form</div>
					<div class="panel-body">
						<?php	//$this->Common->getCategoryList()
							print $this->form->create( "Product", array('type'=>'file') );
							
							print $this->form->input( 'Product.id', array('type'=>'hidden') );
							print $this->form->input( 'ProductDesc.id', array('type'=>'hidden') );	
						?>
							<fieldset>
								
								<!-- Category Selection -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Choose Category</label>
									<div class="col-md-9">									
									<?php
										print $this->form->input( 'Product.category_id', array( 'options'=>$this->Common->getCategoryList(),'required'=>false,'class'=>'form-control','div'=>false,'label'=>false,'empty'=>'Choose category' ) );	
									?>					
									</div>
								</div>
								
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Product Name</label>
									<div class="col-md-9">									
									<?php
										print $this->form->input( 'Product.productName', array( 'required'=>false,'class'=>'form-control','div'=>false,'label'=>false,'placeholder'=>'Input Product name' ) );	
									?>					
									</div>
								</div>
								
								<!-- Alias input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Product Alias</label>
									<div class="col-md-9">									
									<?php
										print $this->form->input( 'Product.product_alias', array( 'required'=>false,'class'=>'form-control','div'=>false,'label'=>false,'placeholder'=>'Input Product alias name' ) );	
									?>					
									</div>
								</div>
										
								<!-- Sku Code input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Product Sku Code</label>
									<div class="col-md-9">									
									<?php
										print $this->form->input( 'ProductDesc.sku_code', array( 'required'=>false,'class'=>'form-control','div'=>false,'label'=>false,'placeholder'=>'Input Product sku code' ) );	
									?>					
									</div>
								</div>
								
								<!-- Sku Code input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Product Image</label>
									<div class="col-md-9">									
									<?php
										print $this->form->input( 'ProductDesc.image', array( 'required'=>false,'type'=>'file','div'=>false,'label'=>false ) );	
									?>					
									</div>
								</div>										
								
								<!-- Sku Color input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Product Color Code</label>
									<div class="col-md-9">									
									<?php
										print $this->form->input( 'ProductDesc.color', array( 'required'=>false,'class'=>'form-control','div'=>false,'label'=>false,'placeholder'=>'Input Product color code' ) );	
									?>					
									</div>
								</div>
								
								<!-- Price input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Product Price</label>
									<div class="col-md-9">									
									<?php
										print $this->form->input( 'ProductDesc.price', array( 'required'=>false,'class'=>'form-control','div'=>false,'label'=>false,'placeholder'=>'Input Product price' ) );	
									?>					
									</div>
								</div>
								
								<!-- Product Description input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Product Description</label>
									<div class="col-md-9">									
									<?php
										print $this->form->input( 'ProductDesc.productDesc', array( 'required'=>false,'class'=>'form-control','div'=>false,'label'=>false,'placeholder'=>'Input Product price' ) );	
									?>					
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<!--<button type="submit" class="btn btn-default btn-md pull-right">Submit</button>-->
										<?php
											echo $this->Form->button('Submit Form', array(
												'type' => 'submit',
												'escape' => true,
												'class'=>'btn btn-default btn-md pull-right'
										         ));	
										?>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				
				<div class="panel panel-default chat">
					<div class="panel-heading" id="accordion"><span class="glyphicon glyphicon-comment"></span> Chat</div>
				
					<div class="panel-body">
						<ul>
							<li class="left clearfix">
								<span class="chat-img pull-left">
									<img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header">
										<strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small>
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. 
									</p>
								</div>
							</li>
							<li class="right clearfix">
								<span class="chat-img pull-right">
									<img src="http://placehold.it/80/dde0e6/5f6468" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header">
										<strong class="pull-left primary-font">Jane Doe</strong> <small class="text-muted">6 mins ago</small>
									</div>
									<p>
										Mauris dignissim porta enim, sed commodo sem blandit non. Ut scelerisque sapien eu mauris faucibus ultrices. Nulla ac odio nisl. Proin est metus, interdum scelerisque quam eu, eleifend pretium nunc. Suspendisse finibus auctor lectus, eu interdum sapien.
									</p>
								</div>
							</li>
							<li class="left clearfix">
								<span class="chat-img pull-left">
									<img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header">
										<strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small>
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. 
									</p>
								</div>
							</li>
						</ul>
					</div>
					
					<div class="panel-footer">
						<div class="input-group">
							<input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." />
							<span class="input-group-btn">
								<button class="btn btn-success btn-md" id="btn-chat">Send</button>
							</span>
						</div>
					</div>
				</div>
				
			</div><!--/.col-->
			
			<div class="col-md-4">
			
				<div class="panel panel-red">
					<div class="panel-heading dark-overlay"><span class="glyphicon glyphicon-calendar"></span>Calendar</div>
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>
				
				<div class="panel panel-blue">
					<div class="panel-heading dark-overlay"><span class="glyphicon glyphicon-check"></span>To-do List</div>
					<div class="panel-body">
						<ul class="todo-list">
						<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Make a plan for today</label>
								</div>
								<div class="pull-right action-buttons">
									<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="#" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
									<a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
								</div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Update Basecamp</label>
								</div>
								<div class="pull-right action-buttons">
									<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="#" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
									<a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
								</div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Send email to Jane</label>
								</div>
								<div class="pull-right action-buttons">
									<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="#" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
									<a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
								</div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Drink coffee</label>
								</div>
								<div class="pull-right action-buttons">
									<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="#" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
									<a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
								</div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Do some work</label>
								</div>
								<div class="pull-right action-buttons">
									<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="#" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
									<a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
								</div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Tidy up workspace</label>
								</div>
								<div class="pull-right action-buttons">
									<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="#" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
									<a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="panel-footer">
						<div class="input-group">
							<input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" />
							<span class="input-group-btn">
								<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
							</span>
						</div>
					</div>
				</div>
								
			</div><!--/.col-->
		</div><!--/.row-->
		
		
		
		
								
					
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->