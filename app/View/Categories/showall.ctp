<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active"><?php print $showcategories; ?></li>
				<li class="active"><?php print "Git Handling here now Yeh...."; ?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php print $showcategories; ?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel-body">
		<div class="bootstrap-table"><div class="fixed-table-toolbar"></div><div class="fixed-table-container">
		<div class="fixed-table-header">
		<table></table></div><div class="fixed-table-body"><div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div><table data-row-style="rowStyle" data-url="tables/data2.json" id="table-style" data-toggle="table" class="table table-hover">
			    <thead>
				<tr>
				<th style="text-align: right; ">
				  <div class="th-inner "><?php print $this->Paginator->sort('Category.id','Item Id') ?></div>
				  <div class="fht-cell"></div>
				</th>
				<th style="">
				  <div class="th-inner "><?php print $this->Paginator->sort('Category.categoryName','Category Name') ?></div>
				  <div class="fht-cell"></div>
				</th>
				<th style="">
				  <div class="th-inner "><?php print $this->Paginator->sort('CategoryDesc.type','Type') ?></div>
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
				$i=0;foreach( $getAllCat as $getCat ) :
					if( $i % 2 == 0 ) $even = "success";
					else $even = "";
			?>
					<tr data-index="0" class="<?php print $even; ?>">
						<td style="text-align: right; "><?php print $getCat['Category']['id']; ?></td>
						<td style=""><?php print $getCat['Category']['categoryName']; ?></td>
						<td style=""><?php print $getCat['CategoryDesc']['type']; ?></td>
						<td style=""><a href="/admin/categories/add/<?php print $getCat['Category']['id']; ?>">Edit</a></td>
						<td style=""><a href="/admin/categories/view/<?php print $getCat['Category']['id']; ?>">View</a></td>
						<td style=""><a href="/admin/categories/delete/<?php print $getCat['Category']['id']; ?>">Delete</a></td>
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
