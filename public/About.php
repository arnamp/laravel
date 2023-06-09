<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APA-Vibrate</title>

  <link rel="stylesheet" href="web.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
</head>

<body>

    <div class="page">
      <div class="sidebar">
        <font size ="5"><center><h1>About Project</h1></font></center>
        <div class="sidebar-img">
          <img src="https://cdn.dribbble.com/users/2014359/screenshots/6008317/2.gif" alt="">
        </div>
        
        <div class="menu">
          <b class="cg">Menu</b>
          <div class="Item">
            <div class="sidebar-icon">
              <i class="fa-solid fa-table"></i>
            </div>
            <a href="Dashboard.php"><font size ="5"><b>Dashboard</b></font></a>
          </div>
          <div class="Item Item-active" >
            <div class="sidebar-icon">
              <i class="fa-solid fa-eject"></i>
            </div>
            <font size ="5"><b>About Project</b></font>
          </div><div class="Item">
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
          <font size ="3"><center><h1>Vibration Sensor With IoT</h1></center></font>
          <div class="info">
            <h2>&emsp;&emsp;&emsp;ทำการใช้ Edge-AI Vibration Sensor ซึ่งมีระบบ AI ในการเรียนรู้และจดจำการทำงานปกติของมอเตอร์ เพื่อนำมาตรวจสอบการทำงาน และความผิดปกติต่างๆของมอเตอร์ เช่น อุณหภูมิ การสั่นของมอเตอร์ ความเร็วของมอเตอร์ โดยในที่นี้มีการใช้งานกับกับมอเตอร์ปั๊มน้ำที่บริเวณตึกภาควิชาโทรคมนาคม และทำการวัดค่าอุณหภูมิและความชื้นโดย Temp Humid sensor และวัดค่าความเข้มแสงโดย Light sensor และทำการส่งข้อมูลไปยัง AP Gateway (sim) ซึ่งข้อมูลจะถูกจัดเก็บไว้บน Zeta sever และทำการดึงข้อมูลจาก Zeta sever โดยการใช้โปรโตคอล MQTT (Message Queue Telemetry Transport) ซึ่งมีการเขียนโปรแกรมด้วยภาษา Python และทำการนำข้อมูลที่ได้มาจัดเก็บไว้ใน Database โดยใช้ MySQL จากนั้นนำข้อมูลที่ได้จัดเก็บไว้บน Database มาแสดงบน Dashboard ที่อยู่บน Website ที่ได้ทำการสร้างขึ้นด้วยภาษา HTML , PHP , CSS , JavaScript</h2>
          </div>
          <div class="end3"></div>
          <div class="block-diagram">
            <img src="blocks.jpg" width="40%">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <img src="zeta.jpg" width="40%">
          </div>
          <div class="kmitl">
            <center><img src="https://f.ptcdn.info/892/034/000/1440753623-72-o.jpg" width="60%"></center>
          </div>
          <div class="gif">
            <center><img src="gif.gif" width="15%"></center>
          </div>
        </div>
      </div>
    </div>
</body>
</html>