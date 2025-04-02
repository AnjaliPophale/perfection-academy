<?php
function breadcrum($title){
    ?>
<div class="breadcumb-wrapper " data-overlay="title" data-opacity="8">
    <div class="container">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title"><?= $title; ?></h1>
            <ul class="breadcumb-menu">
                <li><a href="<?=LINK;?>">Home</a></li>
                <li><?= $title; ?></li>
            </ul>
        </div>
    </div>
</div>
<?php
}
?>