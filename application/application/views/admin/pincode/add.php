<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Add <?php echo $page_title; ?></title>
      <?php $this->load->view('admin/include/allcss') ?>

   </head>
   <body>
       <?php echo loder; ?> 
      <div id="app" class="app app-header-fixed app-sidebar-fixed ">


          <?php $this->load->view('admin/include/header') ?>
          <?php $this->load->view('admin/include/sidebar') ?>


         
         <div id="content" class="app-content">
            <div class="d-flex align-items-center justify-content-between mb-3">
               <div>
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
                     <li class="breadcrumb-item active"><i class="fa fa-arrow-back"></i> Add <?php echo $page_title; ?></li>
                  </ol>
                  <h1 class="page-header mb-0">Add <?php echo $page_title; ?></h1>
               </div>
               <div>
                  <button onclick="history.back();" class="btn btn-primary">Back</button>
               </div>
            </div>


            
            
               <form  class="row" method="post" enctype="multipart/form-data" action="#">
                  <div class="col-lg-12">
                     <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3">
                           <i class="fa fa-fa fa-lg fa-fw text-dark text-opacity-50 me-1"></i> 
                        </div>
                        <div class="card-body">
                           <div class="row">

                              <div class="col-lg-4 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name">
                                 </div>
                              </div>
                              
                              <div class="col-lg-4 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="text" class="form-control" name="pincode">
                                 </div>
                              </div>
                              

                              <div class="col-lg-4 mb-3">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status">
                                       <option value="">-- Select Status --</option>
                                       <option value="1" selected>Show</option>
                                       <option value="0">Hide</option>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-lg-12 mb-4 text-center">
                                 <div class="mb-lg-0 mb-3">
                                    <button class="btn btn-primary d-block" type="submit" name="submit">
                                       Add <?php echo $page_title; ?>
                                   </button>
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>

               </form>
           
         </div>
       
      </div>



   <?php $this->load->view('admin/include/footer') ?>

   </body>
</html>