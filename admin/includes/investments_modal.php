<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Status</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="investments_edit.php">
                <input type="hidden" class="invid" name="id">
                <div class="form-group">
                    <label for="type" class="col-sm-1 control-label">Status</label>

                  <div class="col-sm-5">
                    <select class="form-control" id="invest_status" name="status" required>
                      <option value="">- Select -</option>
                      <option value="in progress">- In Progress -</option>
                      <option value="completed">- Completed -</option>
                      <option value="cancelled">- Cancelled -</option>
                    </select>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>    