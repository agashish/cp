<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active"><?php print $showproducts; ?></li>
				<li class="active"><a href="/admin/products/add">Add More</a></li>
			</ol>
			<!-- Start Here Advanced serach field -->
		
		<!-- Category Selection -->
		<?php print $this->form->create( 'Search', array( 'style'=>'width:400px','action'=>'search','type'=>'file','Method'=>'Get'  ) ); ?>
		<div class="form-group">
			<label class="col-md-3 control-label" for="name">Choose Category</label>
			<div class="col-md-9">									
			<?php
				print $this->form->input( 'Search.category_id', array( 'options'=>$this->Common->getCategoryList(),'required'=>false,'class'=>'form-control','div'=>false,'label'=>false,'empty'=>'Choose category' ) );	
			?>					
			</div>
		</div>
		
		<!-- Name input-->
		<div class="form-group">
			<label class="col-md-3 control-label" for="name">Product Name</label>
			<div class="col-md-9">									
			<?php
				print $this->form->input( 'Search.productName', array( 'required'=>false,'class'=>'form-control','div'=>false,'label'=>false,'placeholder'=>'Input Product name' ) );	
			?>					
			</div>
		</div>
		
		<!-- Form actions -->
		<div class="form-group">
			<div class="col-md-12">				
				<?php
					echo $this->Form->button('Search', array(
						'type' => 'submit',
						'escape' => true,
						'class'=>'btn btn-default btn-md pull-right',
						'style'=>'margin:0px 0px 10px 0px'
					 ));	
				?>
			</div>
		</div>
		<!-- Start Here Advanced serach field -->
		</div><!--/.row-->
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php print $showproducts; ?></h1>
			</div>
		</div><!--/.row-->
		
		
		
		<div class="panel-body">
		<div class="bootstrap-table"><div class="fixed-table-toolbar"></div><div class="fixed-table-container">
		<div class="fixed-table-header">
		<table></table></div><div class="fixed-table-body"><div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div><table data-row-style="rowStyle" data-url="tables/data2.json" id="table-style" data-toggle="table" class="table table-hover">
			    <thead>
				<tr>
				<th style="text-align: right; ">
				  <div class="th-inner "><?php print $this->Paginator->sort('Product.id','Item Id') ?></div>
				  <div class="fht-cell"></div>
				</th>
				<th style="">
				  <div class="th-inner "><?php print $this->Paginator->sort('Product.productName','Product Name') ?></div>
				  <div class="fht-cell"></div>
				</th>
				<th style="">
				  <div class="th-inner "><?php print $this->Paginator->sort('ProductDesc.sku_code','Sku code') ?></div>
				  <div class="fht-cell"></div>
				</th>
				<th style="">
				  <div class="th-inner ">Category Name</div>
				  <div class="fht-cell"></div>
				</th>
				<th style="">
				  <div class="th-inner ">Edit</div>
				  <div class="fht-cell"></div>
				</th>
				<th style="">
				  <div class="th-inner ">View</div>
				  <div class="fht-cell"></div>
				</th>
				<th style="">
				  <div class="th-inner ">Delete</div>
				  <div class="fht-cell"></div>
				</th>
				</tr>
			    </thead>
			<tbody>
			<?php
				$i=0;foreach( $getAllPro as $getCat ) :
					if( $i % 2 == 0 ) $even = "success";
					else $even = "";
			?>
					<tr data-index="0" class="<?php print $even; ?>">
						<td style="text-align: right; "><?php print $getCat['Product']['id']; ?></td>
						<td style=""><?php print $getCat['Product']['productName']; ?></td>
						<td style=""><?php print $getCat['ProductDesc']['sku_code']; ?></td>
						<td style=""><?php print $getCat['Category']['categoryName']; ?></td>
						<td style=""><a href="/admin/products/add/<?php print base64_encode($getCat['Product']['id']); ?>">Edit</a></td>
						<td style=""><a href="/admin/products/view/<?php print base64_encode($getCat['Product']['id']); ?>">View</a></td>
						<td style=""><a href="/admin/products/delete/<?php print base64_encode($getCat['Product']['id']); ?>">Delete</a></td>
					      </tr>
			<?php
				$i++;endforeach;
			?>
		        </tbody>
		</table>
		<!-- Shows the page numbers -->
		<?php echo $this->Paginator->numbers(); ?>
		<!-- Shows the next and previous links -->
		<?php echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
		<?php echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?>
		<!-- prints X of Y, where X is current page and Y is number of pages -->
		<?php echo $this->Paginator->counter(); ?>
		<br><br>
		<?php
				echo $this->Paginator->counter(array(
				    'format' => 'Page %page% of %pages%, showing %current% records out of
					     %count% total, starting on record %start%, ending on %end%'
				));
		?>
		</div>
		<div class="fixed-table-pagination">
					
		</div>
		
		</div>
		</div>
		<div class="clearfix"></div>
				
		</div>
		
	</div><!--/.main-->
