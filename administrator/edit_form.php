<?php
    include "connection.php";
    $id = $_POST['id'];
    $query = "SELECT * FROM genneral_settings WHERE id = $id";
    $executeQuery = $con->query($query);
    $row = $executeQuery->fetch_assoc();
?>
<?php include "header.php" ?>


<!-- delete and edit function JSX -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="delete_edit_fun.js"></script>


<main id="main" class="main">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Edit Form</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3" action="/edit_fun.php" method="post">
        <div class="col-md-6">
          <label for="inputCity" class="form-label">ID</label>
          <input type="text" class="form-control" id="inputCity" name="id">
        </div>

        <div class="col-md-6">
          <label for="inputCity" class="form-label">Section Type</label>
          <input type="text" class="form-control" id="inputCity" name="section_type">
        </div>

        <div class="col-md-6">
          <label for="inputCity" class="form-label">Field Type</label>
          <input type="text" class="form-control" id="inputCity" name="field_type">
        </div>

        <div class="col-md-6">
          <label for="inputCity" class="form-label">Field Value</label>
          <input type="text" class="form-control" id="inputCity" name="field_value">
        </div>

        <div class="col-md-6">
          <label for="inputCity" class="form-label">Create Date</label>
          <input type="datetime-local" class="form-control" id="inputCity" name="create_date">
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End Multi Columns Form -->

</main>



<?php 
        if(isset($_GET['message']) && !empty($_GET['message'])){
            echo $_GET['message'];
        }
        ?>


<?php include "footer.php" ?>