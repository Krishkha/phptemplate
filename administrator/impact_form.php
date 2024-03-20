<?php include "header.php" ?>
<?php
include "connection.php";
$query = "SELECT * FROM impact_form" ;
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

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Form</li>
      </ol>
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
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Subject</th>
                  <th scope="col">Message</th>
                </tr>
              </thead>
              <tbody><?php foreach ($records as $key => $value) : ?>
                  <tr id="record_<?php echo $value['id']; ?>">
                    <td> <?php echo $value['id']; ?> </td>
                    <td> <?php echo $value['name']; ?> </td>
                    <td> <?php echo $value['email']; ?> </td>
                    <td> <?php echo $value['subject']; ?> </td>
                    <td> <?php echo $value['message']; ?> </td>
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
<?php include "footer.php" ?>