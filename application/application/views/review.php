<style>
.review-section {
   background: #fafbfc;
   padding: 3vw 0 5vw 0;
}
.review-title {
   text-align: center;
   font-size: 2rem;
   font-weight: 600;
   margin-bottom: 8px;
   font-family: 'Montserrat', Arial, sans-serif;
}
.review-subtitle {
   text-align: center;
   color: #6c757d;
   margin-bottom: 32px;
   font-size: 1rem;
}
.review-carousel .item {
   background: #fff;
   border-radius: 8px;
   box-shadow: 0 2px 16px rgba(0,0,0,0.06);
   display: flex;
   flex-direction: row;
   align-items: stretch;
   min-height: 180px; /* Smaller height */
   overflow: hidden;
}
.review-left {
   flex: 2;
   padding: 2vw 2vw;
   display: flex;
   flex-direction: column;
   justify-content: center;
   position: relative;
}
.review-left .quote-bg-img {
   position: absolute;
   left: -2vw;
   top: -2vw;
   width: 8vw;
   min-width: 50px;
   max-width: 80px;
   opacity: 0.18;
   pointer-events: none;
   z-index: 0;
}
.review-from-people {
   color: #888;
   font-size: 1rem;
   margin-bottom: 8px;
   position: relative;
   z-index: 1;
}
.review-quote {
   font-size: 3vw;
   min-font-size: 2rem;
   color: #ececec;
   font-weight: bold;
   line-height: 1;
   margin-bottom: 8px;
   position: relative;
   z-index: 1;
}
.review-stars {
   color: #ffb400;
   margin-bottom: 8px;
   position: relative;
   z-index: 1;
}
.review-text {
   font-size: 1.1rem;
   color: #222;
   margin-bottom: 12px;
   position: relative;
   z-index: 1;
}
.review-author {
   font-size: 0.95rem;
   color: #888;
   position: relative;
   z-index: 1;
}
.review-right {
   flex: 1;
   background: #e9ebee;
   display: flex;
   align-items: center;
   justify-content: center;
   min-width: 120px;
   padding: 1vw 0;
}
.review-right img {
   width: 60%;
   max-width: 120px;
   opacity: 0.7;
}
@media (max-width: 900px) {
   .review-carousel .item {
      flex-direction: column;
      min-height: 0;
   }
   .review-left {
      padding: 4vw 2vw;
   }
   .review-right {
      padding: 3vw 0;
      min-width: 0;
   }
   .review-right img {
      width: 80px;
      max-width: 100%;
   }
}
</style>

<div class="review-section">
   <div class="review-title">Product Reviews</div>
   <div class="review-subtitle">We are loved across the globe, see for yourself.</div>
   <div class="review-carousel owl-carousel owl-theme">
      <?php
      $reviews = [
         [
            'stars' => 5,
            'text' => 'Really loved the material and comfortable attire for head gear.',
            'author' => 'John Mike',
            'date' => 'Aug 13, 2024'
         ],
         [
            'stars' => 4,
            'text' => 'Great fit and vibrant colors. Will buy again!',
            'author' => 'Priya Singh',
            'date' => 'Jul 28, 2024'
         ],
         [
            'stars' => 5,
            'text' => 'Super fast delivery and awesome quality.',
            'author' => 'Alex Chen',
            'date' => 'Jun 30, 2024'
         ]
      ];
      foreach($reviews as $review) { ?>
      <div class="item" >
         <div class="review-left">
            <div class="review-from-people">From the people</div>
            <div class="review-quote">&ldquo;</div>
            <div class="review-stars">
               <?php for($i=1;$i<=5;$i++) {
                  if($i<=$review['stars']) echo '<i class="fa fa-star"></i>';
                  else echo '<i class="fa fa-star-o"></i>';
               } ?>
            </div>
            <div class="review-text"><?=htmlspecialchars($review['text'])?></div>
            <div class="review-author">&mdash; <?=htmlspecialchars($review['author'])?> / <?=$review['date']?></div>
         </div>
         <div class="review-right">
            <img src="<?=base_url() ?>images/hanger-icon.png" alt="Review Icon"/>
         </div>
      </div>
      <?php } ?>
   </div>
</div>

