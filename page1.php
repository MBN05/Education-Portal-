<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ConnecED</title>
    <style>
      body{
        margin-left: 5%;
        margin-top: 3%;
      }
      a:hover{
  		  color: blue;
  		  background: #e1e5eb;
        padding-top: 10px;
        padding-bottom: 10px;
  		}
      a{
        color: black;
        padding-left: 20px;
        padding-right: 20px;
        text-decoration: None;
      }
      textarea{
        margin-top: 10px;
        margin-left: 15%;
        padding-left: 10px;
  		  padding-right: 10px;
  		  width: 58%;
  		  height: 140px;
  		  resize: none;
  		  background: #e1e5eb;
  		  color: black;
      }
      video{
        margin-left: 15%;
        background-color: black;
      }
      #sub{
        margin-left: 15%;
        border-radius: 2px 2px 2px 2px;
        border: #5394f5;
        background-color: #5394f5;
        color: white;
        width: 59.5%;
        padding: 10px 165px 10px 165px;
      }
      #sub:hover{
        color: black;
        background: #e1e5eb;
      }
body{ background-image: url('https://i.pinimg.com/736x/60/22/52/602252b4b408f8b8902c94868e6f3ced.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
}

    </style>
  </head>
  <body>

      <h3><a href="http://localhost/codes/first.php">Home</a>
      <a href="http://localhost/codes/ab.php">About Us</a>
      <a href="http://localhost/codes/tr.php">Contact Us</a></h3>
      <br>
      <br>
      <video id="vid" x-webkit-airplay="allow"  width="853" height="480" controls src="html.mp4" ></video>

      <br>
      <form action="cong.php" method="post">
        <textarea type="text" name="comments" placeholder="Add your comments" height="200" width="900" required></textarea>
        <input id="sub" type="submit" name="submit" value="Submit">
    </form>

  </body>
</html>
