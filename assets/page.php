



    <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
                
?>
    


                

    <div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
</div>
<?php if(!is_page('contato')){ ?>

<div class="row">
    <div class="col-md-12">
        <?php the_content(); ?>
    </div>
</div>
<?php } ?>

<?php if(is_page('contato')){ ?>
<div class="row">
    <div class="col-md-4">
        <?php the_content(); ?>
    </div>
    <div class="col-md-1"> </div>
    <div class="col-md-6">

</div>




<?php } ?>

    
    
 <?php  
            }
        }
        
    ?>


