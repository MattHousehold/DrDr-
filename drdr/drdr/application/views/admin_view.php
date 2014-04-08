<!DOCTYPE html>

<html>
  <head>
   <img class="headimage" src="http://i.minus.com/ibey8pLUClc35W.png" width="102%">
    <title>Dr. Know-It-All Submit</title>
  </head>

  <body>
  
   <h1><?php echo $title; ?><br></h1>
    
      <?php echo form_open('admin/create') ?>
      
      <div= id="adminname">
          <ul id="adminlist">
          <li>Age</li>
          <li>Feeling</li>
          <li>Reason</li>
          </ul>
      </div> 

      <div=id="adminselect">
          <ul id="adminoption"> 
          <li><select name="age" style ="margin:2px; width: 100px; height: 25px;"></li>
          <option value="">Select</option>
          <option value="2">Teenager</option>
          <option value="3">Adult</option>
        </select>
          <li><select name="feeling" style ="margin:2px; width: 100px; height: 25px;"></li>
          <option value="">Select</option>
          <option value="1">Happy</option>
          <option value="2">Sad</option>
          <option value="3">Angry</option>
          <option value="4">Worried</option>
        </select>
        <li><select name="reason" style ="margin:2px; width: 100px; height: 25px;"></li>
          <option value="">Select</option>
          <option value="1">Friendship</option>
          <option value="2">Work</option>
          <option value="3">Academics</option>
          <option value="4">Love</option>
        </select>
       </div></ul>

      <div id="textarea"> 
        <label>Quote</label><br>
        <div id="category1"><textarea name="content" style ="margin:2px; width: 400px; height: 95px;" autocomplete="off"></textarea><br><br></div>
        <label>Author</label><br>
        <div id="category1"><textarea name="author" style ="margin:2px; width: 400px; height: 25px;" autocomplete="off"></textarea><br><br></div>
      </div>     
      
        <br><br><br><br><br><br>

      <div id="submit">
        <input type="submit" name="submit" value="Submit Quote" style ="margin:2px; width: 100px; height: 25px;">
      </div>
    </form>

      <div>
    <a href="http://phoenix.sheridanc.on.ca/~ccit1570/drdr/index.php/find"><img class="link" src="http://i.minus.com/ibdaFXuVdrnuxz.png" title="Find a Quotation"></a>
  </div>

    