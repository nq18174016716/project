<{*引用头部模板*}>
<{include file="./header.tpl" title=foo}>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">编辑导航</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="#" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">编辑导航</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="nav_manage.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
                                <input type="hidden" name="nav_id" value="<{$nav_info['nav_id']}>">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">导航名称</span>
                                        <input type="text" name="name" value="<{$nav_info['nav_name']}>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">导航链接</span>
                                        <input type="text" name="url" value="<{$nav_info['nav_url']}>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">导航类型</span>
                                        <select class="form-control" name="subnav">
                                            <optgroup label="一级导航">
                                                <option value="0"<{if $nav_info['parent_id']==0}>
                                                <{'selected'}>
                                                <{else}>
                                                <{''}>
                                                <{/if}>>一级导航</option>
                                            </optgroup>
                                            <optgroup label="二级导航">
                                                <{foreach from=$parent_nav item=val}>
                                                <option value="<{$val['nav_id']}>"
                                                    <{if $nav_info['parent_id'] == $val['nav_id']}>
                                                    <{'selected'}>
                                                    <{else}>
                                                    <{''}>
                                                    <{/if}>>
                                                    <{$val['nav_name']}>
                                                </option>
                                                <{/foreach}>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;"></textarea>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="submit" value="提交" class="submit btn btn-blue" name="sub">
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
