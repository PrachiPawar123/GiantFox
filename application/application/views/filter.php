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

      .product {
        width: calc(100% / 3);
        /* margin-right: 30px; */
        margin-bottom: 40px;
        padding-left: 0;
        padding-right: 0;
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
 .sidebar_section_content ul li label {
    font-size: 14px;
    color: #232323;
    line-height: 47px;
}
.products_container {
    margin-top: 0px;
}

.sidebar {
  left: 50%;
  top: 10%;
  transition: left .3s ease-out;
  z-index: 9999;
}



/*----desktop--*/

    .color-div {
        position: relative;
        top: 0;
        z-index: 9999999;
        background: whitesmoke !important;
        left: 74px;
    }

    .size-div {
            position: relative;
            top: 0;
            z-index: 9999999;
            background: whitesmoke !important;
            left: 139px;
            width: 116px;
        }

    .sidebar_section1:hover .sidebar_section_content ul li {
    border-bottom: solid 1px #937c6f;
    }

    .sidebar_section_content ul li {
            height: 38px;
            padding-left: 16px;
            padding-right: 16px;
        border-bottom: solid 1px #e0e3e4;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }
    .sidebar_title {
        height: 37px;
        background: #e0e3e4;
        line-height: 38px;
        font-family: 'Lucida', serif;
        font-size: 14px;
    }


    .filter-bar{
        width: 100%;
        background: whitesmoke;
        padding: 6px 0;
    }

    .filter-color {
        margin: 0 10px;
    }

    a.btn1 {
        margin-left: 47px;
    }
    .product__badge {
        left: 0;
    }

/*---------mobile*/
 @media (max-width: 1200px)
     {
        .product__badge {
            left: 0;
        }
        .product {
            width: calc(100% / 3);
            /* margin-right: 30px; */
            margin-bottom: 5px;
            padding-left: 0;
            padding-right: 0;
        }
       .color-div {
            position: relative;
            top: 10px;
            z-index: 9999999;
            background: whitesmoke !important;
            left: 17px;
        }
        .filter-bar {
            text-align: center;
        }
        a.btn1 {
            margin-left: 0;
        }
        .color-div {
            left: 100px;
        }
    }


div#size-box {
    position: absolute;
    top: 131%;
}
div#color-box {
    position: absolute;
    top: 133%;
}
</style>

         <div class="products" style="padding-bottom: 0;">
            <div class="container-fluid">
               <div class="row">

                <div class="filter-bar mt-3" style="display: flex;">
                    <div class="col-10">
                        <a class="btn1" >Filter</a>
                        <a class="filter-color color-hide-btn"  style="cursor: pointer;">Color</a>
                        <a class="filter-color size-hide-btn" style="cursor: pointer;">Size</a>
                        <select style="border: none;" class="select-box">
                            <option selected>Select Price</option>
                            <option value="1">Low to High</option>
                            <option value="2">High to Low</option>
                        </select>
                        <!-- <a class="filter-color">Price</a> -->


                        <div class="color-ap1i" style="display:none;" id="color-box" onclick="topFunction()">
                            <div class="color-div" >
                                <div class="sidebar_section1">
                                   <div class="sidebar_title" style="text-align: left;">Color</div>
                                   <div class="sidebar_section_content sidebar_color_content mCustomScrollbar" data-mcs-theme="minimal-dark">
                                      <ul>
                                         <?php
                                         $color = $this->crud->selectDataByMultipleWhere('color',array('status'=>1,));
                                         foreach($color as $key => $data)
                                            { ?>
                                         <li style="text-align: left;">
                                            <label>
                                               <input  type="checkbox" name="color[]" class="color_val" value="<?=$data->id ?>">
                                               <?=$data->name ?>
                                            </label>
                                         </li>
                                         <?php } ?>
                                      </ul>
                                   </div>
                                </div>
                            </div>
                        </div>

                        <!-- -color -->

                     <div style="display:none;" id="size-box" onclick="topFunction()">
                         <div class="size-div">
                             <div class="sidebar_section1" >
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

                    </div>
                    <div class="col-2">
                        <p><span id="counts-no">0</span> PRODUCTS</p>
                    </div>
                </div>


                

                


                

                  <div class="" id="login_Box_Div" style="display:none;">
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

                  <div class="col-12">
                     <div class="row products_container mt-4" id="filter_card">

                     </div>
                  </div>
                 
               </div>
              
            </div>
        
         </div>


         

       
    

<?php include('footer.php'); ?>

<script src="<?=base_url() ?>js/categories_custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>

    // let mybutton = document.getElementById("size-box");
    let mybutton = document.getElementById("color-box");
    let sizemybutton = document.getElementById("size-box");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
      if (document.documentElement.scrollTop < 20) {
        // mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
        sizemybutton.style.display = "none";
      }
    }
    /*sixe*/
    

    // function scrollFunction() {
    //   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    //     mybutton.style.display = "block";
    //   } else {
    //     mybutton.style.display = "none";
    //   }
    // }

//     $(document).ready(function() {
//    $(document).on("scroll", function(){
//      if ( window.scrollMaxY == window.scrollY ) {
//         $("#color-box").hide();
//      }
//    })
// });



   var color = [];
   var sort_op = '';
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

   $("select.select-box").change(function(){
        sort_op = $(this).children("option:selected").val();
        // alert(sort_op);
        product_filter();
    });

   
   
   function product_filter()
   {
      var form = new FormData();
      form.append("color", color);
      form.append("size", size);
      form.append("cat_name", cat_name);
      form.append("sub_cat_name", sub_cat_name);
      form.append("sort_op", sort_op);

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
        $("#counts-no").html(response.counts);
      });
   }

   product_filter();

   $(document).on("click", ".color_val, .size_val",(function(e) {
     product_filter();
   }));

</script>
<script>
$('#buttonLogin').on('click', function(e){
    $("#login_Box_Div").toggle();
    $(this).toggleClass('class1')
});


/*-color--*/
$(document).ready(function() {
    $('.color-hide-btn').click(function() {
            $('#color-box').slideToggle("fast");
    });
});

/*--size--*/
$(document).ready(function() {
    $('.size-hide-btn').click(function() {
        $('#size-box').slideToggle("fast");
    });
});


$(document).mouseup(function (e) {
    if ($(e.target).
        closest("#color-box").
        length=== 0) {
        $("#color-box").hide();
    }
}); 
$(document).mouseup(function (e) {
    if ($(e.target).
        closest("#size-box").
        length=== 0) {
        $("#size-box").hide();
    }
}); 


// $(document).ready(function(){
//   $(".color-hide-btn").click(function(){
//     $("#color-box").hide();
//   });
//   $(".color-hide-btn").click(function(){
//     $("#color-box").show();
//   });
// });









</script>



