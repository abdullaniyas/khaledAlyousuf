<?php include 'header.php'; ?>

    <div class="container margin-top-100">
        <div class="pull-left col-xs-12">
            <div class="col-xs-4 col-md-offset-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Lubricants</button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add New Lubricants</h4>
                  </div>
                    <form class="form-inline">
                        <div class="modal-body">
                            <table class="table">
                                <tr class="form-group">
                                    <td width=250><label for="exampleInputName1">Name Of the Product : </label></td>
                                    <td><input type="text" class="form-control" id="exampleInputName1" placeholder="Name Of the Product"></td>
                                </tr> 
                                <tr class="form-group">
                                    <td width=250><label for="exampleInputName2">Name Of the Product ( Arabic ) : </label></td>
                                    <td><input type="text" class="form-control" id="exampleInputName2" placeholder="Name Of the Product"></td>
                                </tr> 
                                <tr class="form-group">
                                    <td width=250><label for="exampleInputFile">Select the File : </label></td>
                                    <td><input type="file" id="exampleInputFile"></td>
                                </tr>
                                <tr class="form-group">
                                    <td width=250></td>
                                    <td>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
        <div class="pull-left col-xs-12">
            
        </div>
      

    </div> <!-- /container -->
    
    
<?php include 'footer.php'; ?>