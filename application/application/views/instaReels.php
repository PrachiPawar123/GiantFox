   <style>
      body {
         font-family: 'Montserrat', Arial, sans-serif;
         background: #fafbfc;
         margin: 0;
         padding: 0;
      }
      .insta-section {
         max-width: 1100px;
         margin: 0 auto;
         padding: 40px 16px 60px 16px;
      }
      .insta-title {
         text-align: center;
         font-size: 2rem;
         font-weight: 600;
         margin-bottom: 8px;
      }
      .insta-subtitle {
         text-align: center;
         color: #6c757d;
         margin-bottom: 32px;
         font-size: 1rem;
      }
      .insta-masonry {
         display: block;
         margin-left: -12px;
      }
      .masonry-item {
         background: #fff;
         border-radius: 12px;
         box-shadow: 0 2px 16px rgba(0,0,0,0.06);
         overflow: hidden;
         position: relative;
         display: flex;
         flex-direction: column;
         justify-content: flex-end;
         width: 300px;
         margin: 0 12px 24px 12px;
         transition: box-shadow 0.2s, transform 0.2s;
      }
      .masonry-item:hover {
         box-shadow: 0 8px 32px rgba(0,0,0,0.12);
         transform: translateY(-4px) scale(1.03);
         z-index: 2;
      }
      .masonry-item img {
         width: 100%;
         height: 220px;
         object-fit: cover;
         display: block;
      }
      .masonry-item .insta-play {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         background: rgba(255,255,255,0.85);
         border-radius: 50%;
         width: 48px;
         height: 48px;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 2rem;
         color: #222;
         box-shadow: 0 2px 8px rgba(0,0,0,0.08);
         transition: background 0.2s;
      }
      .masonry-item:hover .insta-play {
         background: #ff8a00;
         color: #fff;
      }
      .masonry-item .insta-info {
         display: flex;
         align-items: center;
         gap: 8px;
         padding: 12px 16px;
         background: linear-gradient(0deg, #fff 80%, #fff0 100%);
         position: relative;
         z-index: 2;
      }
      .masonry-item .insta-avatar {
         width: 32px;
         height: 32px;
         border-radius: 50%;
         object-fit: cover;
         border: 2px solid #eee;
      }
      .masonry-item .insta-user {
         font-size: 0.98rem;
         color: #222;
         font-weight: 500;
      }
      .masonry-item .insta-date {
         font-size: 0.92rem;
         color: #888;
         margin-left: auto;
      }
      .masonry-item .insta-ig {
         font-size: 1.1rem;
         color: #888;
         margin-left: 4px;
      }
      @media (max-width: 900px) {
         .insta-section {
            padding: 24px 4vw 32px 4vw;
         }
         .masonry-item {
            width: 45vw;
            min-width: 160px;
            max-width: 100vw;
         }
         .masonry-item img {
            height: 140px;
         }
      }
      @media (max-width: 600px) {
         .masonry-item {
            width: 90vw;
            min-width: 120px;
         }
         .masonry-item img {
            height: 100px;
         }
      }
   </style>
<div class="insta-section">
   <div class="insta-title">Latest on Instagram</div>
   <div class="insta-subtitle">
      Don't forget to showcase your new purchase on Instagram by<br>
      tagging us for a chance to receive Cash Voucher on your next order!
   </div>
   <div class="insta-masonry" id="insta-masonry">
      <?php
      // Example data, replace with your Instagram API or DB data
      $reels = [
         [
            'img' => 'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80',
            'avatar' => 'https://randomuser.me/api/portraits/women/44.jpg',
            'user' => '@insta_account',
            'date' => '2 months ago',
         ],
         [
            'img' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80',
            'avatar' => 'https://randomuser.me/api/portraits/women/45.jpg',
            'user' => '@insta_account',
            'date' => '2 months ago',
         ],
         [
            'img' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80',
            'avatar' => 'https://randomuser.me/api/portraits/men/46.jpg',
            'user' => '@insta_account',
            'date' => '2 months ago',
         ],
         [
            'img' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80',
            'avatar' => 'https://randomuser.me/api/portraits/men/47.jpg',
            'user' => '@insta_account',
            'date' => '2 months ago',
         ],
         [
            'img' => 'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?auto=format&fit=crop&w=400&q=80',
            'avatar' => 'https://randomuser.me/api/portraits/women/48.jpg',
            'user' => '@insta_account',
            'date' => '2 months ago',
         ],
         [
            'img' => 'https://images.unsplash.com/photo-1465101178521-c1a4c8a0a8b7?auto=format&fit=crop&w=400&q=80',
            'avatar' => 'https://randomuser.me/api/portraits/men/49.jpg',
            'user' => '@insta_account',
            'date' => '2 months ago',
         ],
         [
            'img' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80',
            'avatar' => 'https://randomuser.me/api/portraits/women/50.jpg',
            'user' => '@insta_account',
            'date' => '2 months ago',
         ],
         [
            'img' => 'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?auto=format&fit=crop&w=400&q=80',
            'avatar' => 'https://randomuser.me/api/portraits/men/51.jpg',
            'user' => '@insta_account',
            'date' => '2 months ago',
         ],
      ];
      foreach($reels as $reel) { ?>
      <div class="masonry-item">
         <img src="<?=$reel['img']?>" alt="Instagram Reel">
         <div class="insta-play">&#9658;</div>
         <div class="insta-info">
            <img class="insta-avatar" src="<?=$reel['avatar']?>" alt="User">
            <span class="insta-user"><?=$reel['user']?></span>
            <span class="insta-date"><?=$reel['date']?></span>
            <span class="insta-ig">
               <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M7 2C4.23858 2 2 4.23858 2 7V17C2 19.7614 4.23858 22 7 22H17C19.7614 22 22 19.7614 22 17V7C22 4.23858 19.7614 2 17 2H7ZM12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7ZM18 7.5C18.2761 7.5 18.5 7.27614 18.5 7C18.5 6.72386 18.2761 6.5 18 6.5C17.7239 6.5 17.5 6.72386 17.5 7C17.5 7.27614 17.7239 7.5 18 7.5Z" fill="#888"/></svg>
            </span>
         </div>
      </div>
      <?php } ?>
   </div>
</div>
