<h1>Anilamp Playground</h1>
<h2>Testing our styles with multiple elements</h2>
<form>
    <label for="email">Email address</label>
    <input type="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <br>
    <small id="emailHelp">We'll never share your email with anyone else. (This doesn't do anything)</small>
    
    <br>
    <br>
    
    <label for="password">Password</label>
    <input type="password" id="password" aria-describedby="passHelp" placeholder="Choose password">
    <br>
    <small id="passHelp">Be sure to pick something secure. (This doesn't do anything)</small>

    <br>
    <br>

    <label for="exampleFormControlFile1">Upload video file (max 100mb)</label>
    <br>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">

    <br>
    <br>

    <label for="volume">Volume</label>
    <input type="range" id="volume">
</form>

<div class="footerl"><small id="footer">&copy;2022 kupbord</small></div>
<link rel="stylesheet" href="styles.css">
<style>
    body {
        padding: 5%;
    }
    h1 {
        line-height: 0.2;
    }
   #footer {
    position: absolute;
  bottom: 0;
  left: 0;
   }
   .footerl {
    position: relative;
  min-height: 150px;
   }
    </style>