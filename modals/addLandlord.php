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
                                <div class="modal fade" id="add" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="action/addLandlord.php" method="post">
                                            <div class="modal-body">
                                                <h2>Add Landlord</h2>
                                                <table class="table-form">
                                                    <tr>
                                                        <td><label>First Name&nbsp;&nbsp;</label></td>
                                                        <td>
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <input name="firstname" type="text" class="form-control" required=""/>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><label>Middle Name&nbsp;&nbsp;</label></td>
                                                        <td>
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <input name="middlename" type="text" class="form-control" required=""/>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><label>Last Name&nbsp;&nbsp;</label></td>
                                                        <td>
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <input name="lastname" type="text" class="form-control" required=""/>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><label>Gender&nbsp;&nbsp;</label></td>
                                                        <td>
                                                            <div class="bootstrap-select fm-cmp-mg">
                                                                <select name="gender" class="selectpicker">
                                                                    <option></option>
                         											<option value="male">Male</option>
                         											<option value="female">Female</option>
                          										</select>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" style="text-align: left; font-weight: lighter;"><label>Address&nbsp;&nbsp;</label></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label>Street/Barangay&nbsp;&nbsp;</label></td>
                                                        <td>
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <input name="street" type="text" class="form-control" required=""/>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><label>City&nbsp;&nbsp;</label></td>
                                                        <td>
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <input name="city" type="text" class="form-control" required=""/>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><label>Province&nbsp;&nbsp;</label></td>
                                                        <td>
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <input name="province" type="text" class="form-control" required=""/>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><label>Country&nbsp;&nbsp;</label></td>
                                                        <td>
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <input name="country" type="text" class="form-control" required="" value="Philippines"/>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><label>Postal Code&nbsp;&nbsp;</label></td>
                                                        <td>
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <input name="postalcode" type="text" class="form-control" required=""/>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><label>Phone&nbsp;&nbsp;</label></td>
                                                        <td>
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <input name="phone" type="number" class="form-control" required=""/>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><label>Email&nbsp;&nbsp;</label></td>
                                                        <td>
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-st">
                                                                    <input name="email" type="email" class="form-control" required=""/>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default">Add Landlord</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>