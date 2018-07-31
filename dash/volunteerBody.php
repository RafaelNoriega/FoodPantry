

  <!-- _________________________________________Body___________________________________ -->
  <div class="content-wrapper">
    <div class="container-fluid">
    <?php echo 'Welcome '.$_SESSION['fname'] ?>
    <hr><br>

    <div class="col-lg-4">
<?php
    $time = date("h:ia");
    $db = pg_connect("host=localhost dbname=foodpantry user=foodpantry password=rop60Xapt");  
      
    $sql = "SELECT * from time
          WHERE volunteer_id='".$_SESSION["id"]."'
          ORDER BY t_id DESC;";

    $result = pg_query($db, $sql);
  
    //We are querying all the clock ins for the logged in user
    //in desc order so we get the most recent time block first.
    // ADD CLOCK OUT 
    if($row = pg_fetch_array($result))
    {
	$_SESSION['tid']= $row['t_id'];

        if($row['end_time'] == NULL){
     echo' 	<form method="post" name="clockOut" id="clock">
        <button class="btn btn-success rounded-0" type="submit" name="clockOut" id="clock"> 
           Clock Out
          </button>
      </form>';
	}
	else if($row['end_time'] != NULL){         
             echo'<form method="post" name="clockIn" id="clock">
        <button class="btn btn-success rounded-0" type="submit" name="clockIn" id="clock"> 
           Clock In
          </button>
      </form>';
  
	}
      }	else{         
             echo'<form method="post"  name="clockIn" id="clock">
        <button class="btn btn-success rounded-0" type="submit" name="clock" id="clock"> 
          Clock In</button>
      </form>';
      } 

         ?>
            
    </div>
    
    <!-- checkout form -->
    <div class="col-lg-8 padding">
      
      <h1>Checkout Form</h1>
      <hr>
      <br>

      <form method="post" action= "../checkout/index.php" class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" name="checkout" id="checkout">
        <div class="form-group g-mb-25">
          <label for="runnerid">Student ID</label>
            <input class="form-control rounded-0 form-control-md" aria-describedby="emailHelp" type="text" placeholder="student id" name="runnerid">
        </div> 
      <br>
      <hr>
      <div class="form-group g-mb-25">
          <label for="1pt">1pt Items</label>
            <select name="1pt">
            <option value="0">0 Item</option>
            <option value="1">1 Items</option>
            <option value="2">2 Items</option>
            <option value="3">3 Items</option>
            </select>
        </div> 
      <br>
      <hr>
      <div class="form-group g-mb-25">
          <label for="2pt">2pt Items</label>
            <select name="2pt">
            <option value="0">0 Item</option>
            <option value="1">1 Items</option>
            <option value="2">2 Items</option>
            <option value="3">3 Items</option>
            </select>
        </div> 
      <br>
      <hr>
      <div class="form-group g-mb-25">
          <label for="3pt">3pt Items</label>
            <select name="3pt">
            <option value="0">0 Item</option>
            <option value="1">1 Items</option>
            <option value="2">2 Items</option>
            <option value="3">3 Items</option>
            </select>
        </div> 
      <br>
      <hr>
      <div class="submit-middle-0">
        <button class="btn btn-lg rounded-0" type="submit" name="checkout"  id="checkout"> Checkout! </button>
      </div>
     </form>
      
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
