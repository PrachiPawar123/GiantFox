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
                     <ul class="nav nav-tabs">
                        <li class="nav-item">
                           <a href="#default-tab-1" data-bs-toggle="tab" class="nav-link active">
                              <span class="d-sm-none">Contents</span>
                              <span class="d-sm-block d-none">Contents</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="#default-tab-2" data-bs-toggle="tab" class="nav-link">
                              <span class="d-sm-none">Images</span>
                              <span class="d-sm-block d-none">Images</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="#default-tab-3" data-bs-toggle="tab" class="nav-link">
                              <span class="d-sm-none">Status</span>
                              <span class="d-sm-block d-none">Status</span>
                           </a>
                        </li>
                     </ul>  


                     <div class="tab-content panel rounded-0 p-3 m-0">

                        <div class="tab-pane fade active show" id="default-tab-1">
                           <div class="card-body">
                              <div class="card-header h6 mb-0 bg-none p-3">
                                 <i class="fa fa-fa fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Contents
                              </div>
                              <div class="row">
                                

                                 <div class="col-lg-3 mb-3">
                                    <div class="mb-lg-0 mb-3">
                                       <label class="form-label">Select Categorie</label>
                                       <select class="form-select" name="cat_id" id="categorieid" required>
                                          <option disabled selected>-- Select Categorie --</option>
                                          <?php
                                          $this->db->order_by('id desc');
                                          $categories = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
                                          foreach($categories as $data)
                                             { ?>
                                          <option value="<?php echo $data->id; ?>" ><?php echo $data->name; ?></option>
                                          <?php } ?>
                                       </select>
                                    </div>
                                 </div>

                                 <div class="col-lg-3 mb-3">
                                    <div class="mb-lg-0 mb-3">
                                       <label class="form-label">Select Sub Categorie</label>
                                       <select class="form-select" name="sub_cat_id" id="location" required></select>
                                    </div>
                                 </div>
                               
                                 <div class="col-lg-3 mb-4">
                                    <div class="mb-lg-0 mb-3">
                                       <label class="form-label">Name</label>
                                       <input type="text" class="form-control" name="name" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 mb-4">
                                    <div class="mb-lg-0 mb-3">
                                       <label class="form-label">Rating</label>
                                       <input type="number" class="form-control" name="rating" required>
                                    </div>
                                 </div>
                                
                                 <div class="col-lg-3 mb-4">
                                    <div class="mb-lg-0 mb-3">
                                       <label class="form-label">SKU Code</label>
                                       <input type="text" class="form-control" name="sku" >
                                    </div>
                                 </div>
                                 <div class="col-lg-3 mb-4">
                                    <div class="mb-lg-0 mb-3">
                                       <label class="form-label">MRP PRICE</label>
                                       <input type="text" class="form-control" name="mrp_price" >
                                    </div>
                                 </div>
                                 <div class="col-lg-3 mb-4">
                                    <div class="mb-lg-0 mb-3">
                                       <label class="form-label">SALE PRICE</label>
                                       <input type="text" class="form-control" name="sale_price" >
                                    </div>
                                 </div>

                                 <div class="col-lg-3 mb-3">
                                       <div class="mb-lg-0 mb-3">
                                          <label class="form-label">Sale Show</label>
                                          <select class="form-select" name="show_sale">
                                             <option value="1" >Yes</option>
                                             <option value="0" selected>No</option>
                                          </select>
                                       </div>
                                    </div>
                               
                                 <div class="col-lg-12 mb-4">
                                    <div class="mb-lg-0 mb-3">
                                       <label class="form-label">Description</label>
                                       <textarea class="form-control" name="description" id="description"  placeholder="Enter text ..." rows="12"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-lg-12 mb-4">
                                    <div class="mb-lg-0 mb-3">
                                       <label class="form-label">Details</label>
                                       <textarea class="form-control" name="specification" id="specification"  placeholder="Enter text ..." rows="12"></textarea>
                                    </div>
                                 </div>
                                 
                              </div>
                           </div>                      
                        </div>


                        <div class="tab-pane fade" id="default-tab-2">
                           <div class="card border-0 mb-4">
                              <div class="card-header h6 mb-0 bg-none p-3">
                                 <i class="fa fa-fa fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Upload Image
                              </div>
                              <div class="card-body">
                                 <div class="row">
                                    <div class="col-lg-4 mb-4">
                                       <div class="mb-lg-0 mb-3 bg-light">
                                          <label class="form-label"style="width: 100%;text-align: center; position: relative;border: 1px solid aliceblue;">Upload Thumb Image 1
                                             <img id="blah" src="#" class="sd" style="display: none;width: 100%; height: 100%; position: relative; top: -22px;">
                                             <input style="display: none;" type="file" class="form-control" name="thumb_img"  id="imgInp">
                                         </label>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                       <div class="mb-lg-0 mb-3 bg-light">
                                          <label class="form-label"style="width: 100%;text-align: center; position: relative;border: 1px solid aliceblue;">Upload Thumb Image 2
                                             <img id="blah2" src="#" class="sd" style="display: none;width: 100%; height: 100%; position: relative; top: -22px;">
                                             <input style="display: none;" type="file" class="form-control" name="thumb_img2"  id="imgInp2">
                                         </label>
                                       </div>
                                    </div> 

                                    <div class="col-lg-4 mb-4">
                                       <div class="mb-lg-0 mb-3 bg-light">
                                          <label class="form-label"style="width: 100%;text-align: center; position: relative;border: 1px solid aliceblue;">Upload Size Chart
                                             <img id="blah3" src="#" class="sd" style="display: none;width: 100%; height: 100%; position: relative; top: -22px;">
                                             <input style="display: none;" type="file" class="form-control" name="size_chart"  id="imgInp3">
                                         </label>
                                       </div>
                                    </div>

                                    <div class="col-lg-12 mb-4" style="display:none;">
                                       <div class="mb-lg-0 mb-3 bg-light">
                                          <label class="form-label">Multiple Image</label>
                                          <input type="file" name="image[]" class="form-control" multiple>
                                       </div>
                                    </div>



                                     <div class="col-md-12">
                                         <h2 class="mb-3" style="font-size: 20px;">Upload Size & Stock</h2>
                                        
                                         <ul id="add-more-field" style="padding: 0;">
                                             <?php  
                                             $data = array();
                                             $count = 1;
                                             
                                             $i=0;
                                             while($i<$count)
                                             {
                                                 $data['i'] = $i;
                                                 if(!empty($row))
                                             {
                                                 $data['feature_icon_section'] = $feature_icon_section[$i];
                                             }
                                                 $this->load->view("admin/product/add-image",$data);
                                                 $i++;
                                             }
                                         ?>
                                         </ul>
                                         <div class="col-md-12 text-right">
                                             <input type="button" class="btn btn-sm btn-secondary" id="add-more-btn" value="Add card">
                                         </div>
                                     </div>


                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="tab-pane fade" id="default-tab-3">
                           <div class="card border-0 mb-4">
                              <div class="card-header h6 mb-0 bg-none p-3">
                                 <i class="fa fa-fa fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Status
                              </div>
                              <div class="card-body">
                                 <div class="row">
                                    <div class="col-lg-3 mb-3">
                                       <div class="mb-lg-0 mb-3">
                                          <label class="form-label">Featured ITEM</label>
                                          <select class="form-select" name="top_selling">
                                             <option value="1" selected>Yes</option>
                                             <option value="0">No</option>
                                          </select>
                                       </div>
                                    </div>

                                    <div class="col-lg-3 mb-3">
                                       <div class="mb-lg-0 mb-3">
                                          <label class="form-label">Show Home </label>
                                          <select class="form-select" name="show_home">
                                             <option value="1" selected>Yes</option>
                                             <option value="0">No</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                       <div class="mb-lg-0 mb-3">
                                          <label class="form-label">New Drops </label>
                                          <select class="form-select" name="new_drops">
                                             <option value="1" selected>Yes</option>
                                             <option value="0">No</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                       <div class="mb-lg-0 mb-3">
                                          <label class="form-label">Sold Out </label>
                                          <select class="form-select" name="sold_out">
                                             <option value="1" selected>Yes</option>
                                             <option value="0">No</option>
                                          </select>
                                       </div>
                                    </div>
                                                                        
                                    
                                    <div class="col-lg-3 mb-3">
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



                     </div>
                  </div>                  
               </form>
           
         </div>
       
      </div>



   <?php $this->load->view('admin/include/footer') ?>

   <script>
         CKEDITOR.replace('specification');
         CKEDITOR.replace('description');
    </script>


    

   <script>
    var i = 1;
    $(document).on("click", "#add-more-btn",(function(e) {
        var button = $(this);
        $(button).attr("disabled",true);
        $(button).val("Wait...");
        var html =  ``;
        $.ajax({
        url : "<?php echo base_url('admin_con/product/addmore_image'); ?>",
        method : "POST",
        data : {i:i},
            success: function(data)
            {
                console.log(data);
                $("#add-more-field").append(data);
                $(button).attr("disabled",false);
                $(button).val("Add");
                 $(".multiselect").select2();
                const choies = document.querySelectorAll('.choicesjs')
                Array.from(choies,(elem) => {
                    new Choices(elem, {
                        removeItemButton: true,
                    })
                });
                i++;
            }
        });
    }));
    $(document).on("click", ".remove-btn",(function(e) {
        $(this).parent().parent().remove();
    }));



/**/

 $(function () {
      $(".multiselect").select2();
  });

var size_key = 0;
$(document).on("change", ".selected-value",(function(e) {
   size_key = $(this).data("size_key");
  get_selected_size();
}));

function get_selected_size()
{
   var select_size =  $('.selected-value'+size_key).children('option:selected');
   stock_html = "";
   $(select_size).each(function(index,item){
      var name_size = $(item).data('name');
      console.log(select_size);
      stock_html = stock_html+`
      <div class="cutom-stock">
         <label class="form-label">`+name_size+`</label>
         <input type="number" class="form-control" name="stock`+size_key+`[]" value="1">
      </div>
      `;
   });
   $("#cutom-stock"+size_key).html(stock_html);
}


//  $('.selected-value').on('change', function() {
//   alert( this.value );
//   con
// });











</script>

   <script>
           function get_sub_category()
           {
              var id = $("#categorieid").val();
              $.ajax({
                    dataType:"json",
                    url:"<?php echo base_url('admin_con/product/sub_categ'); ?>",
                    method: "post",
                    data:{id:id},
                    success: function(data)
                    {
                        // console.log(data);
                        var result = data;
                        if(result.status==200)
                        {
                            $("#location").html(result.data);
                        }
                        else{
                            $("#location").html("");
                        }
                    }
                });  
            } 


        $(document).on("change", "#categorieid",(function(e) {
                 get_sub_category();
        }));
    </script>








   </body>
</html>