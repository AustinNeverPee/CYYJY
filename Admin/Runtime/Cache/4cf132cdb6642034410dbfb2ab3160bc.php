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
          <li><span><a href="__URL__/index">文章管理</a></span></li> 
          <li><span><a href="#">首页管理</a></span></li> 
        </ul> 
      </div>

      <!-- 右侧内容 -->
      <div class="rightContent">
        <div class="blockNow">文章管理</div>
        <div class="operator">
          <a href="__URL__/add"><span>添加文章</span></a>
          <a href="#" onclick="del();"><span>删除文章</span></a>
        </div>
        <div class="line"></div>
        <div class="mainContent">
          <form name="adminForm" action="__URL__/delete" method="post">
            <table border="1" bordercolor="black">
              <tr>
                <th>选择</th>
                <th>标题</th>
                <th>作者</th>
                <th>目录</th>
                <th>创建时间</th>
                <th>id</th>
              </tr>
              <?php if(is_array($alist)): $k = 0; $__LIST__ = $alist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($k % 2 );++$k;?><tr>
                  <td>
                    <input type="checkbox" name="did[<?php echo ($k); ?>]" value="<?php echo ($article['aid']); ?>">
                  </td>
                  <td>
                    <!--<a href="__URL__/edit/id/<?php echo ($article['aid']); ?>">-->
                      <?php echo ($article['title']); ?>
                    <!--</a>-->
                  </td>
                  <td><?php echo ($article['author']); ?></td>
                  <td><?php echo ($article['category']); ?></td>
                  <td><?php echo ($article['date']); ?></td>
                  <td><?php echo ($article['aid']); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
          </form>
        </div>

        <div class="yema">
          <?php echo ($show); ?>
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
<script type="text/javascript" src="__PUBLIC__/Scripts/admin.js"></script>
<script>
  function del() {
    if(window.confirm('请确认是否删除？')){
      document.adminForm.submit();
    }
  }
</script>
：1054:Unknown column 'id' in 'where clause' [ SQL语句 ] : DELETE FROM `article` WHERE ( id in(78) )