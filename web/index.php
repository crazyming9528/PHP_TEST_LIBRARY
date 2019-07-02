<?php
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 2019/3/29
 * Time: 17:18
 */
include "inc/header.php";
$test = false;
$name =["crazyming","songbo","wangqiang","wanglei"]
?>
<h1>home</h1>

<div>
    <?php if ($test) { ?>
        <h2>welcome</h2>
    <?php } else { ?>
        <h2>bye</h2>
    <?php } ?>
</div>
<h5>美观的写法</h5>
<div>
    <?php if ($test): ?>
        <span>哈哈哈</span>
    <?php else: ?>
        <span>呵呵呵</span>
    <?php endif; ?>
</div>
<ul>
   <h4>for循环</h4>
    <?php for ($i = 0; $i < 10; $i++): ?>
        <li>这是第<?php echo $i; ?>个</li>
    <?php endfor; ?>
</ul>
<ul>
    <h4>foreach循环</h4>
    <ul>
        <?php foreach($name as $n): ?>
        <li><?php echo $n;?></li>
        <?php endforeach;?>
    </ul>
</ul>
<?php include "inc/footer.php" ?>
