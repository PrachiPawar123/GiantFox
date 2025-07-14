

<?php 
include('header.php'); ?>

<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/categories.css">
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/categories_responsive.css">
<style>
    .main_nav ul li {
    display: inline-block;
    margin-right: 0px;
}
.products {
         padding-top: 121px;
      }

@media only screen and (min-width: 1025px) {
        
       .shopping_cart {
          left: 0!important;
          top: 0!important;
      }

      .shopping {
    position: relative;
     top: 0!important; 
     left: 0%!important; 
}
.header.scrolled {
     height: auto!important; 
}

.desktop-none {
            display:none !important;
        }

    } 
   @media only screen and (max-width: 1800px)
   {
   .sidebar_section {
       width: 100%;
/*       float: left;*/
      }
   }
   .sidebar_color_content {
    width: 100%;
    height: auto!important; 
   }


@media only screen and (max-width: 1026px) {
      .shopping {
       display: flex;
   }
   .header.scrolled {
     height:auto; 
}




   .product_col
   {
      padding-bottom: 20px;
   }
   .arrivals {
    padding-top: 130px;
 }

  @media only screen and (min-width: 1025px) {
        .col-sm-6 {
          width: 100%;
      }

    } 
    @media only screen and (max-width: 1026px) {
        .col-sm-6 {
          width: 50%;
      }


      
        .sidebar_section_content ul li {
             height: 100%;
             padding-left: 2px;
          }

          .product_price {
          font-size: 14px;
          font-weight: 600;
       }

       .product_name a {
          font-size: 12px;
       }
       .product_col {
              padding-bottom: 0px; 
         }

         .product {
           margin-right: 30px; 
        }

        .products {
         padding-top: 121px;
      }





    } 


    .rating {
    margin-top: 8px;
}

.section_title {
    font-family: 'Lucida', serif;
    font-size: 40px;
    text-transform: none;
    color: #2f2f2f;
    margin-top: -4px;
}

.product_info {
    float: none;
}
.product {
    text-align: center;
}

.product {
    width: 100%!important;
 }

 .product__badge {
    position: absolute;
    top: -6px!important;
 }


 @media (min-width: 1200px)
 {
   .container {
       max-width: 1400px!important;
   }
}
</style>

      
<style>
   label {
     margin-bottom: 0!important; 
}
/*.sidebar_section_content ul li {
    height: auto;
 }*/
 .sidebar_section_content ul li label {
    font-size: 14px;
    color: #232323;
    line-height: 47px;
}
.products_container {
    margin-top: 0px;
}
</style>

         <div class="products">
            <div class="container">
               <div class="row">

                  <div class="col-4">
                     <div class="sidebar_left clearfix">
                        <div class="sidebar_section">
                           <div class="sidebar_title">Color</div>
                           <div class="sidebar_section_content sidebar_color_content mCustomScrollbar" data-mcs-theme="minimal-dark">
                              <ul>
                                 <?php
                                 $color = $this->crud->selectDataByMultipleWhere('color',array('status'=>1,));
                                 foreach($color as $key => $data)
                                    { ?>
                                 <li>
                                    <label>
                                       <input  type="checkbox" name="color[]" class="color_val" value="<?=$data->id ?>">
                                       <?=$data->name ?>
                                    </label>
                                 </li>
                                 <?php } ?>
                              </ul>
                           </div>
                        </div>

                        <div class="sidebar_section">
                           <div class="sidebar_title">Size</div>
                           <div class="sidebar_section_content sidebar_color_content mCustomScrollbar" data-mcs-theme="minimal-dark">
                              <ul>
                                 <?php
                                 $size = $this->crud->selectDataByMultipleWhere('size',array('status'=>1,));
                                 foreach($size as $key => $data)
                                    { ?>
                                 <li>
                                    <label>
                                       <input type="checkbox" class="size_val" name="size[]" value="<?=$data->id ?>">
                                       <?=$data->name ?>
                                    </label>
                                 </li>
                                 <?php } ?>
                              </ul>
                           </div>
                        </div>

                     </div>
                  </div>

                  <div class="col-8">
                     <div class="row products_container" id="filter_card">

                     </div>
                  </div>
                 
               </div>
              
            </div>
        
         </div>

       
    

<?php include('footer.php'); ?>

<script src="<?=base_url() ?>js/categories_custom.js"></script>

<script>



   var color = [];
   var size =[];
   var cat_name ="<?=$cat_name ?>";
   var sub_cat_name ="<?=$sub_cat_name ?>";

   $('.color_val').click(function(){
     color = [];
     $('.color_val:checkbox:checked').each(function(i){
       color[i] = $(this).val();
     });
   });

   $('.size_val').click(function(){
     size = [];
     $('.size_val:checkbox:checked').each(function(i){
       size[i] = $(this).val();
     });
     console.log(size);
   });

   

   
   
   function product_filter()
   {
      var form = new FormData();
      form.append("color", color);
      form.append("size", size);
      form.append("cat_name", cat_name);
      form.append("sub_cat_name", sub_cat_name);

      // console.log(size);

      var settings = {
        "url": "<?=base_url() ?>Filter/product_filter",
        "method": "POST",
        "dataType": "json",
        "timeout": 0,
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form
      };
      $.ajax(settings).done(function (response) {
        console.log(response);
        $("#filter_card").html(response.data);
      });
   }

   product_filter();

   $(document).on("click", ".color_val, .size_val",(function(e) {
     product_filter();
   }));

</script>
