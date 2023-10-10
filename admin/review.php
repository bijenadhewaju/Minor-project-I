<?php
    include("includes/header.php");

    include("../includes/connection.php");
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Reviews</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Review List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Book Name</th>
                                            <th>User</th>
                                            <th>Review</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $_q = "select * from review JOIN register ON review.uid=register.r_id JOIN book ON review.bid=book.b_id ";
                                            $book_res=mysqli_query($link,$_q);

                                            $count=1;

                                            while($book_row=mysqli_fetch_assoc($book_res))
                                            {
                                                echo '<tr class="odd gradeX">
                                                          <td>'.$count.'</td>
                                                          <td>'.$book_row['b_nm'].'</td>
                                                          <td>'.$book_row['r_fnm'].'</td>
                                                          <td>'.($book_row['review']).'</td>'
                                                          ;                                                      
                                                    echo '<td>'.@date("d-M-y",$book_row['b_time']).'</td>
                                                          <td align="center">
                                                            <a class="btn btn-danger" href="process_review_del.php?id='.$book_row['id'].'"><i class="fa fa-trash-o"></i></a>
                                                            
                                                            </td>
                                                      </tr>';
                                                $count++;
                                            }

                                        ?>
                                            
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
    
        </div>
        <!-- /#page-wrapper -->
<?php
    include("includes/footer.php");
?>
