<{*引用头部模板*}>
<{include file="./header.tpl" title=foo}>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">编辑资讯</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="#" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">编辑资讯</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="news_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <input type="hidden" name="new_id" value="<{$new_info['new_id']}>">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">标题</span>
                                        <input type="text" name="title" value="<{$new_info['new_title']}>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;" name="content"><{$new_info['new_content']}></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;" name="new_content"><{$new_info['new_con_content']}></textarea>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="submit" name="sub" value="提交" class="submit btn btn-blue">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>
<!-- End: Content -->
</div>

</body>

</html>