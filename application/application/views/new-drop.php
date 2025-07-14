<?php include('header.php'); ?>

<style>
   .product_col
   {
      padding-bottom: 20px;
   }
   .arrivals {
    padding-top: 130px;
 }

.section_title {
    font-family: 'Lucida', serif;
    font-size: 40px;
    text-transform: none;
    color: #2f2f2f;
    margin-top: -4px;
}
/*.product_image>img {
    position: relative;
}*/

 @media only screen and (min-width: 1025px) {
        .col-sm-6 {
          width: 100%;
      }
    } 
    @media only screen and (max-width: 1026px) {
        .col-sm-6 {
          width: 50%;
      }
      .product__badge {
    position: absolute;
    top: 12px;
    left: 0;
    opacity: 1;
    z-index: 9;
}
    } 

.product {
    position: relative;
    overflow: hidden;
   
}

.product_info {
    float: none;
}
.product {
    text-align: center;
}

</style>





         <div class="arrivals">
            <div class="container-fluid">
               <div class="row">
                  <div class="col">
                     <div class="section_title_container text-center">
                        <div class="section_title">NEW DROPS</div>
                     </div>
                  </div>
               </div>
               <div class="row products_container">

                  <?php
                  $this->db->select('name,show_sale,sold_out,slug,thumb_img,thumb_img2,mrp_price,sale_price,rating');
                  $productlist = $this->crud->selectDataByMultipleWhere('product',array('status'=>1,'new_drops'=>1,));
                     foreach($productlist as $data)
                        { ?>


                  <div class="col-lg-3 col-sm-6 product_col product-width mb-4">
                     <div class="product">
                        <?php
                              if($data->show_sale==1)
                                 { ?>
                        <div class="product__badge">
                           <span class="product__badge--items sale">Sale</span>
                       </div>
                    <?php } ?>
                    <?php
                    if($data->sold_out==1)
                     { ?>
                        <div class="product__badge">
                           <span class="product__badge--items sale">Sold Out</span>
                       </div>
                    <?php } ?>

                        <div class="product_image">
                           <a href="<?=base_url('product-details/'.$data->slug) ?>">
                             
                              <img src='<?=base_url() ?>media/uploads/product/<?=$data->thumb_img ?>' onmouseover="this.src='<?=base_url() ?>media/uploads/product/<?=$data->thumb_img2 ?>';" onmouseout="this.src='<?=base_url() ?>media/uploads/product/<?=$data->thumb_img ?>';" />
                              <?php
                              if($data->show_sale==1)
                                 { ?>
                                 <span class="percent">-<?=discount($data->mrp_price,$data->sale_price) ?>%</span>
                              <?php } ?>
                           </a>
                        </div>
                        <div class="rating rating_4">
                           <?php
                           $i=1;
                           while($i<=5) 
                           {
                              if($i<=$data->rating)
                              { ?>
                           <i class="fa fa-star"></i>
                           <?php } $i++; } ?>
                        </div>
                        <div class="product_content clearfix">
                           <div class="product_info">
                              <div class="product_name"><a href="<?=base_url('product-details/'.$data->slug) ?>"><?=$data->name ?></a></div>
                              <div class="product_price">₹ <?=number_format($data->sale_price,2) ?>
                              <?php
                              if($data->show_sale==1)
                                 { ?> 
                                 <del style="color:#7a0808;">₹ <?=number_format($data->mrp_price,2) ?></del>
                              <?php } ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php } ?>
                  
            
                  
               </div>
            </div>
         </div>








<?php include('footer.php'); ?>
