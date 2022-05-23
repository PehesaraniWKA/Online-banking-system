<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <!-- css sheet (IWT Folder - Chatbot 3 Folder -->
    <link rel="stylesheet" href="chatbot3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <!-- Chatbot buton -->
    <input type="checkbox" id="click">
    <label for="click">
    <img src="images/chatbot8.gif" height="100px" width="100px" style="border-radius:50px">
    </label>
    <div class="wrapper">
      <div class="head-text">
Let's chat? - ABC bank</div>
<div class="chat-box">
        <div class="desc-text">
Please fill out the below form, the next available agent will respond to yous .</div>
<form action="insertchatbot3.php" method="post">
          <div class="field">
            <input type="text" name="name" placeholder="Your Name"  required>  <!-- For error -->
          </div>
<div class="field">
            <input type="text" name="tellus" placeholder="Tell Us" required>    <!-- For error -->
          </div>
<div class="field textarea">
          
            <changeit cols="30" rows="10" placeholder="Explain your queries.." required></changeit>
          </div>
<div class="field">
            <button type="submit" name ="submit" value="submit">Send</button>
          </div>
</form>
</div>
</div>
</body>
</html>