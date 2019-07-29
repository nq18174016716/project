<!-- 尾部 -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="left col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-4 col-xs-12">
                <h1>24</h1>
                <span></span>
                <h2>小时免费咨询热线</h2>
                <h3>400-889-7654</h3>
            </div>
            <div class="right col-lg-5 col-lg-offset-1 col-md-offset-0 col-md-5 col-md-offset-1  col-sm-8 col-xs-12">
                <ul class="nav nav-pills">
                    <{foreach from=$fo_info item=val}>
                        <li role="presentation"><a href="<{$val['nav_url']}>"><{$val['nav_name']}></a></li>
                    <{/foreach}>
                </ul>
                <{foreach from=$code item=val}>
                    <p class="text-muted"><{$val['conf_value']}></p>
                <{/foreach}>
            </div>
        </div>
    </div>
</footer>
</body>

</html>
<script src="./js/jquery-3.1.1.min.js"></script>
<script>
    $(document).ready(function(){
        $(".item:eq(0)").addClass('active');
    });
</script>
<script src="./js/bootstrap.js"></script>
