 <?php
    $post_id = get_the_ID();
    $post_title = get_the_title();
    $post_link = get_permalink();
    $post_thumb = get_the_post_thumbnail_url($post_id, 'full');
    $post_date = get_the_date('d/m/Y');
    $categories = get_the_category();
    $category_name = !empty($categories) ? esc_html($categories[0]->name) : 'Chưa có danh mục';
    ?>
 <a href="<?php echo esc_url($post_link); ?>" class="highlight-news-item">
     <img class="highlight-news-item__image" src="<?php echo esc_url($post_thumb); ?>" alt="<?php echo esc_attr($post_title); ?>">
     <div class="highlight-news-item__content">
         <h3 class="highlight-news-item__title"><?php echo esc_html($post_title); ?></h3>
         <div class="highlight-news-item__info">
             <div class="highlight-news-item__meta">
                 <div class="highlight-news-item__category">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M13.6668 11.1001H10.3335" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                         <path d="M15.2134 5.33325H8.78671C7.36671 5.33325 6.21338 6.49325 6.21338 7.90659V17.2999C6.21338 18.4999 7.07338 19.0066 8.12671 18.4266L11.38 16.6199C11.7267 16.4266 12.2867 16.4266 12.6267 16.6199L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.2999V7.90659C17.7867 6.49325 16.6334 5.33325 15.2134 5.33325Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                     <span><?php echo esc_html($category_name); ?></span>
                 </div>
                 <div class="highlight-news-item__date">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M9.3335 5.33325V7.33325" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                         <path d="M14.6665 5.33325V7.33325" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                         <path d="M6.3335 10.0601H17.6668" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                         <path d="M18 9.66659V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66659C6 7.66659 7 6.33325 9.33333 6.33325H14.6667C17 6.33325 18 7.66659 18 9.66659Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                     <span><?php echo esc_html($post_date); ?></span>
                 </div>
             </div>
             <button class="highlight-news-item__button">
                 <?php echo LANG == 'en' ? 'Read now' : 'Xem ngay'; ?>
             </button>
         </div>
     </div>
 </a>