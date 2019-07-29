<{*引用头部模板*}>
<{include file="./header.tpl" title=foo}>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">修改资讯</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-8 center-column">
                <form action="#" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">管理者修改</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="user_list.php"
                                   class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
                                <input type="hidden" name="user_id" value="<{$user['user_id'] }>">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">性别</span>
                                    <select name="sex" class="form-control">
                                            <option value="1"
                                                <{if $user['user_sex'] == '1'}>
                                                <{'selected'}>
                                                <{else}>
                                                <{''}>
                                                <{/if}>
                                                >男
                                            </option>
                                            <option value="0"
                                                <{if $user['user_sex'] == '0'}>
                                                <{'selected'}>
                                                <{else}>
                                                <{''}>
                                                <{/if}>
                                                >女
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">邮箱</span>
                                        <input type="email" name="email" value="<{$user['user_email'] }>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">电话</span>
                                        <input type="text" name="phone" value="<{$user['user_phone'] }>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="desc" style="width:100%;height:150px;"><{$user['user_desc'] }></textarea>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="submit" value="提交" class="submit btn btn-blue" name="commit">
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
<!-- End: Main -->
</body>

</html>
