<?php
    $title = time();
    require "src/common/header.php";
    echo $title;
?>

<div class="container">
    <form action="./src/templates/thanks.php" method="post">
        <label for="">
            <input type="text" name="name" placeholder="Name" class="form-control">
        </label>
        <label for="">
            <input type="email" name="mail" placeholder="Email" class="form-control">
        </label>
        <button type="submit" class="btn btn-success">Кнопочка</button>
    </form>
</div>

<?php

include 'src/components/function.php';
$links = get_links();
$user = 'Admin';
$a = 4;


?>
<?php
if (strtolower($user) == 'admin' && $a == 5)
    echo "<p>Hello, $user</p>";
else
    echo "<p>Hello, user $user</p>"
?>
<ul>
    <?php
    foreach ($links as $l) {
        ?>
        <li>
            <a href="<?php echo $l; ?>"><?php echo $l; ?></a>
        </li>
        <?php
    } ?>


</ul>
<?php
$str = 'HellO';
if ($str == 'Hello') {
    echo 'yes';
}
$pass = 'phenomchik';
echo md5($pass);
?>

<?php
require "src/common/footer.php";
?>


