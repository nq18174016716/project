<{*引用头部模板*}>
<{include file="./header.tpl" title=foo}>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">顶级服务</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">顶级服务</div>
                    </div>
                    <form action="" method="post">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover dataTable">
                                <tr class="active text-center">
                                    <th>标题</th>
                                    <th>描述</th>
                                    <th>简图</th>
                                </tr>
                                <{foreach from=$ser item=val}>
                                <tr class="success">
                                    <td><{$val['ser_name']}></td>
                                    <td><{$val.ser_desc}></td>
                                    <td>
                                        <a href="#" class="thumbnail">
                                            <img src="../<{$val['ser_img']}>" alt="" class="img-responsive">
                                        </a>
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