<h1>Inspis du jour</h1>
<section class="galerie">
<?php for($i=0;$i<7;$i++): ?>
<div class="publ">
    <div class="img">
        <a class="comment"><i class="fa-regular fa-comment-dots"></i></a>
        <a href="index.php?action=like" class="like"><i class="fa-<?=$coeur?> fa-heart"></i></a>          
    </div>
    <div class="description">
    </div>
    <div class="user">
        <div class="user-profile"></div>
        <h6>user</h6>
    </div>
</div>
<?php endfor;?>
</section>