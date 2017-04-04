<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>广州市大学生创业研究院后台管理网站</title>
  	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Styles/admin.css" />
  </head>

  <body>
    <!-- Main div block holding all the contents -->
  	<div id="content">
      <!-- head of the page -->
  		<div class="banner">
  			<img src="__PUBLIC__/Resources/banner.jpg" alt="banner">
  		</div>

      <!-- 左侧目录列表 -->
      <div class="leftList">
        <ul id="nav"> 
          <li><span><a href="__URL__/add">文章管理</a></span></li> 
          <li><span><a href="#">首页管理</a></span></li> 
        </ul> 
      </div>

      <!-- 右侧内容 -->
      <div class="rightContent">
        <div class="blockNow">编辑文章</div>
        <div class="line"></div>
        <div id="ckeditor">
          <form id="contentForm" action="__URL__/insert" method="post">
            <div class="item1">
              <div>作者</div>
              <input name="author" id="author" value="<?php echo ($adata['author']); ?>" />
            </div>
            <div class="item1">
              <div>来源</div>
              <input name="source" id="source" value="<?php echo ($adata['source']); ?>" />
            </div>
            <div class="item1">
              <div>编辑人</div>
              <input name="editor" id="editor" value="<?php echo ($adata['editor']); ?>" />
            </div>
            <div class="item1">  
              <div>日期</div>
              <input name="date" id="date" value="<?php echo ($adata['date']); ?>" />
            </div>
            <div class="item1">  
              <div>题目</div>
              <input name="title" id="title" value="<?php echo ($adata['title']); ?>" />
            </div>
            <div class="item1">
              <div>目录</div>
              <input name="category" id="category" value="<?php echo ($adata['category']); ?>" />
            </div>
            <div class="item2">
              <div>内容</div>
              <script id="container" name="content" type="text/plain">
                <?php echo ($adata['content']); ?>
              </script>
            </div>
            <div class="item3">
              <input type="checkbox" id="visibility" name="visibility" value="<?php echo ($adata['visibility']); ?>" />
              <div>是否可见</div>
            </div>
            <div class="item4">
              <div>优先级</div>
              <select id="priority" />
            </div>
            <div class="item5">
              <input type="submit" value="保存" />
            </div>
          </form>
        </div>
      </div> 
    </div>

    <!-- displaying the contact information -->
  	<div id="contactInfo">
  		<p>广州大学生创业研究院 版权所有 xxxxxxx号</p>
      <p>地址： 广东省广州市xxxxxx  邮政编码:xxxxxx</p>
  		<p>电话：（020）xxxxxxxx  ( 020)xxxxxxxx  传真：（020）xxxxxxxx</p>
  		<p>广州大学生创业研究院网站:www.xxxxx.org.cn</p>
  	</div>
  </body>
</html>

<script type="text/javascript" src="__PUBLIC__/Scripts/jquery-1-11-0-min.js"></script>
<!-- Set URL option value for UEditor -->
<script type="text/javascript">
  var URL = "__PUBLIC__/Utils/ueditor/";
</script>
<script type="text/javascript" src="__PUBLIC__/Utils/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="__PUBLIC__/Utils/ueditor/ueditor.all.js"></script>
<script type="text/javascript" src="__PUBLIC__/Scripts/admin.js"></script>