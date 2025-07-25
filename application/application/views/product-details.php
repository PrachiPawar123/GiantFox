<?php 
$currentURL = current_url();
include('header.php'); ?>
<link
  rel="stylesheet"
  type="text/css"
  href="<?=base_url() ?>styles/product.css"
/>
<link
  rel="stylesheet"
  type="text/css"
  href="<?=base_url() ?>styles/product_responsive.css"
/>
<style>
  .main_nav ul li {
    display: inline-block;
    margin-right: 0px;
  }
  @media only screen and (min-width: 1025px) {
    .shopping_cart {
      left: 0 !important;
      top: 0 !important;
    }

    .shopping {
      position: relative;
      top: 0 !important;
      left: 0% !important;
    }
    .header.scrolled {
      height: auto !important;
    }

    .desktop-none {
      display: none !important;
    }
  }

  @media only screen and (max-width: 1026px) {
    .shopping {
      display: flex;
    }
    .header.scrolled {
      height: auto;
    }

    .mobile-none {
      display: none !important;
    }
  }
  .cart_total ul li {
    width: 100%;
    height: 75px !important;
  }
  .cart_product_total {
    width: 23% !important;
    text-align: center;
  }
  .header {
    height: auto !important;
  }

  .product-guid-container {
    margin: 1.2rem 0;
  }
  .product-guid-container {
    width: 100%;
    height: 70px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
  }
  .product-help-heading {
    width: 95%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 4px;
    padding-top: 15px;
  }
  .product-help-heading h5 {
    font-size: 14px;
    color: #000;
    font-family: helvetica-bold;
  }
  .product-help-heading p {
    color: #000;
    font-family: helvetica-regular;
    font-size: 14px;
    line-height: 1;
  }
  .product-chart-container {
    background-color: #fbfbfb;
    border-radius: 9px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    width: 100%;
    height: 70%;
    /* padding-top: 12px; */
  }
  h5.size-chart {
    position: relative;
    text-align: end;
    color: #000;
    font-family: helvetica-bold;
    font-size: 12px;
    cursor: pointer;
  }
  @media (min-width: 1200px) {
    .container {
      max-width: 1500px;
    }
  }

  .accordion {
    background-color: #fff;
    color: #777;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
  }

  .active,
  .accordion:hover {
    background-color: rgb(241, 235, 235);
  }

  .accordion:after {
    content: "\002B";
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
  }

  .active:after {
    content: "\2212";
  }

  .panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    background-color: rgb(241, 235, 235);
  }

  .regular_radio:checked + label {
    background: #7e736d;
    color: #ffffff;
    border: 3px solid #000 !important;
    border-radius: 10px;
    /* margin: 0; */
  }

  .mySlides {
    display: none;
  }
  img {
    vertical-align: middle;
  }

  /* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }

  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active,
  .dot:hover {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @keyframes fade {
    from {
      opacity: 0.4;
    }
    to {
      opacity: 1;
    }
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .prev,
    .next,
    .text {
      font-size: 11px;
    }
  }

  @media only screen and (min-width: 1025px) {
    .desktop-none {
      display: none !important;
    }
    .product_row {
      margin-top: 40px;
    }
    .modal-dialog {
      position: relative;
      left: 37%;
      bottom: -44%;
    }
    .shopping {
      left: 58%;
      top: -11px;
    }
    /*.search.header_search{
            left: 72%;
        }*/
  }
  @media only screen and (max-width: 1026px) {
    .mobile-none {
      display: none !important;
    }
    .product_row {
      margin-top: 0px;
    }
    .product {
      /* padding-top: 90px; */
      padding-bottom: 98px;
      background: #ffffff;
    }
    .shopping {
      left: 127%;
      top: -11px;
      display: flex;
    }
  }
  .row.mobile-none > div > img {
    border-radius: 10px;
  }

  .carousel-item.active {
    background: none !important;
  }
  .carousel-control-next-icon,
  .carousel-control-prev-icon {
    /*    background: #0c0c0c no-repeat center center;*/
  }

  .active,
  .dot:hover {
    background-color: transparent !important;
  }

  .active:after {
    content: none !important;
  }

  @media only screen and (max-width: 991px) {
    .product_content {
      margin-top: 35px;
    }
  }

  .item > img {
    border-radius: 10px !important;
  }

  .row.desktop-none {
    /*    margin-top: 24px;*/
    margin-top: 46px;
  }

  .regular_radio + label {
    width: 40px !important;
    height: 37px !important;
    border-radius: 10px;
  }

  .hr-line {
    width: 81%;
    background: black;
    position: relative;
    top: -34px;
    height: 1px;
  }
  .sold:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    border: 1px solid black;
    top: 38%;
  }
  .sold {
    position: relative;
  }

  .active,
  .dot:hover {
    background-color: #fffbfb !important;
  }

  .product_name {
    font-size: 25px !important;
    line-height: 1.2;
  }
  .product_size_container {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .help-guide-container {
    width: 393px;
    max-width: 100%;
    background-color: #141414;
  }

  .help-container {
    width: 100%;
    height: min-content;
    height: 100%;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
  .help-container .help-navigation {
    width: 100%;
    height: 20px;
    display: flex;
    justify-content: space-between;
    position: relative;
    align-items: center;
    border-top: 0.2px solid #fff2;
  }
  .help-container .img-container {
    width: 100%;
    height: 210px;
    display: flex;
    justify-content: center;
  }
  .help-container .img-container .img-pic {
    width: 35%;
    height: 100%;
  }
  .help-container .img-container .img-pic img {
    width: 100%;
    height: 90%;
    object-fit: contain;
  }
  .help-container .img-container .img-pic p {
    text-align: center;
    color: #fff;
    font-size: 10px;
    font-family: helvetica-regular;
  }
  .help-container .details-container {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 2px;
    padding-top: 5px;
  }
  .help-container .details-container h4 {
    color: #fff;
    font-size: 8px;
    font-family: helvetica-bold;
  }
  .help-container .details-container p {
    color: #fff;
    font-size: 9px;
    font-family: helvetica-regular;
    line-height: 1.5;
  }
  .help-guide-container .more-q-container {
    width: 100%;
    height: 48px;
    position: absolute;
    bottom: 0;
    background-color: #000;
    left: 0;
    display: flex;
    align-items: center;
    padding: 0 25px 0 20px;
    justify-content: space-between;
    z-index: 13;
  }
  .help-guide-container .more-q-container .more-q-heading {
    display: flex;
    flex-direction: column;
    gap: 5px;
  }
  .help-guide-container .more-q-container .more-q-heading h4 {
    color: #f5f5f5;
    font-size: 12px;
    font-family: helvetica-bold;
  }
  .help-guide-container .more-q-container .more-q-heading a {
    color: #06e26d;
    font-size: 12px;
    text-decoration: none;
    font-family: helvetica-regular;
  }
  .help-guide-container .more-q-container svg {
    width: 16px;
    height: 28px;
  }
  i.fa.fa-star {
    font-size: 14px;
  }
</style>

<div class="product">
  <div class="newsletter">
    <div class="row product_row">
      <div class="col-lg-7">
        <div class="row mobile-none" id="desktop_image_html"></div>

        <div class="row desktop-none">
          <div
            class="product-details owl-carousel owl-theme"
            id="mobile_image_html"
          ></div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="product_content">
          <div class="product_name">
            <?=$EDITDATA[0]->name ?><br />
            <?php
                               $i=1;
                               while($i<=5) 
                               {
                                  if($i<=$EDITDATA[0]->rating) { ?>
            <i class="fa fa-star"></i>
            <?php } $i++; } ?>
          </div>
          <div class="product_price">
            ₹
            <?=number_format($EDITDATA[0]->sale_price,2) ?>
            <?php
                                if($EDITDATA[0]->show_sale==1) { ?>
            <del
              >₹
              <?=number_format($EDITDATA[0]->mrp_price,2) ?></del
            >
            <?php } ?>
          </div>
          <?php
                            if(!empty($EDITDATA[0]->show_sale==1)) { ?>
          <span
            >(-<?=discount($EDITDATA[0]->mrp_price,$EDITDATA[0]->sale_price)
            ?>%)</span
          >
          <?php } ?>

          <p>Tax included. Shipping calculated at checkout.</p>

          <div class="product_size_container" style="margin-top: 0">
            <span>Color</span>
            <div class="product_size">
              <ul
                class="d-flex flex-row align-items-start justify-content-start"
              >
                <?php
                                    $this->db->select('MIN(id) as id,
                color_id'); $this->db->group_by('color_id'); $color =
                $this->crud->selectDataByMultipleWhere('all_images',array('p_id'=>$EDITDATA[0]->id,));
                $f_color_id = 0; foreach ($color as $key => $value) {
                if($key==0) $f_color_id = $value->color_id; $color_name =
                $this->crud->selectDataByMultipleWhere('color',array('id'=>$value->color_id));
                ?>
                <li>
                  <input type="radio" id="colorradio_<?=$color_name[0]->id ?>"
                  name="product_color" style="margin: 0;" class="regular_radio colorradiobtn
                  colorradio_<?=$color_name[0]->id ?>"
                  <?php if($key==0)echo'checked'; ?>
                  value="<?=$color_name[0]->id ?>">
                  <label
                    for="colorradio_<?=$color_name[0]->id ?>"
                    style="background: <?=$color_name[0]->color_code ?>"
                  ></label>
                </li>
                <?php  } ?>
              </ul>
            </div>
          </div>
          <div class="product-guid-container">
            <div class="product-help-container">
              <div class="product_size">
                <span style="margin-bottom: 10px">Size</span>
                <ul
                  class="d-flex flex-row align-items-start justify-content-start"
                  id="size-ul"
                >
                  <?php
                  $this->db->select('MIN(id) asid, size_id'); // Example: get one id per size_id
                  $this->db->group_by('size_id'); $size =
                  $this->crud->selectDataByMultipleWhere('all_images',
                  array('p_id' => $EDITDATA[0]->id)); 
                  foreach ($size as $key => $value) { 
                    $size_name = $this->crud->selectDataByMultipleWhere('size',array('id'=>$value->size_id));
                  ?>
                  <li>
                    <input type="radio" style="margin-bottom: 0;" id="radio_<?=$size_name[0]->id ?>"
                    name="product_radio" class="regular_radio radio_<?=$size_name[0]->id
                    ?>"
                    <?php if($key==0)echo'checked'; ?>
                    value="<?=$size_name[0]->id ?>">
                    <label
                      id="line-trou<?=$size_name[0]->id ?>"
                      for="radio_<?=$size_name[0]->id ?>"
                      ><?php if(!empty($size_name)) echo $size_name[0]->name;
                      ?></label
                    >
                  </li>
                  <?php  } ?>
                </ul>
                <span class="not-found" style="display: none"
                  ><span id="sold_sizename" style="margin-right: 5px"></span>
                  size is not avaliable</span
                >
              </div>
            </div>
            <div
              class="product-chart-container"
              data-toggle="modal"
              data-target="#myModal2"
            >
              <div class="size-chart">SIZE CHART</div>
            </div>
          </div>

          <div class="product_size_container" style="margin-top: 0">
            <div class="product_quantity_container quantity-btn">
              <span>Quantity</span>
              <div class="product_quantity clearfix">
                <input
                  id="quantity_input"
                  class="max-input"
                  type="text"
                  pattern="[0-9]*"
                  value="1"
                  style="width: 100%;"
                />
                <div class="quantity_buttons">
                  <div
                    id="quantity_inc_button"
                    class="quantity_inc quantity_control"
                  >
                    <i class="fa fa-caret-up" aria-hidden="true"></i>
                  </div>
                  <div
                    id="quantity_dec_button"
                    class="quantity_dec quantity_control"
                  >
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                  </div>
                  
                </div>
              </div>
              <br />
              <span id="stock-quantity" style="margin-right: 0"></span>
              <span>Left</span>
            </div>
            <div class="cart_button add-cart-btn-show">
              <?php
                               if($EDITDATA[0]->sold_out==0) { ?>
              <a
                data-p_id="<?=$EDITDATA[0]->id ?>"
                data-type="1"
                class="btn btn-primary add-to-cart-btn"
                style="
                  width: 100%;
                  border-radius: 9px;
                  background-color: #000;
                  border: 1px solid black;
                  padding: 12px 0;
                  color: white;
                  cursor: pointer;
                "
                >ADD TO CART</a
              >
              <!-- <a class="btn btn-primary add-to-cart-btn" data-p_id="<?=$EDITDATA[0]->id ?>" data-type="2" style="width:100%;margin-top: 10px;border-radius: 9px;background-color: #fff;border: 1px solid black;color: black;padding: 12px 0;">BUY NOW</a> -->
              <?php } ?>
            </div>
          </div>
          <div class="product_size_container" style="margin-top: 0">
            <div class="product_quantity_container quantity-btn">
            <div class="footer_social">
                <ul>
                  <li>
                    <a
                      href="http://www.facebook.com/share.php?u=<?=$currentURL ?>"
                      target="blank"
                      ><i class="fa fa-facebook" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://api.whatsapp.com/send?phone=919999117789&text=<?=$currentURL ?>"
                      ><i class="fa fa-whatsapp" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://www.instagram.com/?url=<?=$currentURL ?>"
                      target="blank"
                      ><i class="fa fa-instagram" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://twitter.com/intent/tweet?url=<?=$currentURL ?>"
                      target="blank"
                      ><i class="fa fa-twitter" aria-hidden="true"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="cart_button add-cart-btn-show">
              <?php
                               if($EDITDATA[0]->sold_out==0) { ?>
              <!-- <a
                data-p_id="<?=$EDITDATA[0]->id ?>"
                data-type="1"
                class="btn btn-primary add-to-cart-btn"
                style="
                  width: 100%;
                  border-radius: 9px;
                  background-color: #000;
                  border: 1px solid black;
                  padding: 12px 0;
                  color: white;
                  cursor: pointer;
                "
                >ADD TO CART</a
              > -->
              <a class="btn btn-primary add-to-cart-btn" data-p_id="<?=$EDITDATA[0]->id ?>" data-type="2" style="width:100%;border-radius: 9px;background-color: #fff;border: 1px solid black;color: black;padding: 12px 0;">BUY NOW</a>
              <?php } ?>
            </div>
          </div>

          <a
            class="btn btn-primary add-to-wishlist-btn mt-3"
            style="
              width: 100%;
              border-radius: 9px;
              background-color: #000;
              border: 1px solid black;
              padding: 12px 0;
              color: white;
              cursor: pointer;
            "
            >ADD TO WISHLIST</a
          >

          <a
            class="btn btn-primary cart_button sold-out-btn-show mt-2"
            style="
              width: 100%;
              border-radius: 9px;
              background-color: #000;
              border: 1px solid black;
              padding: 12px 0;
              color: white;
              cursor: pointer;
            "
            >SOLD OUT</a
          >

          <div class="accordian-tab mt-2">
            <button class="accordion">Description</button>
            <div class="panel mb-3"><?=$EDITDATA[0]->description ?></div>

            <!-- <button class="accordion">Details</button>
            <div class="panel mb-3"><?=$EDITDATA[0]->specification ?></div> -->

            <!-- <button class="accordion">Share</button>
            <div class="panel mb-3">
              <div class="footer_social">
                <ul>
                  <li>
                    <a
                      href="http://www.facebook.com/share.php?u=<?=$currentURL ?>"
                      target="blank"
                      ><i class="fa fa-facebook" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://api.whatsapp.com/send?phone=919999117789&text=<?=$currentURL ?>"
                      ><i class="fa fa-whatsapp" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://www.instagram.com/?url=<?=$currentURL ?>"
                      target="blank"
                      ><i class="fa fa-instagram" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://twitter.com/intent/tweet?url=<?=$currentURL ?>"
                      target="blank"
                      ><i class="fa fa-twitter" aria-hidden="true"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>

<script src="<?=base_url() ?>js/product_custom.js"></script>

<script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
</script>

<style></style>

<!-- -----fit chart -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content help-guide-container">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          &times;
        </button>
      </div>
      <div class="modal-body">
        <div class="help-container">
          <div class="help-navigation"></div>
          <div class="img-container">
            <div class="img-pic">
              <img
                alt=""
                src="https://cdn.shopify.com/s/files/1/0514/9494/4962/files/size_guide_U001.png?v=1677594555"
              />
              <p>REGULAR FIT (S)</p>
            </div>
            <div class="img-pic">
              <img
                alt=""
                src="https://cdn.shopify.com/s/files/1/0514/9494/4962/files/Size_Guide_002.png?v=1677593705"
              />
              <p>OVERSIZED FIT (M)</p>
            </div>
          </div>
          <div class="details-container">
            <h4>WHAT IS THE KEY DIFFERENCE BETWEEN BOTH FITS?</h4>
            <p>
              In terms of fit, the oversized option is determined by our sizing
              chart. Nevertheless, if you prefer a regular fit, we recommend
              selecting a size down from your usual sizing option.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ---size chart -->
<style>
  .size-guide-container {
    width: 393px;
    max-width: 100%;
    background-color: #141414;
  }
  .guid-container {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
  }
</style>

<div class="modal fade" id="myModal2" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content size-guide-container">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          &times;
        </button>
      </div>
      <div class="modal-body">
        <div class="guid-container">
          <div class="container-navigation">
            <p class="size-chart-table">SIZE CHART</p>
            <div class="fill-line"></div>
          </div>
          <div class="chart-container">
            <img
              alt=""
              src="<?=base_url() ?>media/uploads/product/<?=$EDITDATA[0]->size_chart ?>"
              style="width: 100%; height: 100%"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .cart-items,
  tbody {
    display: block;
    width: 100%;
  }
  .cart-items,
  tbody {
    display: block;
    width: 100%;
  }
  .cart-items td {
    padding-top: 2rem;
  }
  .cart-item__media {
    grid-row: 1 / 3;
  }
  .cart-items td,
  .cart-items th {
    padding: 0;
    border: none;
  }
  td.cart-item__media {
    border: none !important;
  }
  .cart-item__media {
    position: relative;
  }
  .cart-item__link {
    display: block;
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: 100%;
    height: 100%;
  }
  .cart-item__image {
    max-width: 100%;
  }
  .drawer__cart-items-wrapper .cart-item__image {
    max-width: 100%;
    height: 110px;
    object-fit: cover;
  }
  .cart-item > td + td {
    padding-left: 0 !important;
  }
  .cart-items td {
    padding-top: 2rem;
  }
  .cart-item__details {
    width: auto;
    grid-column: 2 / 4;
  }
  .cart-items td,
  .cart-items th {
    padding: 0;
    border: none;
  }
  .cart-item__details {
    font-size: 1.6rem;
    line-height: calc(1 + 0.4 / var(--font-body-scale));
  }
  .cart-item__details > * {
    margin: 0;
    max-width: 30rem;
  }
  .break {
    word-break: break-word;
  }

  p.size-chart-table {
    font-size: 19px;
  }
  a.cart-item__name.h4.break {
    font-size: 14px;
    color: white;
  }

  .product-option {
    font-size: 17px;
    color: white;
    display: block;
    /*    justify-content: space-between;*/
  }
  .cart-item__image {
    height: fit-content;
  }

  .modal-dialog-cart {
    position: fixed;
    right: 0;
    bottom: 0;
    top: 0;
    z-index: 99999;
  }

  @media screen and (min-width: 750px) {
    .cart-items {
      border-spacing: 0;
      border-collapse: separate;
      box-shadow: none;
      width: 100%;
      display: table;
    }
    .cart-item__media {
      width: 10rem;
    }
    .cart-items td {
      vertical-align: top;
    }
  }

  @media only screen and (max-width: 1026px) {
    .cart-item > td + td {
      padding-left: 24px !important;
    }
  }
</style>

<!-- add to cart box -->
<div class="modal fade" id="myModal-cart" role="dialog">
  <div class="modal-dialog-cart">
    <div class="modal-content size-guide-container">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          &times;
        </button>
      </div>
      <div class="modal-body">
        <div class="guid-container">
          <div class="cart-container">
            <div class="cart-items">
              <table class="cart-items">
                <tbody role="rowgroup">
                  <tr id="CartDrawer-Item-1" class="cart-item" role="row">
                    <td
                      class="cart-item__media"
                      role="cell"
                      headers="CartDrawer-ColumnProductImage"
                    >
                      <img
                        class="cart-item__image"
                        src="<?=base_url() ?>media/uploads/product/<?=$EDITDATA[0]->thumb_img ?>"
                        alt=""
                        loading="lazy"
                        width="150"
                        height="150"
                      />
                    </td>
                    <td
                      class="cart-item__details"
                      role="cell"
                      headers="CartDrawer-ColumnProduct"
                    >
                      <a href="#!" class="cart-item__name h4 break"
                        ><?=$EDITDATA[0]->name ?></a
                      >
                      <div class="product-option">
                        RS.
                        <?=$EDITDATA[0]->sale_price ?>
                      </div>
                      <div class="product-option">
                        Size. <span id="sizename"></span>
                      </div>
                      <div class="product-option">
                        Color. <span id="colorname"></span>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
      var p_id = 0;
      var type = 0;
      $(document).on("click", ".add-to-cart-btn",(function(e) {
          p_id = $(this).data("p_id");
          type = $(this).data("type");
          add_to_cart();
      }));


      function add_to_cart()
      {
          console.log("<?=base_url() ?>cart/add_to_cart")
          var color_value = $('input[name="product_color"]:checked').val();
          var size_val = $('input[name="product_radio"]:checked').val();
          var quantity = $("#quantity_input").val();

          var form = new FormData();
          form.append("p_id", p_id);
          form.append("quantity", quantity);
          form.append("size_val", size_val);
          form.append("color_value", color_value);

          var settings = {
            "url": "<?=base_url() ?>cart/add_to_cart",
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
            if(type==1)
            {
              $(".toastBox").removeClass("active");
              toast_print(response.message);
              setTimeout(function() {
                  // location.reload();
              }, 1000);

              $("#sizename").html(response.sizename);
              $("#colorname").html(response.colorname);
              $("body").addClass("show-sidebar-cart");
              setTimeout(function() {
                  location.reload();
              }, 1000);

              // $("body").addClass('show-sidebar-cart');
              // $("#upcoming-modal-new").modal("show");
              // $("#myModal-cart").modal('show');


            }
            else
            {
              setTimeout(function() {
                  window.location.href = "<?=base_url() ?>checkout";
              }, 2000);

            }

          });
      }

  $(document).on("click", ".close-cart-btn",(function(e) {
         $("#myModal-cart").modal('hide');
      }));



      var this_btn;
      var ok_owl = 0;
      var inc = 1;
      var color_value = 0;
      var size_val = 0;

      $(document).on("click", ".colorradiobtn",(function(e) {
          this_btn = $(this);
          ok_owl = 1;
          inc = inc+1;

          size_val = 0;
          get_stock();
      }));
      $(document).on("click", ".sizeradiobtn",(function(e) {
          this_btn = $(this);
          ok_owl = 1;
          inc = inc+1;
          if($('input[name="product_radio"]:checked').val()!==undefined)
              size_val = $('input[name="product_radio"]:checked').val();
          else size_val = 0;
          get_stock();
      }));

      // $(document).on("click", ".regular_radio",(function(e) {
      //     this_btn = $(this);
      //     ok_owl = 1;
      //     inc = inc+1;

      //     get_stock();
      // }));


      function get_stock(this_btn) {
      var inc = 1; // define inc or pass it as argument
      $("#mobile_image_html").addClass("nowplay" + inc);

      var color_value = $('input[name="product_color"]:checked').val();
      var size_val = $('input[name="product_radio"]:checked').val();

      var form = new FormData();
      form.append("p_id", <?= $EDITDATA[0]->id ?>);
      form.append("size_id", size_val);
      form.append("color_id", color_value);

      // Debug: print FormData
      for (var pair of form.entries()) {
          console.log(pair[0] + ': ' + pair[1]);
      }

      var settings = {
          url: "<?= base_url() ?>welcome/get_stock",
          method: "POST",
          dataType: "json",
          timeout: 0,
          processData: false,
          mimeType: "multipart/form-data",
          contentType: false,
          data: form
      };

      $.ajax(settings).done(function (response) {
          console.log(response);

          if (response.status == 200) {
              $("#stock-quantity").html(response.data);
              $("#size-ul").html(response.size_html);
              $("#desktop_image_html").html(response.desktop_image_html);
              $("#mobile_image_html").html(response.mobile_image_html);
              $("#sold_sizename").html(response.sizename);
              $(".max-input").attr('maxlength', response.data);
              $('.sold').removeClass("sold");
              if (response.data > 0) {
                  $('.add-cart-btn-show').show();
                  $('.sold-out-btn-show').hide();
                  $('.quantity-btn').show();
                  $('.not-found').hide();
              } else {
                  $('.add-cart-btn-show').hide();
                  $('.sold-out-btn-show').show();
                  $('.quantity-btn').hide();
                  $('.not-found').show();
                  $(this_btn).parent().children('label').addClass("sold");
              }

              // Quantity input controls
              if ($('.product_quantity').length) {
                  var input = $('#quantity_input');
                  var incButton = $('#quantity_inc_button');
                  var decButton = $('#quantity_dec_button');

                  var endVal = 1;
                  input.val(endVal);

                  incButton.off().on('click', function () {
                      var current = parseInt(input.val());
                      if (current < response.data) {
                          input.val(current + 1);
                      }
                  });

                  decButton.off().on('click', function () {
                      var current = parseInt(input.val());
                      if (current > 1) {
                          input.val(current - 1);
                      }
                  });
              }

              // Initialize Owl Carousel
              $('.nowplay' + inc).owlCarousel({
                  loop: false,
                  margin: 10,
                  nav: false,
                  responsive: {
                      0: { items: 2 },
                      600: { items: 3 },
                      1000: { items: 5 }
                  }
              });
          }
      });
  }


      get_stock();
</script>

<script>
  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides((slideIndex += n));
  }

  function currentSlide(n) {
    showSlides((slideIndex = n));
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
      slideIndex = 1;
    }
    if (n < 1) {
      slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }
</script>

<script>
  $(document).on("click", ".add-to-wishlist-btn", function (e) {
    add_to_wishlist();
  });

  function add_to_wishlist() {
    var form = new FormData();
    form.append("p_id", "<?=$EDITDATA[0]->id ?>");

    var settings = {
      url: "<?=base_url() ?>Wishlist/add",
      method: "POST",
      dataType: "json",
      timeout: 0,
      processData: false,
      mimeType: "multipart/form-data",
      contentType: false,
      data: form,
    };

    $.ajax(settings).done(function (response) {
      console.log(response);
      // if(response.status==200)
      // {
      $(".toastBox").removeClass("active");
      toast_print(response.message);
      setTimeout(function () {
        location.reload();
      }, 2000);
      // }
    });
  }

  $(".close").on("click", function () {
    $(this).closest(".modal").hide();
    $(".modal-backdrop").remove();
  });

  /*--clode model*/

  // $('.modal').click(function (e) {
  //     $('.modal').modal('hide');
  //  });
</script>
