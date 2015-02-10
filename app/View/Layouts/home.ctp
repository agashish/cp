<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Custom - Dashboard</title>

<?php print $this->html->css(array('bootstrap.min','datepicker3','bootstrap-table','styles')); ?>


<!--[if lt IE 9]>
<?php print $this->html->script(array('html5shiv','respond.min')); ?>
<![endif]-->

</head>

<body>
	<!-- Header Start -->
            <?php  print $this->element("header");  ?>
	<!-- Header Start -->
	
	<!-- Sidebar Start -->
                <?php  print $this->element("sidebar");  ?>
	<!-- Sidebar Start -->
	
	<!-- Main Content Start -->
            <?php  print $this->fetch("content");  ?>
	<!-- Main Content Start -->
	
        <?php print $this->html->script(array('jquery-1.11.1.min','bootstrap.min','bootstrap-datepicker','bootstrap-table')); ?>

	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
