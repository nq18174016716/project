<?php
    require_once('./include/config.php');
    $sql ='SELECT * FROM jl_new';
    $new = get_all($sql);

    $sql = 'SELECT * FROM jl_link';
    $link = get_all($sql);
?>
<div class="right fr">
            <h1>我要留言</h1>
            <div>
                <h2>最新公告 <span>NEWS</span></h2>
                <ul>
                    <?php foreach ($new as $item) { ?>
                        <li><a href=""><?php echo $item['new_title']; ?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div>
                <h2>友情链接 <span>Links</span></h2>
                <ul>
                    <?php foreach ($link as $item) { ?>
                        <li><a href="<?php echo $item['link_url']; ?>"><?php echo $item['link_name']; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
