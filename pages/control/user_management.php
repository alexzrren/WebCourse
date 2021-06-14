<div id="sys-name" style="margin-top: 20px;">
    <span style="border-bottom: 3px darkblue solid; font-size: 20px; font-weight: bold;">User Management</span>
</div>
<div id="func-area">
    <?php
    $link = mysqli_connect("47.100.93.151","root", "Bioinfo@2021", "webserver","3306")
    or die("Database connect failure");
    mysqli_query($link, "set names UTF8");
    $sql_admin = 'select * from users where admin=1';
    $result = mysqli_query($link, $sql_admin);
    $admin_nums =mysqli_num_rows($result);
    $sql_user = 'select * from users where admin=0';
    $result = mysqli_query($link, $sql_user);
    $user_nums =mysqli_num_rows($result);
    $sql_all = 'select * from users';
    $result = mysqli_query($link, $sql_all);
    $alluser_nums =mysqli_num_rows($result);
    echo '<p style="margin-left: 5px;">Registered User Total: ',$alluser_nums,' (',$admin_nums,' admins and ',$user_nums,' users)</p>';
    echo '<table id="query-table" border="3"><tr style="border-bottom: 2px #0a0a0a solid;">
                <th>UID</th><th>Username</th><th width="100px">Email</th><th>Password</th><th>Admin</th><th>Edit</th></tr>';
    while($row=mysqli_fetch_array($result)){
        echo '<tr>';
        $uid=$row['id'];
        echo '<td>',$row['id'],'</td>';
        echo '<td>',$row['username'],'</td>';
        echo '<td>',$row['email'],'</td>';
        echo '<td>',$row['password'],'</td>';
        if(!$row['admin']){
            echo '<td>N</td>';
            echo '<td><span id="mgmt-btn"><a href="edit_user.php?operation=del&uid=',$uid,'">Del</a></span>';
            echo '<span id="mgmt-btn"><a href="edit_user.php?operation=adm&uid=',$uid,'">BeAdmin</a></span></td>';
        }
        else{
            echo '<td>Y</td>';
            echo '<td><span style="color:darkgray;">Del</span>';
            echo '<span style="margin:0 5px 0; color:darkgray;">BeAdmin</span></td>';
        }
        echo '</tr>';
    }
    ?>
</div>