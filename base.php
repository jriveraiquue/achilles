<?php get_template_part('templates/head'); ?>

<body <?php body_class(); ?>>

<div class="main-wrapper" role="document">
  <h1>Heading 1</h1>
  <h2>Heading 2</h2>
  <h3>Heading 3</h3>
  <h4>Heading 4</h4>
  <h5>Heading 5</h5>
  <h6>Heading 6</h6>
<?php if (is_front_page()){
	  //@todo add Slider/Image
      }
	  
	  else{
		//@todo add full width featured Image  
	  }
	  
?>

  <div class="content row">
    
    <main class="main" role="main">
    
    </main> <!-- end main element -->
    
    <?php //@todo add sidebar conditional option ?>
  
  </div>  <!-- end .content .row --> 

</div> <!-- end .main-wrapper -->
	 
<?php get_template_part('templates/footer'); ?>
 
</body>
</html>