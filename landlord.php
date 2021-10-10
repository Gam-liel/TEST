<?php  
require('include/header.php');
$pageLocator = 'landlord';
require('include/menubar.php');
?>
<style>
.table tr td{
    text-transform: capitalize;
}
</style>
    <!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-support"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>LLLandlords</h2>
										<p></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="pull-right">
                                    <button id="delete-warning" data-toggle="tooltip" data-placement="bottom" title="Bulk Delete" class="btn btn-danger notika-btn-danger"><i class="fa fa-trash"></i></button>
									<button data-toggle="modal" data-target="#add"  class="btn btn-amber amber-icon-notika"><i class="fa fa-plus"></i></button>
								    <div class="dropdown-trig-sgn">
                                        <button class="btn triger-swing" data-toggle="dropdown"><i class="notika-icon notika-print"></i></button>
                                        <ul class="pull-right dropdown-menu triger-swing-dp">
                                            <li onclick="$('.print').tblToExcel();"><a>Export as MS Excel File</a></li>
                                            <li><a id="pdf" href="#">Export as PDF File</a></li>
                                        </ul>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                            <form id="dataform" method="post" action="">
                            <table id="data-table-basic" class="table table-striped print">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Rentals</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = mysqli_query($connection, "SELECT * FROM landlords 
                                                                        WHERE Deleted = '0' ORDER BY IdLandlord DESC") or die(mysqli_error($connection));
                                $count = mysqli_num_rows($query);
                                if($count > 0){
                                    while($row = mysqli_fetch_array($query)){
                                        
                                ?>
                                    <tr>
                                        <td><input type="checkbox" name="data[]" value="<?php echo $row['IdLandlord']; ?>" /></td>
                                        <td><?php echo $row['FirstName']." ".$row['LastName']; ?></td>
                                        <td><?php echo $row['Street'].", ".$row['City'].", ".$row['Province'].", ".$row['Country']." ".$row['PostalCode']; ?></td>
                                        <td>2</td>
                                        <td style="color: #00c292;"><?php echo $row['Status']; ?></td>
                                        <td>
                                            <button type="button" data-toggle="modal" data-target="#view<?php echo $row['IdLandlord']; ?>" class="btn btn-primary notika-btn-primary"><i class="fa fa-eye"></i></button>
                                            <button type="button" data-toggle="modal" data-target="#edit<?php echo $row['IdLandlord']; ?>" class="btn btn-primary notika-btn-primary"><i class="fa fa-edit"></i></button>
                                            <button type="button" data-toggle="modal" data-target="#upload<?php echo $row['IdLandlord']; ?>" class="btn btn-primary notika-btn-primary"><i class="fa fa-photo"></i></button>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include "modals/addLandlord.php";
$query = mysqli_query($connection, "SELECT * FROM landlords 
        WHERE Deleted = '0' ORDER BY IdLandlord DESC") or die(mysqli_error($connection));
$count = mysqli_num_rows($query);
if($count > 0){
    while($row = mysqli_fetch_array($query)){
        include "modals/editLandlord.php";
        include "modals/uploadLandlord.php";
        include "modals/viewLandlord.php";
    }
}
?>
    <!-- Data Table area End-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2020 
. All rights reserved. Created by <a href="https://facebook.com/t4lks1ck">t4k1d0ng</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
	<!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  animation JS
		============================================ -->
    <script src="js/animation/animation-active.js"></script>
    <!-- dialog CSS
		============================================ -->
    <script src="js/dialog/sweetalert2.min.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
        <!-- bootstrap select JS
		============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <script src="js/jquery.tableToExcel.js"></script>
<script>
  (function ($) {
    "use strict";
        $('#delete-warning').on('click', function(){
		swal({   
			title: "Are you sure?",   
			text: "You will not be able to recover this landlord!",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonText: "Yes, delete it!",
		}).then(function(){
			swal("Deleted!", "Landlord has been deleted.", "success"
            ).then(function(){
                $("#dataform").attr('action', 'action/deleteLandlord.php');
                $("#dataform").submit();
            });
		});
	});
 })(jQuery); 
 
 $(function () {
        $('#pdf').click(function () {
            var pageTitle = 'Landlords',
                stylesheet = '<link rel="stylesheet" href="/css/print.table.css" type="text/css">',
                win = window.open('', 'Print', 'width=1000,height=700');
            win.document.write('<html><head><title>' + pageTitle + '</title>' +
                '<style>table, th, td {border: 1px solid black;text-transform: capitalize;}table tr td:first-child, table tr th:first-child,table tr td:last-child, table tr th:last-child{display: none;}' +
                'table{border-collapse: collapse;}th, td{padding: 10px; text-align: left;}th{height: 30px;background-color: #4CAF50;color: white;}</style>' +
                '</head><body>' + $('.print')[0].outerHTML + '</body></html>');
            win.document.close();
            win.print();
            win.close();
            return false;
        });
    });  
</script>
</body>

</html>