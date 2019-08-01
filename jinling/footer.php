<?php
    require_once('./include/config.php');

    $sql = 'SELECT * FROM jl_config';
    $conf = get_all($sql);
?>
<div class="footer">
    <div class="beybey">
        <p class="fl">
            <?php
                foreach ($conf as $item){
                    echo $item['conf_name'] . ':' . $item['conf_value'] . '&nbsp;';
                }
            ?>
        </p>
        <a href="" class="fr">
            <img src="./images/qq.png" alt="">
        </a>
    </div>
</div>
</body>
</html>
