<?php
session_start();
include('../middleware/adminMiddlewere.php'); 
include('includes/header.php');
?>
<div class="wrapper container">
    <div class="py-5">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($_SESSION['message']))
                { 
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?= $_SESSION['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    unset($_SESSION['message']);
                }?>  
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6"><h4><b>State</b></h4></div>
                            <!-- <div class="col-md-6"><a href="countries.php" class="btn btn-primary" style="float: right; font-size: 19px; font-weight: 700;">View</a></div> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">
                            <div class="mb-3">
                                <label for="shortname" class="form-label">State Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter State Name">
                            </div>
                            <div class="mb-3">
                                <label for="country_id">Select Country</label>
                                <select class="form-control" name="country_id">
                                    <label for="role">Countries</label>
                                    <?php $user = getCountries("countries");  if(mysqli_num_rows($user) > 0){ foreach($user as $row) { ?> 
                                        <option value="<?= $row['id'] ?>"><?= $row['name']; ?></option>
                                    <?php } } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="createState" value="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6"><h4>States List With Countries</h4></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover table-stripe">
                            <thead>
                            <tr>
                                <th>Country</th>
                                <th>State</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $user = getStateCountry("states");  
                            // $test = mysqli_fetch_assoc($user);
                            if(mysqli_num_rows($user) > 0)
                            {
                                foreach($user as $row) { 
                                ?>
                                <tr>
                                    <td><?= $row['name']; ?></td>
                                    <td><?= $row['countries_name']; ?></td>
                                </tr>
                                <?php 
                                }
                            } 
                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Country</th>
                                <th>State</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>