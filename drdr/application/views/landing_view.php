<!DOCTYPE html>

<html>
  <head>
    <title>Dr. Know-It-All</title>
  </head>

  <body>
  
   <h1><?php echo $title; ?>Dr. Know It All</h1>
    
  <!--  <form action="">
      <input type="radio" name="age" value="teen">Teen<br>
      <input type="radio" name="age" value="adult">Adult<br>-->

      <?php echo form_open('find/index') ?>

        <label>Quote</label><br>
        <textarea name="content"></textarea><br>
        <label>Age</label><br>
          <select name="age">
          <option value="">Select</option>
          <option value="1">Child</option>
          <option value="2">Teenager</option>
          <option value="3">Adult</option>
          <option value="4">Elder</option>
        </select>
        <br>
        <label>Feeling</label><br>
          <select name="feeling">
          <option value="">Select</option>
          <option value="1">Happy</option>
          <option value="2">Sad</option>
          <option value="3">Angry</option>
          <option value="4">Worried</option>
        </select>
        <br>
        <label>Reason</label><br>
          <select name="reason">
          <option value="">Select</option>
          <option value="1">Friendship</option>
          <option value="2">Work</option>
          <option value="3">Academics</option>
          <option value="4">Love</option>
        </select><br>
       <input type="submit" name="submit" value="Create">
    </form>
  </body>
</html>