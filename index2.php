<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
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
          <!--  </div> -->
         </div>
</div>
         <br>
         <div class="content">
            <div class="subheader">
                <h4>miniblog test</h4>
            </div>
            <p class="blogtext">I am so crazy guys (stealing macespy code challenge)<br>I am so rebellious</p>
            <div class="subfooter">
             <small>by jark, on <?php echo date("M d, Y"); ?>, in Kupbord News</small>
            </div>
         </div>
         
</div>
         <?php include("sidebarright.php"); ?>
    </div>
           
        </div>
        <?php include("footer.php"); ?>
       
    </body>
    </html>