<?php 
include('db.php');
$my_id = $_SESSION['mb_id'];


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script type="text/javascript" src="history.js"></script>


  </head>

  <body>

  

    <table id="table" class="table">
      <th colspan="2"><h2>2010년</h2></th>
	  <tr>
    <?php
        $query = "select * from history where mb_id = '$my_id' and year = 2010" ;
        $query_run = mysqli_query($db, $query);
        $row = mysqli_fetch_array($query_run);
        if(!$row){
          $row['image'] = "";
          $row['text1'] = "";
          $row['text2'] = "";
          $row['text3'] = "";
          $row['text4'] = "";
        }
    ?>
	    <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 400px; height: 400px;">'; ?></td>
	    <td>
        <ul>
        <br><br>
          <li><?php echo $row['text1'];?></li><br><br><br>
          <li><?php echo $row['text2'];?></li><br><br><br>
          <li><?php echo $row['text3'];?></li><br><br><br>
          <li><?php echo $row['text4'];?></li><br><br><br>
        </ul>
      </td>
	  </tr>

	  <th colspan="2"><h2>2011년</h2></th>
	  <tr>
    <?php
        $query = "select * from history where mb_id = '$my_id' and year = 2011" ;
        $query_run = mysqli_query($db, $query);
        $row = mysqli_fetch_array($query_run);
        if(!$row){
          $row['image'] = "";
          $row['text1'] = "";
          $row['text2'] = "";
          $row['text3'] = "";
          $row['text4'] = "";
        }
        ?>
        <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 400px; height: 400px;">'; ?></td>
        <td>
          <ul>
          <br><br>
            <li><?php echo $row['text1'];?></li><br><br><br>
            <li><?php echo $row['text2'];?></li><br><br><br>
            <li><?php echo $row['text3'];?></li><br><br><br>
            <li><?php echo $row['text4'];?></li><br><br><br>
          </ul>
        </td>
      </tr>

    <th colspan="2"><h2>2012년</h2></th>
	  <tr>
    <?php
        $query = "select * from history where mb_id = '$my_id' and year = 2012" ;
        $query_run = mysqli_query($db, $query);
        $row = mysqli_fetch_array($query_run);
        if(!$row){
          $row['image'] = "";
          $row['text1'] = "";
          $row['text2'] = "";
          $row['text3'] = "";
          $row['text4'] = "";
        }
    ?>
	    <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 400px; height: 400px;">'; ?></td>
	    <td>
        <ul>
        <br><br>
        <li><?php echo $row['text1'];?></li><br><br><br>
          <li><?php echo $row['text2'];?></li><br><br><br>
          <li><?php echo $row['text3'];?></li><br><br><br>
          <li><?php echo $row['text4'];?></li><br><br><br>
        </ul>
      </td>
	  </tr>

    <th colspan="2"><h2>2013년</h2></th>
	  <tr>
    <?php
        $query = "select * from history where mb_id = '$my_id' and year = 2013" ;
        $query_run = mysqli_query($db, $query);
        $row = mysqli_fetch_array($query_run);
        if(!$row){
          $row['image'] = "";
          $row['text1'] = "";
          $row['text2'] = "";
          $row['text3'] = "";
          $row['text4'] = "";
        }
        ?>
	    <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 400px; height: 400px;">'; ?></td>
	    <td>
        <ul>
        <br><br>
          <li><?php echo $row['text1'];?></li><br><br><br>
          <li><?php echo $row['text2'];?></li><br><br><br>
          <li><?php echo $row['text3'];?></li><br><br><br>
          <li><?php echo $row['text4'];?></li><br><br><br>
        </ul>
      </td>
	  </tr>

    <th colspan="2"><h2>2014년</h2></th>
	  <tr>
    <?php
        $query = "select * from history where mb_id = '$my_id' and year = 2014" ;
        $query_run = mysqli_query($db, $query);
        $row = mysqli_fetch_array($query_run);
        if(!$row){
          $row['image'] = "";
          $row['text1'] = "";
          $row['text2'] = "";
          $row['text3'] = "";
          $row['text4'] = "";
        }
    ?>
	    <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 400px; height: 400px;">'; ?></td>
	    <td>
        <ul>
        <br><br>
        <li><?php echo $row['text1'];?></li><br><br><br>
          <li><?php echo $row['text2'];?></li><br><br><br>
          <li><?php echo $row['text3'];?></li><br><br><br>
          <li><?php echo $row['text4'];?></li><br><br><br>
        </ul>
      </td>
	  </tr>

    <th colspan="2" id="2015"><h2>2015년</h2></th>
	  <tr>
    <?php
        $query = "select * from history where mb_id = '$my_id' and year = 2015" ;
        $query_run = mysqli_query($db, $query);
        $row = mysqli_fetch_array($query_run);
        if(!$row){
          $row['image'] = "";
          $row['text1'] = "";
          $row['text2'] = "";
          $row['text3'] = "";
          $row['text4'] = "";
        }
        ?>
	    <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 400px; height: 400px;">'; ?></td>
	    <td>
        <ul>
        <br><br>
          <li><?php echo $row['text1'];?></li><br><br><br>
          <li><?php echo $row['text2'];?></li><br><br><br>
          <li><?php echo $row['text3'];?></li><br><br><br>
          <li><?php echo $row['text4'];?></li><br><br><br>
        </ul>
      </td>
	  </tr>

    <th colspan="2"><h2>2016년</h2></th>
	  <tr>
    <?php
        $query = "select * from history where mb_id = '$my_id' and year = 2016" ;
        $query_run = mysqli_query($db, $query);
        $row = mysqli_fetch_array($query_run);
        if(!$row){
          $row['image'] = "";
          $row['text1'] = "";
          $row['text2'] = "";
          $row['text3'] = "";
          $row['text4'] = "";
        }
    ?>
	    <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 400px; height: 400px;">'; ?></td>
	    <td>
        <ul>
        <br><br>
        <li><?php echo $row['text1'];?></li><br><br><br>
          <li><?php echo $row['text2'];?></li><br><br><br>
          <li><?php echo $row['text3'];?></li><br><br><br>
          <li><?php echo $row['text4'];?></li><br><br><br>
        </ul>
      </td>
	  </tr>

    <th colspan="2"><h2>2017년</h2></th>
	  <tr>
    <?php
        $query = "select * from history where mb_id = '$my_id' and year = 2017" ;
        $query_run = mysqli_query($db, $query);
        $row = mysqli_fetch_array($query_run);
        if(!$row){
          $row['image'] = "";
          $row['text1'] = "";
          $row['text2'] = "";
          $row['text3'] = "";
          $row['text4'] = "";
        }
        ?>
	    <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 400px; height: 400px;">'; ?></td>
	    <td>
        <ul>
        <br><br>
          <li><?php echo $row['text1'];?></li><br><br><br>
          <li><?php echo $row['text2'];?></li><br><br><br>
          <li><?php echo $row['text3'];?></li><br><br><br>
          <li><?php echo $row['text4'];?></li><br><br><br>
        </ul>
      </td>
	  </tr>

    <th colspan="2"><h2>2018년</h2></th>
	  <tr>
    <?php
        $query = "select * from history where mb_id = '$my_id' and year = 2018" ;
        $query_run = mysqli_query($db, $query);
        $row = mysqli_fetch_array($query_run);
        if(!$row){
          $row['image'] = "";
          $row['text1'] = "";
          $row['text2'] = "";
          $row['text3'] = "";
          $row['text4'] = "";
        }
    ?>
	    <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 400px; height: 400px;">'; ?></td>
	    <td>
        <ul>
        <br><br>
        <li><?php echo $row['text1'];?></li><br><br><br>
          <li><?php echo $row['text2'];?></li><br><br><br>
          <li><?php echo $row['text3'];?></li><br><br><br>
          <li><?php echo $row['text4'];?></li><br><br><br>
        </ul>
      </td>
	  </tr>

    <th colspan="2"><h2>2019년</h2></th>
	  <tr>
    <?php
        $query = "select * from history where mb_id = '$my_id' and year = 2019" ;
        $query_run = mysqli_query($db, $query);
        $row = mysqli_fetch_array($query_run);
        if(!$row){
          $row['image'] = "";
          $row['text1'] = "";
          $row['text2'] = "";
          $row['text3'] = "";
          $row['text4'] = "";
        }
        ?>
	    <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 400px; height: 400px;">'; ?></td>
	    <td>
        <ul>
        <br><br>
          <li><?php echo $row['text1'];?></li><br><br><br>
          <li><?php echo $row['text2'];?></li><br><br><br>
          <li><?php echo $row['text3'];?></li><br><br><br>
          <li><?php echo $row['text4'];?></li><br><br><br>
        </ul>
      </td>
	  </tr>

    <th colspan="2"><h2>2020년</h2></th>
	  <tr>
    <?php
        $query = "select * from history where mb_id = '$my_id' and year = 2020" ;
        $query_run = mysqli_query($db, $query);
        $row = mysqli_fetch_array($query_run);
        if(!$row){
          $row['image'] = "";
          $row['text1'] = "";
          $row['text2'] = "";
          $row['text3'] = "";
          $row['text4'] = "";
        }
    ?>
	    <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 400px; height: 400px;">'; ?></td>
	    <td>
        <ul>
        <br><br>
        <li><?php echo $row['text1'];?></li><br><br><br>
          <li><?php echo $row['text2'];?></li><br><br><br>
          <li><?php echo $row['text3'];?></li><br><br><br>
          <li><?php echo $row['text4'];?></li><br><br><br>
        </ul>
      </td>
	  </tr>

    <th colspan="2"><h2>2021년</h2></th>
	  <tr>
    <?php
        $query = "select * from history where mb_id = '$my_id' and year = 2021" ;
        $query_run = mysqli_query($db, $query);
        $row = mysqli_fetch_array($query_run);
        if(!$row){
          $row['image'] = "";
          $row['text1'] = "";
          $row['text2'] = "";
          $row['text3'] = "";
          $row['text4'] = "";
        }
        ?>
        <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 400px; height: 400px;">'; ?></td>
        <td>
          <ul>
          <br><br>
            <li><?php echo $row['text1'];?></li><br><br><br>
            <li><?php echo $row['text2'];?></li><br><br><br>
            <li><?php echo $row['text3'];?></li><br><br><br>
            <li><?php echo $row['text4'];?></li><br><br><br>
          </ul>
        </td>
      </tr>

    <th colspan="2" id="2022"><h2>2022년</h2></th>
	  <tr>
    <?php
        $query = "select * from history where mb_id = '$my_id' and year = 2022" ;
        $query_run = mysqli_query($db, $query);
        $row = mysqli_fetch_array($query_run);
        if(!$row){
          $row['image'] = "";
          $row['text1'] = "";
          $row['text2'] = "";
          $row['text3'] = "";
          $row['text4'] = "";
        }
    ?>
	    <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 400px; height: 400px;">'; ?></td>
	    <td>
        <ul>
        <br><br>
        <li><?php echo $row['text1'];?></li><br><br><br>
          <li><?php echo $row['text2'];?></li><br><br><br>
          <li><?php echo $row['text3'];?></li><br><br><br>
          <li><?php echo $row['text4'];?></li><br><br><br>

        </ul>
      </td>
	  </tr>
    </table>

   
  </body>
  
  </html>
    

    