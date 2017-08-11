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
            <!-- 与数据库交互的PHP部分 -->
            <?php
            $con = mysql_connect("localhost","root","root");
            if (!$con)
            {
                die('Could not connect: ' . mysql_error());
            }
            mysql_select_db("wlbx", $con);
            $result = mysql_query("SELECT * FROM repair");
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