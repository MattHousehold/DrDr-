<!DOCTYPE html>

<html>
  <head>
  <img class="headimage" src="http://i.minus.com/ibey8pLUClc35W.png" width="102%">
  <title>Dr. Know-It-All</title>
  </head>

  <body>
    <h1><?php echo $title; ?></h1>
    <h2>A place filled with motivation and inspiration.</h2>
    <?php echo form_open('find/search') ?>

    <div id="images">
          <ul id="imageslist">
          <li><img class="age" src="http://i.minus.com/iblIL3BbSERYQR.png"></li>
          <li><img class="feeling" src="http://i5.minus.com/i38Zp4pq8283F.png"></li>
          <li><img class="reason" src="http://i4.minus.com/i6nwDjj7UKn1w.png"></li>
          </ul>
    </div>

    <div id="navcontainer">
      <ul id="navlist">
        <li>Age</li>
        <li>Feeling</li>
        <li>Reason</li>
      </ul>
    </div>

  
    <div id="selection">
      <ul id="selectionlist">
         <li> <select name="age" style ="margin:2px; width: 100px; height: 25px;"></li>
          <option value="">Select</option>
          <option value="2">Teenager</option>
          <option value="3">Adult</option>
        </select>
        <li> <select name="feeling" style ="margin:2px; width: 100px; height: 25px;"></li>
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
        </ul>  
    </div>
        
        <div id="submit2"><input type="submit" name="submit" value="Find a Quote"></div>
    </form>
  </div>
<div>
    <a href="http://phoenix.sheridanc.on.ca/~ccit1570/drdr/index.php/admin"><img class="link" src="http://i.minus.com/i5M0YXDUejvSj.png" title="Submit a Quotation"></a>
  </div>
