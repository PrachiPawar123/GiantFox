<!DOCTYPE html>
<html lang="en">
   <head>
      <title><?php echo $page_title; ?> List</title>
         <?php $this->load->view('admin/include/allcss') ?>

   </head>
   <body>
      <div id="snackbar"><?php echo $this->session->flashdata('message'); ?></div>
     <?php if($this->session->flashdata('message')){ ?>
       <script>
         function myFunction() {
           var x = document.getElementById("snackbar");
           x.className = "show";
           setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
         }
         myFunction();
         </script>
  
   <?php } ?>
      <?php echo loder; ?>

      <div id="app" class="app app-header-fixed app-sidebar-fixed ">

          <?php $this->load->view('admin/include/header') ?>
          <?php $this->load->view('admin/include/sidebar') ?>


         
         <div id="content" class="app-content">
           
            <h1 class="page-header"><?php echo $page_title; ?> List</h1>

            <div class="row">
               
               <div class="col-xl-12">
                  <div class="panel panel-inverse">
                     <div class="panel-heading">
                        <h4 class="panel-title">All <?php echo $page_title; ?></h4>
                        <div class="panel-heading-btn">
                           <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                           <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                           <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                           <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                     </div>

                     <div class="panel-body">
                        <table id="data-table-buttons" class="table table-striped table-bordered align-middle">
                           <thead>
                              <tr>
                                 <th width="1%">#</th>
                                 <th class="text-nowrap">Name</th>
                                 <th class="text-nowrap">Color</th>
                                 <th class="text-nowrap">Size</th>
                                 <th class="text-nowrap">Sold Quantity</th>
                                 <th class="text-nowrap">Stock Left</th>
                                 <!-- <th class="text-nowrap">Action</th> -->
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $i=0;
                              foreach ($ALLDATA as $key => $data) 
                                 {  $i++; 
                                    $color_id = $this->crud->selectDataByMultipleWhere('color',array('id'=>$data->color_id,));
                                    $size_id = $this->crud->selectDataByMultipleWhere('color',array('id'=>$data->size_id,));
                                    $allimage = $this->crud->selectDataByMultipleWhere('all_images',array('size_id'=>$data->size_id,'color_id'=>$data->color_id,'p_id'=>$data->p_id,))
                                 ?>
                              <tr class="odd gradeX">
                                 <td width="1%" class="fw-bold text-dark"><?php echo $i; ?></td>
                                 
                                 <td class=""><?php echo $data->name; ?></td>
                                 <td class=""><?php if(!empty($color_id)) echo $color_id[0]->name; ?></td>
                                 <td class=""><?php if(!empty($size_id)) echo $size_id[0]->name; ?></td>
                                 <td class=""><?php echo $data->quantity; ?></td>
                                 <td class=""><?php if(!empty($allimage)) echo $allimage[0]->stock; else echo 'not found.'; ?></td>
                                 <!-- <td> -->
                                    <!-- <a href="<?php echo $view_url.$data->id; ?>" class="btn btn-primary btn-sm">View</a> -->
                                    <!-- <a href="<?php echo $delete_url.$data->id; ?>" class="btn btn-danger btn-sm delete">Delete</a> -->
                                 <!-- </td> -->
                              </tr>
                           <?php } ?>
                              
                            
                           </tbody>
                        </table>
                     </div>
                    
                  </div>
               </div>
            </div>
         </div>
       
      </div>



      <?php $this->load->view('admin/include/footer') ?>

 
   </body>
</html>