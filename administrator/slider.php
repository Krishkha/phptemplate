<?php include "header.php" ?>
<?php
include "connection.php";
$query = "SELECT * FROM sliderbar where section_type = 'slider'";
$result = $con->query($query);

$records = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $records[] = $row;
  }
}
?>
<?php
if (isset($_GET['message']) && !empty($_GET['message'])) {
  echo '<b>' . $_GET['message'] . '</b>';
}
?>
 <!-- delete and edit function JSX -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="delete_edit_fun.js"></script>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Slider</h1>
    <nav style="display: flex; justify-content: space-between;">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Slider</li>
      </ol>
      <button type="button" onclick="showForm(0,1)" id="button" class="btn btn-primary" style="margin: 0px 10px; "><a href="#form" style="color: white;">Form</a></button>
    </nav>
  </div>



  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Default Table</h5>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Section Type</th>
                  <th scope="col">Field Type</th>
                  <th scope="col">Field Value</th>
                  <th scope="col">Create Date</th>
                </tr>
              </thead>
              <tbody><?php foreach ($records as $key => $value) : ?>
                  <tr id="record_<?php echo $value['id']; ?>">
                    <td> <?php echo $value['id']; ?> </td>
                    <td> <?php echo $value['section_type']; ?> </td>
                    <td> <?php echo $value['field_type']; ?> </td>
                    <td> <?php echo $value['field_value']; ?> </td>
                    <td> <?php echo $value['create_date']; ?> </td>
                    <td>
                      <a href="edit.php?id=<?php echo $value['id']; ?>">Edit</a> |
                      <a href="#" onclick="delete_record(<?php echo $value['id']; ?>);return false;">Delete</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
</main>


<main  class="topbarForm" id="main">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Insertion Form</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3" id="form" action="insert_form_fun_slider.php" method="post">
        <div class="col-md-6">
          <label for="inputCity" class="form-label" >Section Type</label>
          <input type="text" class="form-control" id="inputCity" name="section_type" value="slider">
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
<?php include "footer.php" ?>