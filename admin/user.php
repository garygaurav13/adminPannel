<?php
session_start();
include('../middleware/adminMiddlewere.php'); 
include('includes/header.php');
?>
<?php
    $del_id = $_GET['del'];
    // sql to delete a record

    if(isset($_GET['del'])) {
      $sql1 = "DELETE FROM users WHERE id=$del_id";
  
      if ($con->query($sql1) === TRUE) {
        header('user.php');
      } 

    }
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover table-stripe">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Dealer</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $user = getAll("users");                 
                    if(mysqli_num_rows($user) > 0)
                    {
                        foreach($user as $row)
                        { ?>
                            <tr>
                            <td><?= $row['firstname'].' '.$row['lastname'] ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['phone']; ?></td>
                            <td><?= $row['status']; ?></td>
                            <td><?= $row['role']; ?></td>
                            <td><?= $row['created_at']; ?></td>
                            <td><?= $row['updated_at'] ?></td>
                            <td>
                              <ul style="display: flex;list-style: none;">
                                <li style="padding: 8px;">
                                  <a  class="" 
                                  href="edit-user.php?id=<?= $row['id']; ?>"> 
                                  <i class="fa fa-edit" style="font-size:24px;color:blue;"></i>
                                  </a>
                                </li>
                                <li style="padding: 8px;"><a href="user.php?del=<?= $row['id']; ?>"><i class="fa fa-trash" style="font-size:24px;color:red;"></i>
                                </li>
                              </ul>
                            </td>
                          </tr>
                        <?php
                        }
                    }
                    else
                    {

                    }
                    ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Dealer</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php include('includes/footer.php'); ?>