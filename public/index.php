<?php
$con  = mysqli_connect("containers-us-west-29.railway.app:7830","root","LOPC3n2wNItQFhTtqCvO","preproject");
$sql1 ="select CompanyCode,DeviceType,Data,Info,Uptime from temphumid union all select CompanyCode,DeviceType,Data,Info,Uptime from light union all select CompanyCode,DeviceType,Data,Info,Uptime from vibration order by Uptime desc limit 20";
$sql2 = "select DeviceType,Info,Uptime from temphumid where DeviceType = 'temp_humid_1' order by Uptime desc limit 1";
$sql3 = "select DeviceType,Info,Uptime from temphumid where DeviceType = 'temp_humid_2' order by Uptime desc limit 1";
$sql4 = "select DeviceType,Info,Uptime from light order by Uptime desc limit 1";
$sql5 = "select DeviceType,Info,Uptime from vibration order by Uptime desc limit 1";
$result1 = mysqli_query($con,$sql1);
$result2 = mysqli_query($con,$sql2);
$result3 = mysqli_query($con,$sql3);
$result4 = mysqli_query($con,$sql4);
$result5 = mysqli_query($con,$sql5);
while ($row = mysqli_fetch_array($result2)) { 
    $datetime1  = date_format(date_create( $row['Uptime']),"l d-m-Y H:i:s") ;
    $info1 = $row['Info'];
}
while ($row = mysqli_fetch_array($result3)) { 
    $datetime2  = date_format(date_create( $row['Uptime']),"l d-m-Y H:i:s") ;
    $info2 = $row['Info'];
}
while ($row = mysqli_fetch_array($result4)) { 
    $datetime3  = date_format(date_create( $row['Uptime']),"l d-m-Y H:i:s") ;
    $info3 = $row['Info'];
}
while ($row = mysqli_fetch_array($result5)) { 
  $datetime4  = date_format(date_create( $row['Uptime']),"l d-m-Y H:i:s") ;
  $info4 = $row['Info'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APA-Vibrate</title>

  <link rel="stylesheet" href="web.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <div class="page">
      <div class="sidebar">
        <font size ="5"><center><h1>Dashboard</h1></font></center>
        <div class="sidebar-img">
          <img src="https://cdn.dribbble.com/users/2014359/screenshots/6008317/2.gif" alt="">
        </div>

        <div class="menu">
          <b class="cg">Menu</b>
          <div class="Item Item-active">
            <div class="sidebar-icon">
              <i class="fa-solid fa-table"></i>
            </div>
            <font size ="5"><b>Dashboard</b></font>
          </div>
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-eject"></i>
            </div>
            <a href="About.php"><font size ="5"><b>About Project</b></font></a>
          </div>
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-people-group"></i>
            </div> 
            <a href="Member.php"><font size ="5"><b>Members</b></font></a>
          </div>
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-chart-line"></i>
            </div> 
            <a href="graph.php"><font size ="5"><b>Graphs</b></font></a>
          </div>
        </div>
        <div class="end"></div>
        <div class="clock-box">
          <p id="clock"></p>
        </div>
        <script>
          function updateTime() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
    
            // Add leading zeros to minutes and seconds
            minutes = (minutes < 10 ? "0" : "") + minutes;
            seconds = (seconds < 10 ? "0" : "") + seconds;
    
            // Determine AM/PM notation
            var ampm = (hours < 12 ? "AM" : "PM");
            hours = (hours > 12 ? hours - 12 : hours);
            hours = (hours == 0 ? 12 : hours);
    
            // Format the time
            var timeString = hours + ":" + minutes + ":" + seconds + " " + ampm;
    
            // Update the clock element
            document.getElementById("clock").innerHTML = timeString;
          }
    
          // Call the updateTime function every second
          setInterval(updateTime, 1000);
        </script>
        <div class="other">
            <img src="https://s3-us-west-2.amazonaws.com/cbi-image-service-prd/original/3bcb6755-c53c-4f31-9ba0-d198e587b019.jpeg" width="100%"><br><br><br>
            <img src="https://thailandsmartcityexpo.com/wp-content/uploads/2022/11/22611022.png" width="100%"><br><br><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Kmitl.jpg" width="100%"><br><br><br><br><br>
            <center><img src="https://thumbs.gfycat.com/JaggedFlusteredLark-max-1mb.gif" width="70%"></center>
        </div>
      </div>
      <div class="content">
        <div class="nav-bar">
          <div class="search">
            <a href="" target="_blank" hidden></a>
            <input type="text" placeholder="Search">
            <div class="autocom-box">
              <!-- here list are inserted from javascript -->
            </div>
            <div class="icon"><i class="fas fa-search"></i></div>
          </div>
        </div>
        <script src="js/script.js"></script>
        <script src="js/suggestions.js"></script>
        <div class="content-space">
          <font size ="3"><center><h1>My Project x Zifisense</h1></center></font>
          <div class="image">
              <div class ="image-item image-one">
              </div>
              <div class="video">
                <iframe width="100%" height="115%" src="https://www.youtube.com/embed/2d2NnEnHtTQ" title="YouTube video player" frameborder="10px" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
          </div>
          <div class="end2"></div>
          <div class="content-table">
            <section>
              <div class="word_status">
                <h1>Status</h1>
              </div>
              <div class="totaltemp">
                <div class="main_temp1">
                  <center><h2>Temp & Humid 1</h2></center>
                  <div class="imgt1">
                    <img src="https://i.pinimg.com/originals/0e/f3/bb/0ef3bb66d9216fffcea9022628f7bb26.gif">
                  </div>
                  <div class="temp1_info">
                    <div class="t1info-l">
                      <div class="wordt1-l">
                        <div class="wordbox"><font color="black"><h2>Info</h2></font></div>
                        <h3><?php echo $info1 ?></h3>
                      </div>
                    </div>
                    <div class="t1info-r">
                      <div class="wordt1-r">
                        <div class="wordbox"><font color="black"><h2>DateTime</h2></font></div>
                        <h3><?php echo $datetime1?></h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="main_temp1">
                  <center><h2>Temp & Humid 2</h2></center>
                  <div class="imgt1">
                    <img src="https://i.gifer.com/XHqB.gif" alt="">
                  </div>
                  <div class="temp1_info">
                    <div class="t1info-l">
                      <div class="wordt1-l">
                        <div class="wordbox"><font color="black"><h2>Info</h2></font></div>
                        <h3><?php echo $info2 ?></h3>
                      </div>
                    </div>
                    <div class="t1info-r">
                      <div class="wordt1-r">
                        <div class="wordbox"><font color="black"><h2>DateTime</h2></font></div>
                        <h3><?php echo $datetime2?></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               
              <div class="lightvibra">
                <div class="main_temp1">
                  <center><h2>Light</h2></center>
                  <div class="imgt1">
                    <img src="https://bestanimations.com/media/bulbs/2014598748tumblr_nq3a0iw1wH1takhpwo1_500.gif" alt="">
                  </div>
                  <div class="temp1_info">
                    <div class="t1info-l">
                      <div class="wordt1-l">
                        <div class="wordbox"><font color="black"><h2>Info</h2></font></div>
                        <h3><?php echo $info3 ?></h3>
                      </div>
                    </div>
                    <div class="t1info-r">
                      <div class="wordt1-r">
                        <div class="wordbox"><font color="black"><h2>DateTime</h2></font></div>
                        <h3><?php echo $datetime3?></h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="main_temp1">
                  <center><h2>Vibration</h2></center>
                  <div class="imgt1">
                    <img src="https://cutewallpaper.org/26/artifical-intelligence-gif-wallpaper/natural-ai-brain-brand-element-motion-design-animation-animation-design-motion-design.gif" alt="">
                  </div>
                  <div class="temp1_info">
                    <div class="t1info-l">
                      <div class="wordt1-l">
                        <div class="wordbox"><font color="black"><h2>Info</h2></font></div>
                        <h3><?php echo $info4 ?></h3>
                      </div>
                    </div>
                    <div class="t1info-r">
                      <div class="wordt1-r">
                        <div class="wordbox"><font color="black"><h2>DateTime</h2></font></div>
                        <h3><?php echo $datetime4?></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="wordtable"><center><h1>Notifications Tables</h1></center></div>
              <div class="tableinfo">
                <!-- TABLE CONSTRUCTION-->
                <?php
                echo "<table>";
                echo "<tr><th>CompanyCode</th><th>DeviceType</th><th>Data</th><th>Info</th><th>UpTime</th></tr>";
                while ($row = mysqli_fetch_array($result1)) { 
                    echo "<tr><td>".$row['CompanyCode']."</td><td>".$row['DeviceType']."</td><td>".$row['Data']."</td><td>".$row['Info']."</td><td>".date_format(date_create( $row['Uptime']),"l d F Y H:i:s")."</td></tr>";
                }
                echo "</table>";
                ?>
              </div>
             </section>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>