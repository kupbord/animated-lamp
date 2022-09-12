<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <body>
        <?php include("ticker.php"); ?>
        <br>
        <div class="container">
            <?php include("header.php"); ?>
            <div class="main">
                <div class="sidebarright">
                <h2>Reminders</h2>
                <ul>
                <li>NSFW is not allowed</li>
                <li><small>SC99 is hosted in the USA.<br>Don't upload anything considered<br>illegal under US law.</small></li>
                </ul>
                </div>
                <div class="contentsbright">
                <h2>Upload</h2>
                <div class="card blue">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <label for="videofile">file: </label>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <div class="input-group">
                        <label for="videotitle">title: </label>
                        <input type="text" id="videotitle" name="videotitle">
                    </div>
                    <div class="input-group">
                        <label for="bio">description: </label>
                        <textarea style="background-color: var(--inputlol);" name="bio" rows="4" cols="30" required="required"></textarea>
                    </div>
                    <div class="input-group">
                        <div></div>
                        <div><input type="submit" value="Upload" name="submit"></div>
                    </div>
                </form>
            </div>
                
            </div>
            </div>
            
            <div class="footer">
            
            </div>
        </div>
    </body>
    </html>
