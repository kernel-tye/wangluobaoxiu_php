<!DOCTYPE html>
<html lang="zh-CN">
<meta charset="utf-8" />
<!--
<!--Created by PhpStorm.-->
<!--User: 张天元-->
<!--Date: 2017/8/8-->
<!--ime: 11:15-->
<!---->
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <title>网络故障报修系统</title>
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" href="./css/bootstrap-theme.min.css">

</head>
<body>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="text-center">网络故障报修管理页面</h3></div>
    <div class="panel-body">
        <div class="form-group">
            <!-- 导航菜单 -->



            <!-- 标准的按钮 -->
            <button type="button" class="btn btn-primary">退出系统登录</button>
            <!-- 表示一个成功的或积极的动作 -->
            <button type="button" class="btn btn-success">标记修复完成</button>
            <!-- 信息警告消息的上下文按钮 -->
            <a href="./index.html" target="_blank" <button type="button" class="btn btn-info">回到前端页面</button>  </a>
            <!-- 表示应谨慎采取的动作 -->
            <a href="./back.php" target="_blank"  <button type="button" class="btn btn-success">刷新本页面</button>     </a>
            <!-- 信息警告消息的上下文按钮 -->
            <a href="./guidang.php" target="_blank" <button type="button" class="btn btn-warning">归档所有数据</button>    </a>
            <!-- 表示一个危险的或潜在的负面动作 -->
            <button type="button" class="btn btn-danger">删除最早的一组数据</button>
            <!-- 并不强调是一个按钮，看起来像一个链接，但同时保持按钮的行为 -->
            <a href="./music.html" target="_blank" <button type="button" class="btn btn-danger" >休息一下听点歌</button>   </a>
            <a href="./ruodianjian.html" target="_blank" <button type="button" class="btn btn-danger" >弱电间分布图</button>   </a>
            <a href="./mingxie.html" target="_blank" <button type="button" class="btn btn-success" >常用业务系统</button>   </a>
            <a href="./mingxie.html" target="_blank" <button type="button" class="btn btn-warning" >彩蛋</button>   </a>
            <a href="./yijingguidang.php" target="_blank" <button type="button" class="btn btn-info">查询已经归档数据</button>  </a>


            <!-- 与数据库交互的PHP部分 -->
            <?php
            $con = mysql_connect("localhost","root","root");
            if (!$con)
            {
                die('Could not connect: ' . mysql_error());
            }
            mysql_select_db("wlbx", $con);
            $result = mysql_query("SELECT * FROM repair WHERE type=''");
            echo "<table border='1'><table class=\"table table-striped\">
            <tr>
            <th>报修时间</th>
            <th>楼名称</th>
            <th>房间号</th>
            <th>电话</th>
            <th>描述</th>
            </tr>";

            while($row = mysql_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>" . $row['repair_time'] . "</td>";
                echo "<td>" . $row['bulid_id'] . "</td>";
                echo "<td>" . $row['room'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['repair_describe'] . "</td>";
                echo "</tr>";
            }
                echo "</table>";
                mysql_close($con);
                ?>
                </table>
                </tbody></table>
            </div>
        </form>
    </div>



    <div>©齐鲁工业大学 网络信息中心 201708</div>

    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="./js/bootstrap.min.js></script>
<script src="__PUBLIC__/assets/js/checkform.min.js"></script>
<script type="text/javascript">
</script>
</body>
</html>