<style>
.view p{
    margin-bottom: -1px;
    color: #00c292;
    text-transform: capitalize;
}
</style>
                                <div class="modal fade" id="view<?php echo $row[0]; ?>" role="dialog">
                                    <div class="modal-dialog modal-large">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <img width="200px" src="img/data/landlords/<?php echo $row['Photo'];?>"/>
                                                </div>
                                                <div class="view col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <h3>Personal Information</h3>
                                                    <p><i class="fa fa-user"></i> &nbsp;&nbsp;&nbsp;<span><?php echo $row['FirstName']." ".$row['LastName']; ?></span></p>
                                                    <p><i class="fa fa-male"></i><i class="fa fa-female"></i>&nbsp;&nbsp;<span><?php echo $row['Gender']; ?></span></p>
                                                    <p><i class="fa fa-location-arrow"></i> &nbsp;&nbsp;&nbsp;<span><?php echo $row['Street'].", ".$row['City'].", ".$row['Province'].", ".$row['Country']." ".$row['PostalCode']; ?></span></p>
                                                    <p><i class="fa fa-phone"></i> &nbsp;&nbsp;&nbsp;<span><?php echo $row['Phone']; ?></span></p>
                                                    <p><i class="fa fa-at"></i> &nbsp;&nbsp;&nbsp;<span><?php echo $row['Email']; ?></span></p>
                                                    <br />
                                                    <h3>Offered Rentals</h3>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>