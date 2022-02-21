<div class="comments-title">
    
    <?php
    $comments_num = get_comments_number();
    if(1== $comments_num){
        echo "1 coment";
    }else{
        echo $comments_num .'Comments';
    }
    ?>
</div>

<div class="comments-list">
    <?php
    wp_list_comments();
    ?>
</div>

<div class="comments-form">
    <?php 
     comment_form();
    ?>
</div>
  



