<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Landing page template built with HTML and Bootstrap 4 for presenting training courses, classes, workshops and for convincing visitors to register using the form.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>CT519 Final Lab</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<?php
include("connect_db.php");

$book_id = "";
$book_name = "";
$book_author = "";
$book_page = "";
$book_year = "";

if(isset($_GET["bid"])){
    $sql = "SELECT * FROM books_info WHERE book_id=".$_GET["bid"].";";
    $result = $conn->query($sql);

    
    if($result->num_rows > 0){
        $rs_data = $result->fetch_assoc();
        $book_id = $rs_data["book_id"];
        $book_name = $rs_data["book_name"];
        $book_author = $rs_data["book_author"];
        $book_page = $rs_data["book_page"];
        $book_year = $rs_data["book_year"];
    } 
}

if(isset($_GET["deleteId"])){
    $sql = "delete FROM books_info WHERE book_id=".$_GET["deleteId"].";";
    $result = $conn->query($sql);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $sql = "SELECT * FROM books_info WHERE book_id=".$_POST["bid"].";";
    // $result = $conn->query($sql);
    if($_POST["bid"]!=""){
        // update
        $sql_update = "update books_info 
        set book_name='".$_POST["bname"]."', book_author='".$_POST["bauthor"]."', 
            book_year='".$_POST["byear"]."', book_page=".$_POST["bpage"]." 
        where book_id=".$_POST["bid"].";";
        $conn->query($sql_update);
        
    }else{
        // insert
        $sql_insert = "insert into books_info (book_name, book_author, book_year, book_page) 
        values ('".$_POST["bname"]."','".$_POST["bauthor"]."','".$_POST["byear"]."',".$_POST["bpage"].");";
        $conn->query($sql_insert);
    }
}

?>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <?php 
        include ('navbar.php');
    ?>


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="white">My Book</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a><i class="fa fa-angle-double-right"></i><span>My Book</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                                       
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-container last">
                                <h3>Research related books</h3>
                                <p>By using Corso template, This page for add/edit/delete books information by click on submit buttion for add, pencil icon for edit and click on x button if you want to delete the book.</p>
                                <p>You can link to research information <a href="research.php">Research Information</a></p>
                            </div> <!-- end of text container -->
                        </div> <!-- end of col-->
                        <div class="col-md-6">

                            <!-- Privacy Form -->
                            <div class="form-container">
                                <form id="Form" data-toggle="validator" data-focus="t" method="POST" action="mybook.php">
                                    <input type="hidden" name="bid" value="<?php echo $book_id;?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control-input" id="bname" name="bname" required value="<?php echo $book_name;?>">
                                        <label class="label-control" for="bname">Book Name</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control-input" id="bauthor" name="bauthor" value="<?php echo $book_author;?>">
                                        <label class="label-control" for="bauthor">Author</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control-input" id="byear" name="byear" value="<?php echo $book_year;?>">
                                        <label class="label-control" for="byear">Year</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control-input" id="bpage" name="bpage" value="<?php echo $book_page;?>">
                                        <label class="label-control" for="bpage">Page</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="form-control-submit-button">SUBMIT</button>
                                    </div>
                                    <!-- <div class="form-message">
                                        <div id="pmsgSubmit" class="h3 text-center hidden"></div>
                                    </div> -->
                                </form>
                            </div> <!-- end of form container -->
                            <!-- end of privacy form --> 

                        </div> <!-- end of col--> 
                    </div> <!-- end of row -->

                    <div class="col-lg-12">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Book Name</th>
                                <th scope="col">Author</th>
                                <th scope="col">Year</th>
                                <th scope="col">Page</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM books_info";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                            // output data of each row
                                while($row = $result->fetch_assoc()) {
                            ?>
                            
                                <tr>
                                <th scope="row"><?php echo $row["book_id"];?></th>
                                <td><?php echo $row["book_name"];?></td>
                                <td><?php echo $row["book_author"];?></td>
                                <td><?php echo $row["book_year"];?></td>
                                <td><?php echo $row["book_page"];?></td>
                                <td><a href="?bid=<?php echo $row["book_id"];?>"><i class="bi-pencil"></i></a> | <a href="?deleteId=<?php echo $row["book_id"];?>"><i class="bi-x-circle"></i></a></td>
                                </tr>
                            <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div><?php //echo "row: ",$result->num_rows; ?>
                    <a class="btn-solid-reg" href="index.php">BACK</a>
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->

    
    <!-- Footer -->
    <?php
    include("footer.php");
    ?>


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.countdown.min.js"></script> <!-- The Final Countdown plugin for jQuery -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>