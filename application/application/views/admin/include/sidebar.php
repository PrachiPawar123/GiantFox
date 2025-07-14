<?php
$current = current_url();
// print_r($current);
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>

      <div id="sidebar" class="app-sidebar">
            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
               <div class="menu">
                  <div class="menu-profile">
                     <a href="<?php echo base_url(); ?>" target="_blank" class="menu-profile-link">
                        <div class="menu-profile-cover with-shadow"></div>
                        <div class="menu-profile-image">
                           <img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" alt="" />
                        </div>
                        <!-- <div class="menu-profile-info">
                           <div class="d-flex align-items-center">
                              <div class="flex-grow-1">
                                <?php echo website_name; ?>
                              </div>
                           </div>
                           <small>Frontend developer</small>
                        </div> -->
                     </a>
                  </div>
                 
                  <div class="menu-header">Admin Panels</div>

                  <div class="menu-item <?php if($current==base_url('admin/dashboard')) echo 'active'; ?> ">
                     <a href="<?php echo base_url('admin/dashboard');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-dashboard"></i>
                        </div>
                        <div class="menu-text">Dashboard</div>
                     </a>
                  </div>

                  <!-- site setting -->
                  <div class="menu-item <?php if($current==base_url('admin_con/site_setting/edit/1')) echo 'active'; ?>">
                     <a href="<?php echo base_url('admin_con/site_setting/edit/1');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-cog"></i>
                        </div>
                        <div class="menu-text">Site Setting </div>
                     </a>
                  </div>
                  <div class="menu-item <?php if($current==base_url('admin_con/site_setting/video/2')) echo 'active'; ?>">
                     <a href="<?php echo base_url('admin_con/site_setting/video/2');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-cog"></i>
                        </div>
                        <div class="menu-text">Bottom Video </div>
                     </a>
                  </div>
                  <div class="menu-item <?php if($current==base_url('admin_con/site_setting/about/3')) echo 'active'; ?>">
                     <a href="<?php echo base_url('admin_con/site_setting/about/3');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-cog"></i>
                        </div>
                        <div class="menu-text">About Us </div>
                     </a>
                  </div>
                  <div class="menu-item <?php if($current==base_url('admin_con/site_setting/term/4')) echo 'active'; ?>">
                     <a href="<?php echo base_url('admin_con/site_setting/term/4');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-cog"></i>
                        </div>
                        <div class="menu-text">Term & Condition </div>
                     </a>
                  </div>
                  <div class="menu-item <?php if($current==base_url('admin_con/site_setting/privacy/5')) echo 'active'; ?>">
                     <a href="<?php echo base_url('admin_con/site_setting/privacy/5');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-cog"></i>
                        </div>
                        <div class="menu-text">Privacy Policy </div>
                     </a>
                  </div>
                  <div class="menu-item <?php if($current==base_url('admin_con/site_setting/shipping/6')) echo 'active'; ?>">
                     <a href="<?php echo base_url('admin_con/site_setting/shipping/6');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-cog"></i>
                        </div>
                        <div class="menu-text">Shipping Policy </div>
                     </a>
                  </div>


                  <div class="menu-item <?php if($current==base_url('admin_con/site_setting/cancel/9')) echo 'active'; ?>">
                     <a href="<?php echo base_url('admin_con/site_setting/cancel/9');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-cog"></i>
                        </div>
                        <div class="menu-text">Return & REFUND POLICIES</div>
                     </a>
                  </div>

                  <!-- ------all pages images  -->
                   <div class="menu-item has-sub">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-cc-discover "></i>
                        </div>
                        <div class="menu-text">All Page Images </div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/site_setting/cart_image/7');?>" class="menu-link">
                              <div class="menu-text">Shopping Cart Image </div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/site_setting/checkout_image/10');?>" class="menu-link">
                              <div class="menu-text">Checkout Page Image</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/site_setting/checkout_image/11');?>" class="menu-link">
                              <div class="menu-text">Contact Page Image</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/site_setting/checkout_image/12');?>" class="menu-link">
                              <div class="menu-text">About Page Image</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/site_setting/checkout_image/13');?>" class="menu-link">
                              <div class="menu-text">Term & Condition Page Image</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/site_setting/checkout_image/14');?>" class="menu-link">
                              <div class="menu-text">Privacy Policy Page Image</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/site_setting/checkout_image/15');?>" class="menu-link">
                              <div class="menu-text">Shipping Policy Page Image</div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- Order -->
                  <div class="menu-item has-sub ">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-first-order"></i>
                        </div>
                        <div class="menu-text">Orders <span class="menu-label"><?php echo $this->db->count_all('finalorder'); ?></span></div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/finalorder/listing?status=1');?>" class="menu-link">
                              <div class="menu-text">Online Payment
                               <span class="menu-label">
                                 <?php $this->db->where('status',1);
                                 $query = $this->db->get('finalorder');
                                 echo $query->num_rows(); ?></span>
                              </div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/finalorder/listing?status=0');?>" class="menu-link">
                              <div class="menu-text">COD Order
                               <span class="menu-label">
                                 <?php $this->db->where('status',0);
                                 $query = $this->db->get('finalorder');
                                 echo $query->num_rows(); ?></span>
                              </div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/finalorder/listing?status=2');?>" class="menu-link">
                              <div class="menu-text">Warehouse <span
                               class="menu-label"><?php
                                 $this->db->where('status',2);
                                 $query = $this->db->get('finalorder');
                                 echo $query->num_rows(); ?></span>
                              </div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/finalorder/listing?status=3');?>" class="menu-link">
                              <div class="menu-text">Shipped Order
                               <span class="menu-label">
                                 <?php $this->db->where('status',3);
                                 $query = $this->db->get('finalorder');
                                 echo $query->num_rows(); ?></span>
                              </div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/finalorder/listing?status=4');?>" class="menu-link">
                              <div class="menu-text">Deliverd <span
                               class="menu-label"><?php
                                 $this->db->where('status',4);
                                 $query = $this->db->get('finalorder');
                                 echo $query->num_rows(); ?></span>
                              </div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/finalorder/listing?status=5');?>" class="menu-link">
                              <div class="menu-text">Cancel <span
                               class="menu-label"><?php $this
                                 ->db->where('status',5);
                                 $query = $this->db->get('finalorder');
                                 echo $query->num_rows(); ?></span>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>

                  <!-- Catrgories -->
                  

                  <!-- Catrgories -->
                  <div class="menu-item has-sub <?php if($current==base_url('admin_con/categories/listing')) echo 'active'; ?>">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-list-alt"></i>
                        </div>
                        <div class="menu-text">Catrgories <span class="menu-label"><?php echo $this->db->count_all('categories'); ?></span></div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/categories/add');?>" class="menu-link">
                              <div class="menu-text">Add Catrgories</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/categories/listing');?>" class="menu-link">
                              <div class="menu-text">All Catrgories</div>
                           </a>
                        </div>
                     </div>
                  </div>

                  <!-- Sub Catrgories -->
                  <div class="menu-item has-sub <?php if($current==base_url('admin_con/sub_categories/listing')) echo 'active'; ?>">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-list-ol"></i>
                        </div>
                        <div class="menu-text">Sub Catrgories <span class="menu-label"><?php echo $this->db->count_all('sub_categories'); ?></span></div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/sub_categories/add');?>" class="menu-link">
                              <div class="menu-text">Add Sub Catrgories</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/sub_categories/listing');?>" class="menu-link">
                              <div class="menu-text">All Sub Catrgories</div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- product -->
                  <div class="menu-item has-sub <?php if($current==base_url('admin_con/product/listing')) echo 'active'; ?>">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-product-hunt"></i>
                        </div>
                        <div class="menu-text">Products <span class="menu-label"><?php echo $this->db->count_all('product'); ?></span></div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/product/add');?>" class="menu-link">
                              <div class="menu-text">Add Products</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/product/listing');?>" class="menu-link">
                              <div class="menu-text">All Products</div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- color -->
                  <div class="menu-item has-sub <?php if($current==base_url('admin_con/color/listing')) echo 'active'; ?>">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-codiepie"></i>
                        </div>
                        <div class="menu-text">Color <span class="menu-label"><?php echo $this->db->count_all('color'); ?></span></div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/color/add');?>" class="menu-link">
                              <div class="menu-text">Add Color</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/color/listing');?>" class="menu-link">
                              <div class="menu-text">All Color</div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- Size -->
                  <div class="menu-item has-sub <?php if($current==base_url('admin_con/size/listing')) echo 'active'; ?>">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-signal "></i>
                        </div>
                        <div class="menu-text">Size <span class="menu-label"><?php echo $this->db->count_all('size'); ?></span></div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/size/add');?>" class="menu-link">
                              <div class="menu-text">Add Size</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/size/listing');?>" class="menu-link">
                              <div class="menu-text">All Size</div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- coupen_code -->
                  <div class="menu-item has-sub <?php if($current==base_url('admin_con/coupen_code/listing')) echo 'active'; ?>">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-cc-discover "></i>
                        </div>
                        <div class="menu-text">Coupon <span class="menu-label"><?php echo $this->db->count_all('coupen_code'); ?></span></div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/coupen_code/add');?>" class="menu-link">
                              <div class="menu-text">Add Coupon</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/coupen_code/listing');?>" class="menu-link">
                              <div class="menu-text">All Coupon</div>
                           </a>
                        </div>
                     </div>
                  </div>

                  <div class="menu-item has-sub <?php if($current==base_url('admin_con/marquee/listing')) echo 'active'; ?>">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-cc-discover "></i>
                        </div>
                        <div class="menu-text">Heading <span class="menu-label"><?php echo $this->db->count_all('marquee'); ?></span></div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/marquee/add');?>" class="menu-link">
                              <div class="menu-text">Add Heading</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/marquee/listing');?>" class="menu-link">
                              <div class="menu-text">All Heading</div>
                           </a>
                        </div>
                     </div>
                  </div>

                  <!-- ----single product coupones -->
                  <!--  -->

                  <!-- slider -->
                  <div class="menu-item has-sub <?php if($current==base_url('admin_con/slider/listing')) echo 'active'; ?>">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-sliders"></i>
                        </div>
                        <div class="menu-text">Slider <span class="menu-label"><?php echo $this->db->count_all('slider'); ?></span></div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/slider/add');?>" class="menu-link">
                              <div class="menu-text">Add Slider</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/slider/listing');?>" class="menu-link">
                              <div class="menu-text">All Slider</div>
                           </a>
                        </div>
                     </div>
                  </div>

                  <!-- All Offer banner -->

                  <div class="menu-item has-sub <?php if($current==base_url('admin_con/offer_banners/listing')) echo 'active'; ?>">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-align-left"></i>
                        </div>
                        <div class="menu-text">All Offer banner <span class="menu-label">2</span> </div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item has-sub">
                           <a href="javascript:;" class="menu-link">
                              <div class="menu-text">Offer Banners <span class="menu-label">
                                 <?php echo $this->db->count_all('offer_banners'); ?></span>
                              </div>
                              <div class="menu-caret"></div>
                           </a>
                           <div class="menu-submenu">
                              <div class="menu-item">
                                 <a href="<?php echo base_url('admin_con/offer_banners/add');?>" class="menu-link">
                                    <div class="menu-text">Add Offer Banners</div>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a href="<?php echo base_url('admin_con/offer_banners/listing');?>" class="menu-link">
                                    <div class="menu-text">All Offer Banners</div>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <!-- singlebanner -->
                        <div class="menu-item has-sub">
                           <a href="javascript:;" class="menu-link">
                              <div class="menu-text">Single Banner <span class="menu-label">
                                 <?php echo $this->db->count_all('singlebanner'); ?></span>
                              </div>
                              <div class="menu-caret"></div>
                           </a>
                           <div class="menu-submenu">
                              <div class="menu-item">
                                 <a href="<?php echo base_url('admin_con/singlebanner/add');?>" class="menu-link">
                                    <div class="menu-text">Add Single Banner</div>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a href="<?php echo base_url('admin_con/singlebanner/listing');?>" class="menu-link">
                                    <div class="menu-text">All Single Banner</div>
                                 </a>
                              </div>
                           </div>
                        </div>                        
                     </div>
                  </div>

                  <!-- blog -->

                  <div class="menu-item has-sub <?php if($current==base_url('admin_con/faq_cat/listing')) echo 'active'; ?>">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-align-left"></i>
                        </div>
                        <div class="menu-text">All FAQ's <span class="menu-label">2</span> </div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item has-sub">
                           <a href="javascript:;" class="menu-link">
                              <div class="menu-text">Category's <span class="menu-label">
                                 <?php echo $this->db->count_all('faq_cat'); ?></span>
                              </div>
                              <div class="menu-caret"></div>
                           </a>
                           <div class="menu-submenu">
                              <div class="menu-item">
                                 <a href="<?php echo base_url('admin_con/faq_cat/add');?>" class="menu-link">
                                    <div class="menu-text">Add Category</div>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a href="<?php echo base_url('admin_con/faq_cat/listing');?>" class="menu-link">
                                    <div class="menu-text">All Category</div>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <!-- singlebanner -->
                        <div class="menu-item has-sub">
                           <a href="javascript:;" class="menu-link">
                              <div class="menu-text">FAQ's <span class="menu-label">
                                 <?php echo $this->db->count_all('faqs'); ?></span>
                              </div>
                              <div class="menu-caret"></div>
                           </a>
                           <div class="menu-submenu">
                              <div class="menu-item">
                                 <a href="<?php echo base_url('admin_con/faqs/add');?>" class="menu-link">
                                    <div class="menu-text">Add FAQ's</div>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a href="<?php echo base_url('admin_con/faqs/listing');?>" class="menu-link">
                                    <div class="menu-text">All FAQ's</div>
                                 </a>
                              </div>
                           </div>
                        </div>                        
                     </div>
                  </div>
               


                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/registration/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-user-plus "></i>
                        </div>
                        <div class="menu-text">Registration <span class="menu-label"><?php echo $this->db->count_all('registration'); ?></span></div>
                     </a>
                  </div>

                  <div class="menu-item <?php if($current==base_url('admin_con/contact/listing')) echo 'active'; ?>">
                     <a href="<?php echo base_url('admin_con/contact/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-envelope-open "></i>
                        </div>
                        <div class="menu-text">Contact <span class="menu-label"><?php echo $this->db->count_all('contact'); ?></span></div>
                     </a>
                  </div>

                  <div class="menu-item <?php if($current==base_url('admin_con/sold_itam/listing')) echo 'active'; ?>">
                     <a href="<?php echo base_url('admin_con/sold_itam/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-envelope-open "></i>
                        </div>
                        <div class="menu-text">Sold Items <span class="menu-label"><?php echo $this->db->count_all('orders'); ?></span></div>
                     </a>
                  </div>


                
                    <div class="menu-item has-sub <?php if($current==base_url('admin_con/pincode/listing')) echo 'active'; ?>">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-cc-discover "></i>
                        </div>
                        <div class="menu-text">Pincode <span class="menu-label"><?php echo $this->db->count_all('pincode'); ?></span></div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/pincode/add');?>" class="menu-link">
                              <div class="menu-text">Add Pincode</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/pincode/listing');?>" class="menu-link">
                              <div class="menu-text">All Pincode</div>
                           </a>
                        </div>
                     </div>
                  </div>


                









                  <!-- --------with number show------- -->
                  <!-- <div class="menu-item">
                     <a href="widget.html" class="menu-link">
                        <div class="menu-icon">
                           <i class="fab fa-simplybuilt"></i>
                        </div>
                        <div class="menu-text">Widgets <span class="menu-label">NEW</span></div>
                     </a>
                  </div> -->

                  <!-- ------sub sub menu lavel---- -->
                  <!-- <div class="menu-item has-sub">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-align-left"></i>
                        </div>
                        <div class="menu-text">Menu Level</div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item has-sub">
                           <a href="javascript:;" class="menu-link">
                              <div class="menu-text">Menu 1.1</div>
                              <div class="menu-caret"></div>
                           </a>
                           <div class="menu-submenu">
                              <div class="menu-item has-sub">
                                 <a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 2.1</div>
                                    <div class="menu-caret"></div>
                                 </a>
                                 <div class="menu-submenu">
                                    <div class="menu-item">
                                       <a href="javascript:;" class="menu-link">
                                          <div class="menu-text">Menu 3.1</div>
                                       </a>
                                    </div>
                                    <div class="menu-item">
                                       <a href="javascript:;" class="menu-link">
                                          <div class="menu-text">Menu 3.2</div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="menu-item">
                                 <a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 2.2</div>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 2.3</div>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="menu-item">
                           <a href="javascript:;" class="menu-link">
                              <div class="menu-text">Menu 1.2</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="javascript:;" class="menu-link">
                              <div class="menu-text">Menu 1.3</div>
                           </a>
                        </div>
                     </div>
                  </div> -->




                  <div class="menu-item d-flex">
                     <a href="javascript:;" class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
                  </div>
               </div>
            </div>
         </div>


         <div class="app-sidebar-bg"></div>
         <!-- -------Azmal Ansari----------- -->
         <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>