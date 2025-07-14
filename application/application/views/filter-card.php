<?php
$product = $this->db->get_where('product',array('id'=>$value->p_id))->result_object()[0];
if(!empty($product))
{
?>

<style>
   .product__badge {
    position: absolute;
    top: 22px;
 }


/*desktop*/

.sale-batch
{
   top: -6px!important
}

 .sold-batch{
   top: 11px !important;
 }

  @media (max-width: 1200px)
     {
        .product__badge--items {
          font-size: 13px;
      }
    }

</style>

<div class="col-lg-3 col-sm-6 product_col product-width mb-4">
                     <div class="product" style="width:100%">
                        <?php
                              if($product->show_sale==1)
                                 { ?>
                        <div class="product__badge sale-batch" style="">
                           <span class="product__badge--items sale">Sale</span>
                       </div>
                    <?php } ?>
                    <?php
                    if($product->sold_out==1)
                     { ?>
                        <div class="product__badge sold-batch">
                           <span class="product__badge--items sale">Sold Out</span>
                       </div>
                    <?php } ?>
                        <div class="product_image">
                           <a href="<?=base_url('product-details/'.$product->slug) ?>">
                              <img src='<?=base_url() ?>media/uploads/product/<?=$product->thumb_img ?>' onmouseover="this.src='<?=base_url() ?>media/uploads/product/<?=$product->thumb_img2 ?>';" onmouseout="this.src='<?=base_url() ?>media/uploads/product/<?=$product->thumb_img ?>';" />
                           </a>
                           <?php
                           if($product->show_sale==1)
                              { ?>
                           <span class="percent">-<?=discount($product->mrp_price,$product->sale_price) ?>%</span>
                        <?php } ?>
                        </div>
                        <div class="rating rating_4">
                           <?php
                           $i=1;
                           while($i<=5) 
                           {
                              if($i<=$product->rating)
                              { ?>
                           <i class="fa fa-star"></i>
                           <?php } $i++; } ?>

                        </div>
                        <div class="product_content clearfix">
                           <div class="product_info">
                              <div class="product_name"><a href="<?=base_url('product-details/'.$product->slug) ?>" style="    font-size: 12px;"><?=$product->name ?></a></div>
                              <div class="product_price" style="font-size: 15px;">₹ <?=number_format($product->sale_price,2) ?> 
                              <?php
                              if($product->show_sale==1)
                                 { ?> 
                                 <del style="color:#7a0808;font-size: 12px;">₹ <?=number_format($product->mrp_price,2) ?></del>
                              <?php } ?>
                           </div>
                           </div>
                        </div>
                     </div>
                  </div>
<?php } ?>