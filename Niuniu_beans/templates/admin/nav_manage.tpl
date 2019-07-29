<{*引用头部模板*}>
<{include file="./header.tpl" title=foo}>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">导航管理</li>
        </ol>
    </div>
    <div class="container">
        <div class="roe">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">导航列表</div>
                        <a href="nav_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span>添加导航</a>
                    </div>
                    <form action="" method="post">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover dataTable">
                                <tr class="active">
                                    <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                                    <th>导航名称</th>
                                    <th>导航链接</th>
                                    <th>二级导航</th>
                                    <th>操作</th>
                                </tr>
                                <{foreach from=$nav_info item=val}>
                                <tr class="success">
                                    <td class="text-center"><input type="checkbox" value="<{$val['nav_id']}>" name="idarr[]" class="cbox"></td>
                                    <td><{$val['nav_name']}></td>
                                    <td><{$val['nav_url']}></td>
                                    <td>
                                        <{if $val['parent_id']==0}>
                                        <{'否'}>
                                        <{else}>
                                        <{'是'}>
                                        <{/if}>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="nav_edit.php?edit=<{$val['nav_id']}>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                                            <a onclick="return confirm('确定要删除吗？');" href="?del=<{$val['nav_id']}>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <{/foreach}>
                            </table>

                            <div class="pull-left">

                                <button name="delall" onclick="return confirm('确定要删除吗？');"  type="submit" class="btn btn-default btn-gradient pull-right delall">
                                    <span class="glyphicons glyphicon-trash"></span>
                                </button>
                            </div>
                            <div class="pull-right">
                                <ul class="pagination" id="paginator-example">
                                    <{$pg}>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Content -->
</div>
<!-- End: Main -->
</body>
</html>

