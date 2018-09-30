<body>
    <?php include 'sidenav.php';?>
    <article>
        <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
              <tr>
                <th><b>TIME</b></th>
                <th><b>Monday</b></th>
                <th><b>Tuesday</b></th>
                <th><b>Wednesday</b></th>
                <th><b>Thursday</b></th>
                <th><b>Friday</b></th>
              </tr>
            <tbody>
                <h1>Class Wise Time Table</h1>
                <?php
                    error_reporting(1);
                    session_start();
                    if ((isset($_SESSION['login'])) && (isset($_REQUEST['cls']))) {
                        $classname = $_REQUEST['cls'];
                        $conn = mysqli_connect("localhost", "root", "", "finaltask");
                        $sql = "select DISTINCT (time) as time from time_table where classname = "."'$classname'";
                        $rest = mysqli_query($conn, $sql);
                        while($t = mysqli_fetch_assoc($rest)){
                        $sql = "select * from time_table where classname = "."'$classname'". " AND time = '".$t['time']."'";
                        //print_r($sql);exit;
                        $res = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($res)){
                            //echo '<pre>'; print_r ($row);
                            if(($row['day']=='Monday')&&($row['time']==$t['time'])){
                                echo"<tr> <td>{$row['time']}</td>";
                                if(($row['subject']==' ')&&($row['teacher']== ' ')){
                                    echo "<td>No Class</td>";//die('');
                                }else{
                                    echo  "<td>".$row['subject']."<br>".$row['teacher']."</td>";
                                }
                            }
                            if(($row['day']=='Tuesday')&&($row['time'])){
                                if(($row['subject']=='')&&($row['teacher']=='')){
                                echo "<td>No Class</td>";
                                }else{
                                    echo  "<td>".$row['subject']."<br>".$row['teacher']."</td>";
                                }
                            }
                            if(($row['day']=='Wednesday')&&($row['time'])){
                                if(($row['subject']=='')&&($row['teacher']=='')){
                                echo "<td>No Class</td>";
                                }else{
                                    echo  "<td>".$row['subject']."<br>".$row['teacher']."</td>";
                                }
                            }
                            if(($row['day']=='Thurshday')&&($row['time'])){
                                if(($row['subject']=='')&&($row['teacher']=='')){
                                echo "<td>No Class</td>";
                                }else{
                                    echo  "<td>".$row['subject']."<br>".$row['teacher']."</td>";
                                }
                            }
                            if(($row['day']=='Friday')&&($row['time'])){
                                if(($row['subject']=='')&&($row['teacher']=='')){
                                echo "<td>No Class</td>";
                                }else{
                                    echo  "<td>".$row['subject']."<br>".$row['teacher']."</td></tr>";
                                }
                            }
                        }
                      }
                    }        
                ?>
                </body>
            </table>