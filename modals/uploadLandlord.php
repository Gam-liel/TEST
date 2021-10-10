<style>
.table-form tr td{
    height: 20px;
    padding: 5px;
    text-align: right;
}
.table-form tr td label{
    margin-bottom: 15px;
}
.table-form tr td input{
    width: 300px;
}
</style>
                                <div class="modal fade" id="upload<?php echo $row[0]; ?>" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="action/uploadLandlord.php" method="post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <h2>Upload Photo for <span style="text-transform: capitalize;"><?php echo $row['FirstName']." ".$row['LastName']; ?></span></h2>
                                                <table class="table-form">
                                                    <tr>
                                                        <td><label>Add Photo&nbsp;&nbsp;</label></td>
                                                        <td>
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <input type="file" name="uploadImage" class="form-control" placeholder="Select file"/>
                                                                    <input type="hidden" name="id" value="<?php echo $row[0]; ?>" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default">Save changes</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>