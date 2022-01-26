<?php
$title = time();
require "../common/header.php";
echo $title;
?>

<div>
    <ul>
        <?php
        foreach ($_POST as $p => $v) {
            ?>
        <li><?php echo $p;?></li>
        <?php
        }
        ?>
    </ul>
</div>


<?php
require "../common/footer.php";
?>
