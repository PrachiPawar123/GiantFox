<li class="row imagecard" style="margin-top: 25px;">

    <div class="col-lg mb-3">
       <div class="mb-lg-0 mb-3">
          <label class="form-label">Select Color</label>
          <select class="form-select" name="color_id[]">
            <?php 
            $color = $this->crud->selectDataByMultipleWhere('color',array('status'=>1,));
            foreach($color as $data)
                {
                    $selected = '';
                    if(!empty($all_images->color_id))
                    {                        
                        if($all_images->color_id==$data->id)
                            $selected = 'selected';
                    }
                 ?>
            <option value="<?php echo $data->id; ?>" <?=$selected ?>><?php echo $data->name; ?></option>
            <?php } ?>
        </select>
       </div>
    </div>

    <div class="col-lg mb-3">
       <div class="mb-lg-0 mb-3">
          <label class="form-label">Select Size</label>
          <select class="form-select multiselect selected-value selected-value<?=$i ?>" data-size_key="<?=$i ?>" name="size_id<?=$i ?>[]" multiple>
             <?php 
            $size = $this->crud->selectDataByMultipleWhere('size',array('status'=>1,));
            foreach($size as $data)
                {
                    $selected = '';
                    if(!empty($all_images->size_id))
                    {      
                        $size_arr = ($all_images->size_id);
                        if(!empty($size_arr))
                        {
                            if(in_array($data->id,$size_arr)) $selected = 'selected';
                        }
                    }
                 ?>
            <option value="<?php echo $data->id; ?>" <?=$selected ?> data-name="<?=$data->name ?>" data-size_key="<?=$i ?>"><?php echo $data->name; ?></option>
        <?php } ?>
        </select>
       </div>
    </div>

    <div class="col-lg mb-4">
        <!-- <div class="mb-lg-0 mb-3">
           <label class="form-label">Stock</label>
           <input type="number" class="form-control" name="stock[]" value="<?php if(!empty($all_images->stock)) echo $all_images->stock; ?>">
        </div>
 -->
        <div class="cutom-stock" id="cutom-stock<?=$i ?>">
            <?php  
                // print_r($all_images->stock);
            if(!empty($all_images->stock))
            {
                foreach($all_images->stock as $stockkey1 => $data)
                {
            ?>
                    <div class="cutom-stock">
                         <label class="form-label"><?=sizename($all_images->size_id[$stockkey1]) ?></label>
                         <input type="number" class="form-control" name="stock<?=$i ?>[]" value="<?=$data ?>">
                      </div>
            <?php
                }}
            ?>
        </div>

     </div>

    <div class="col-lg mb-4">
        <div class="mb-lg-0 mb-3">
           <label class="form-label">Image</label>
           <input type="file" class="form-control" name="image<?=$i ?>[]" multiple>
        </div>
    </div>    
    <div class="col-lg mb-4" style="padding-top: 10px;">
        <button type="button" class="btn btn-sm mb-2 btn-danger remove-btn mt-3">Remove</button>
    </div>

    <div class="row" style="margin: 0;">
        <?php 
            if(!empty($all_images->images))
            {
                foreach ($all_images->images as $keyimg => $valueimg)
                {
                ?>
                <div class="col-lg-2 c-img" style="margin-right: 5px;">
                    <span class="remove-multi">X</span>
                    <img src="<?=base_url('media/uploads/product/'.$valueimg) ?>" style="width: 100%;height: 100%;">
                    <input type="hidden" name="oldimage<?=$i ?>[]" value="<?=$valueimg ?>">
                </div>
        <?php } } ?>
    </div>



</li>