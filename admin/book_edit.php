<?php
    include("includes/header.php");

    include("../includes/connection.php");

    $cq="select * from book where b_id=".$_GET['id'];

    $res=mysqli_query($link,$cq);

    $crow=mysqli_fetch_assoc($res);
    
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Book</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Book
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                    <form role="form" action="process_book_edit.php" method="post" enctype="multipart/form-data">

                                        <input type="hidden" name="id" value="<?php echo $crow['b_id']; ?>" />

                                        <div class="form-group">
                                            <label>Book Name</label>
                                                <?php
                                                    if(isset($_SESSION['error']['bnm']))
                                                    {
                                                        echo '<p class="error">'.$_SESSION['error']['bnm'].'</p>';
                                                    } 
                                                ?>
                                            <input type="text" name="bnm" value="<?php echo $crow['b_nm'] ?>" class="form-control">
                                        </div>


                                        

                                        
                                        <div class="form-group">
                                            <label>Description
                                                <?php
                                                
                                                    if(isset($_SESSION['error']['desc']))
                                                    {
                                                        echo '<p class="error">'.$_SESSION['error']['desc'].'</p>';
                                                    }
                                                ?>
                                            </label>
                                            <textarea name="desc" rows="3" class="form-control"><?php echo $crow['b_desc'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Author Name</label>
                                                <?php
                                                    if(isset($_SESSION['error']['author']))
                                                    {
                                                        echo '<p class="error">'.$_SESSION['error']['author'].'</p>';
                                                    } 
                                                ?>
                                            <input type="text" name="author" class="form-control" value="<?php echo $crow['author_name'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>ISBN</label>
                                                <?php
                                                    if(isset($_SESSION['error']['isbn']))
                                                    {
                                                        echo '<p class="error">'.$_SESSION['error']['isbn'].'</p>';
                                                    } 
                                                ?>
                                            <input type="text" name="isbn" class="form-control" value="<?php echo $crow['isbn'] ?>">
                                        </div>
                                        


                                        <div class="form-group">
                                            <label>Book Image</label>
                                                
                                                <?php
                                                    if(isset($_SESSION['error']['b_img']))
                                                    {
                                                        echo '<p class="error">'.$_SESSION['error']['b_img'].'</p>';
                                                    }
                                                ?>
                                            <input type="file" name="b_img" class="form-control">
                                        </div>


                                        <button type="submit" class="btn btn-default">Update Book</button>

                                        <a href="book_view.php" class="btn btn-default">Exit</a>

                                    </form>

                                    <?php
                                        unset($_SESSION['error']);
                                    ?>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

<?php
    include("includes/footer.php");
?>