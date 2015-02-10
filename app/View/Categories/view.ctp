<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active"><?php print $view; ?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php print $view; ?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel-body">
		<div class="bootstrap-table"><div class="fixed-table-toolbar"></div><div class="fixed-table-container">
		<div class="fixed-table-header">
		<table></table></div><div class="fixed-table-body"><div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div><table data-row-style="rowStyle" data-url="tables/data2.json" id="table-style" data-toggle="table" class="table table-hover">
			    <thead>
				<tr>
				<th style="text-align: right; ">
				  <div class="th-inner ">Item ID</div>
				  <div class="fht-cell"></div>
				</th>
				<th style="">
				  <div class="th-inner ">Product Name</div>
				  <div class="fht-cell"></div>
				</th>
				<th style="">
				  <div class="th-inner ">Product Color</div>
				  <div class="fht-cell"></div>
				</th>
				<th style="">
				  <div class="th-inner ">Last Update</div>
				  <div class="fht-cell"></div>
				</th>				
				<th style="">
				  <div class="th-inner ">Delete</div>
				  <div class="fht-cell"></div>
				</th>
				</tr>
			    </thead>
			<tbody>
			   <tr data-index="0">
			   
				<td style="text-align: right; "><?php print $getCategoryData['Category']['id']; ?></td>
				<td style=""><?php print $getCategoryData['Category']['categoryName']; ?></td>
				<td style=""><?php print $getCategoryData['CategoryDesc']['type']; ?></td>
				<td style=""><?php print $getCategoryData['CategoryDesc']['date']; ?></td>
				<td style=""><a href="/admin/categories/delete/<?php print $getCategoryData['Category']['id']; ?>">Delete</a></td>
			      </tr>	
			
		        </tbody>
		</table>
		</div>
		<div class="fixed-table-pagination">
					
		</div>
		
		</div>
		</div>
		<div class="clearfix"></div>
				
		</div>
		
	</div><!--/.main-->
