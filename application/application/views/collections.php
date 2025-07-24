<div class="grid grid-cols-2 gap-0 w-full" style="min-height:500px;">
   <?php
   // Example: Fetch 4 collections from DB (adjust table/fields as needed)
   $collections = $this->crud->selectDataByMultipleWhere('collections', array('status' => 1));
   $i = 0;
   foreach ($collections as $col) {
      // For 2x2 grid, break after 4 items
      if ($i >= 4) break;
      ?>
      <div class="relative flex items-end justify-start h-[320px] md:h-[500px] bg-gray-50 overflow-hidden">
         <?php if (!empty($col->imagepath)) { ?>
            <img src="<?= base_url('media/uploads/collections/' . $col->imagepath) ?>"
                 alt="<?= htmlspecialchars($col->title) ?>"
                 class="absolute inset-0 w-full h-full object-cover z-0" />
         <?php } ?>
         <div class="relative z-10 p-8 md:p-12 bg-white/80 backdrop-blur-sm w-full md:w-2/3">
            <div class="text-lg md:text-xl font-semibold mb-2"><?= htmlspecialchars($col->title) ?></div>
            <?php if (!empty($col->subtitle)) { ?>
               <div class="text-sm text-gray-700 mb-4"><?= htmlspecialchars($col->subtitle) ?></div>
            <?php } ?>
            <!-- <a href="<?= base_url('collection/' . $col->slug) ?>" class="inline-block bg-black text-white text-xs px-4 py-2 rounded hover:bg-gray-800 transition">Buy now</a> -->
         </div>
      </div>
   <?php $i++; } ?>
</div>