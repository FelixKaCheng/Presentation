<!DOCTYPE html>
<html>
  <head>
    <link href="css/postmethod.css" type="text/css" rel="stylesheet">
    <meta charset="utf-8">
    <title>Forms</title>
  </head>
  <body>
    <h3>Activity 1- Forms POST Method</h3>
    <div id="contactForm">
      <form method= "post">
    <fieldset>
      <legend>Post Method</legend>
      <label for="fullname">Full Name </label>
<input type="text" name="fullname" id="fullname" size="10" maxlength="10"/>
    Number <input type="number" name="quantity" size="10" min="-2" max="10" value="0" id="quantity"/>
    <label for= "color">Color</label>
    <select name="color" id="color">
      <option value="yellow" >yellow</option>
        <option value="red">red</option>
      <option value="green">green</option>
      <option value="orange">orange</option>
    </select>
    <input type="submit" name="order" id="order" value="order">
    </fieldset>
    </form>
  </div>
    </body>
</html>
