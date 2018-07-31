<!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Food Pantry 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../logout/index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    
    <script>

// -- Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", "June"],
    datasets: [{
      label: "Visits",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [421, 531, 621, 781, 321, 384],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 1000,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
//-- Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: [ 
   
    <?php 
      $db = pg_connect("host=localhost dbname=foodpantry user=foodpantry password=rop60Xapt");
      $sql = "SELECT count(major) as amount, major  from users group by major";
       $result = pg_query($db, $sql);
       $majorCount="";
       $majorsList="";
       $colors = array("#007bff", "#dc3545", "#ca5c62", '#277c6b' , '#ccaccc' ,'#c18080', '#a16a5bs', '#ea9999', '#e6e6fa');
       $colorsUsed = '';
       $i=0;
       while($row = pg_fetch_array( $result ))
       {
          if($i){ 
            $majorsList .= ", ";
            $majorCount .= ", ";
            $colorsUsed .= ", ";
          } 
         $majorsList .=  '"'.$row["major"].'"';
         $majorCount .= $row["amount"];
         $colorsUsed .= $colors[i];
         $i++;

       }
       echo $majorsList;
    ?> 
    ],
    datasets: [{
      data:
      <?php echo "[".$majorCount."]"; ?>
     ,
     backgroundColor: [ "#007bff", "#dc3545", "#ca5c62" , '#277c6b' , '#ccaccc', '#c18080', '#a16a5bs', '#ea9999', '#e6e6fa' ],
    }],
  },
});

    </script>
