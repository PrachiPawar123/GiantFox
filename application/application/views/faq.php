<?php 
$about = $this->crud->fetchdatabyid('8','site_setting');
$checkoutimg = $this->crud->fetchdatabyid('17','site_setting');

include('header.php'); ?>


<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/contact.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/contact_responsive.css">

<style>
   .home_background {
       position: absolute;
       top: 98px;
   }
</style>
         <div class="home" style="height:400px">
            <div class="home_background parallax-window" data-parallax="scroll"  data-speed="0.8" style="background-image: url(<?=base_url() ?>media/uploads/site_setting/<?=$checkoutimg[0]->logo ?>);background-size: cover;background-repeat: no-repeat;background-position-y: top;"></div>

            <div class="home_background parallax-window desktop-none" data-parallax="scroll"  data-speed="0.8" style="background-image: url(<?=base_url() ?>media/g.png);background-size: cover;background-repeat: no-repeat;background-position-y: top;"></div>
            <div class="container">
               <div class="row">
                  <div class="col">
                     <div class="home_container">
                        <div class="home_content">
                           <div class="home_title">FAQ's</div>
                           <div class="breadcrumbs">
                              <ul>
                                 <li><a href="<?=base_url() ?>">Home</a></li>
                                 <li>FAQ's</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<style>
   .faq {
 max-width: 50rem;
/*  max-width: 100%;*/
  padding: 1rem 0;
  margin-left: auto;
  margin-right: auto;
}

.faq-title {
  margin-top: 0;
  margin-bottom: 1em;
  font-size: 1.5rem;
}
@media (min-width: 768px) {
  .faq-title {
    font-size: 1.50rem;
  }
}

.faq-tab {
  all: unset;
  font-weight: 600;
  margin-left: -0.75em;
  margin-right: -0.75em;
  margin-bottom: 0.25rem;
  padding: 0.5em 0.75em;
  display: flex;
  align-items: start;
  width: 100%;
  font-size: 1rem;
  /* If the tab contains the aria-expanded attribute, it means the component has been initialized */
}
@media (min-width: 768px) {
  .faq-tab {
    font-size: 1rem;
  }
}
.faq-tab:where([aria-expanded]) {
  margin-bottom: 1rem;
  cursor: pointer;
  user-select: none;
  outline: none;
  border-radius: 0.25rem;
  border: 1.5px solid color-mix(in srgb, currentColor 20%, transparent);
}
@media (prefers-reduced-motion: no-preference) {
  .faq-tab:where([aria-expanded]) {
    transition: 150ms color;
  }
}
.faq-tab:where([aria-expanded]):hover {
  color: #f76600;
}
@media (prefers-color-scheme: dark) {
  .faq-tab:where([aria-expanded]):hover {
    color: #ffb600;
  }
}
.faq-tab:where([aria-expanded]):focus-visible {
  outline: 2px solid;
}
.faq-tab:where([aria-expanded])::after {
  content: "+";
  margin-left: auto;
}
.faq-tab:where([aria-expanded]).ui-active::after {
  content: "-";
}
.faq-tab:where(:not([aria-expanded]))::before {
  content: "-";
  padding-right: 0.5em;
}

.faq-tabpanel {
  /* Сollapse animation for opening and closing */
  /* Use transition only if the user has not enabled the setting on their device for reduced motion */
}
@media (prefers-reduced-motion: no-preference) {
  .faq-tabpanel:is(.ui-enter-active, .ui-leave-active) {
    transition: 0.15s ease-in-out;
    overflow: hidden;
  }
  .faq-tabpanel:is(.ui-enter-to, .ui-leave-from) {
    height: var(--ui-transition-height);
  }
  .faq-tabpanel:is(.ui-enter-from, .ui-leave-to) {
    opacity: 0;
    height: 0;
  }
}
.faq-tabpanel::after {
  content: "";
  height: 1.5rem;
  display: block;
}
.faq-tabpanel * {
  margin-top: 0.75em;
  margin-bottom: 0.75em;
}
.faq-tabpanel *:where(:first-child) {
  margin-top: 0;
}
.faq-tabpanel *:where(:last-child) {
  margin-bottom: 0;
}

:is(.faq--mobile, .faq--headings) .faq-tabpanel:where(:not(.ui-shown)) {
  display: none;
}
@media (scripting: none) {
  :is(.faq--mobile, .faq--headings) .faq-tabpanel:where(:not(.ui-shown)) {
    display: initial;
  }
}

@media (min-width: 640px) {
  .faq--mobile .faq-tabpanel {
    display: block;
  }
}
.tutorial {
  text-align: center;
  margin: 1.5rem auto;
  border: 1px solid;
  padding: 0.5rem 1.5rem;
  width: fit-content;
}
.tutorial a {
  color: currentColor;
  text-decoration: underline;
  text-decoration-thickness: 1px;
  text-underline-offset: 2px;
  text-decoration-color: color-mix(in srgb, currentColor 50%, transparent);
}
.tutorial a:hover {
  text-decoration-color: currentColor;
}

@media only screen and (max-width: 991px)
{
   .faq {
    margin-top: 0;
}
}
</style>
         
         <div class="contact">
            <div class="container">
               <?php
               $i=0;
               $categories = $this->crud->selectDataByMultipleWhere('faq_cat',array('status'=>1,));
               foreach($categories as $data)
                  { $i++;
                     $faq = $this->crud->selectDataByMultipleWhere('faqs',array('status'=>1,'cat_id'=>$data->id,));
                   ?>
               <section class="faq faq--default">
                 <h2 class="faq-title btn btn-dark btn-sm" style="    font-size: 16px;"><?=$data->name ?></h2>
                 <div class="faq-list" data-ui-tablist>
                  <?php
                  if(!empty($faq))
                  {
                     foreach($faq as $value)
                        { ?>
                   <div data-ui-tablist-item>
                     <button class="faq-tab" data-ui-tablist-tab><?=$value->question ?></button>
                     <div class="faq-tabpanel" data-ui-tablist-tabpanel hidden>
                       <p><?=$value->answere ?></p>
                     </div>
                   </div>

                  <?php } } ?>

                 </div>
               </section>
            <?php } ?>


            </div>
         </div>
        

 

<?php include('footer.php'); ?>

 <script id="rendered-js" type="module">
// Documentation
// https://jolty.dev/docs/tablist

import { Tablist } from "https://cdn.jsdelivr.net/npm/jolty/dist/jolty.esm.min.js";

Tablist.data("faq", {
  tab: ".faq-tab",
  tabpanel: ".faq-tabpanel",
  hideMode: "class-shown" });


Tablist.data("faq-mobile", {
  data: "faq",
  breakpoints: {
    640: {
      destroy: true } } });




Tablist.initAll();
//# sourceURL=pen.js
    </script>