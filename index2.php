<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <style>
        .sidebarright {
            margin-top: -157px;
        }
    </style>
    <body>
        <?php include("ticker.php"); ?>
        <br>
        <div class="container">
            <?php include("header.php"); ?>
    <div class="cbg">
            &nbsp;
            <?php include("sidebarleft.php"); ?>
            <div class="centerbar">
        <div class="content">
            <div class="subheader">
            <h4>Welcome to anilamp!</h4>
            </div>
          <!--  <div class="main"> -->
              <p class="middleparagraph">
                <?php
                echo "<small class=texx>serving the internet for <span title='since September 2022'>$ndays</span> days</small>";
                ?>
              </p>
              <img class="ad" src="headerimg/ad.png">   

          <!--  </div> -->
         </div>
</div>
         <br>
         <div class="content">
            <div class="subheader">
                <h4>miniblog test</h4>
            </div>
            <p class="blogtext">I am so crazy guys (stealing macespy code challenge)<br>I am so rebellious<br>This is crazy guys<br>Btw im gonna test smthn now
            </p>
            <div class="subfooter">
             <small>jark · <?php echo date("M d Y"); ?> · Kupbord News <?php include("modal.php"); ?></small>
            </div>
         </div>
        <!-- <div class="content">
            <div class="subheader">
                <h4>cool story</h4>
            </div>
            <p class="blogtext">my css is so bad that when you add a new box it breaks everything and yeah it is big problem</p>
            <div class="subfooter">
             <small>jark · <?php echo date("M d Y"); ?> · Kupbord News</small>
            </div>
         </div> -->
         
         
</div>
         <?php include("sidebarright.php"); ?>
    </div>
           
        </div>
        <?php include("footer.php"); ?>
       <script src="modal.js"></script>
    </body>
    </html>