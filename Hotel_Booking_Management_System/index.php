<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include('header.php');
    include('admin/db_connect.php');

	$query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
	foreach ($query as $key => $value) {
		if(!is_numeric($key))
			$_SESSION['setting_'.$key] = $value;
	}
    ?>

    <style>
    	header.masthead {
		  background: url(assets/img/lodge-hotel-resort-sky.jpg);
		  background-repeat: no-repeat;
		  background-size: cover;
		}
    </style>
    <body id="page-top">
        <!-- Navigation-->
        <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="./">Dunakanyar Hotel Zrt</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=list">Book now</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=about">About us</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://www.google.com/maps/place/Juli%C3%A1nus+Kil%C3%A1t%C3%B3/@47.7534164,18.9980581,12z/data=!4m8!1m2!2m1!1sdunakanyar!3m4!1s0x476a7d8788d6d651:0x85d7415b500ec7ab!8m2!3d47.7841056!4d18.9336009" target="blank">Our location</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://www.google.com/maps/search/restaurant+near+julianus+kil%C3%A1t%C3%B3/@47.7536046,18.998058,12z/data=!3m1!4b1" target="blank">Restaurants nearby</a></li>
                      </ul>
                </div>
            </div>
        </nav>
       
        <?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "home";
        include $page.'.php';
        ?>
       

<div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Dunakanyar Hotel Zrt. @all rights reserved <br> <a href="https://www.youtube.com/watch?v=w598c2bk3uA" target="_blank">Watch a short video about Hungary</a></div></div>
        </footer>
        
       <?php include('footer.php') ?>
    </body>

    <?php $conn->close() ?>

</html>
