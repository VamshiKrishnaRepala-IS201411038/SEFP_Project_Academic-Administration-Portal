<html>
    <head>
    <title>Dynamic Drop Down List</title>
    </head>
    <BODY bgcolor ="pink">
        <form id="form1" name="form1" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Employee List :
            <select Emp Name='NEW'>
            <option value="">--- Select ---</option>
            <?php
                mysqli_connect ("localhost","root","sunil");
                mysqli_select_db ("testdb");
                $select="testdb";
                if (isset ($select)&&$select!=""){
                $select=$_POST ['NEW'];
            }
            ?>
            <?php
            include_once 'dbconnect.php';
                $list=mysqli_query($con,"select * from faculty order by name asc");
            while($row_list=mysqli_fetch_array($list)){
                ?>
                    <option value="<?php echo $row_list['fid']; ?>"<?php if($row_list['fid']==$select){ echo "selected"; } ?>>
                                         <?php echo $row_list['name']; ?>
                    </option>
                <?php
                }
                ?>
            </select>
            <input type="submit" name="Submit" value="Select" />
        </form>
    </body>
</html>