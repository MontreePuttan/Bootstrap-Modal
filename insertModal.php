<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&nbsp;</button>
                <h4 class="modal-title">Insert Data</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="insert-form">
                   
                    <label>Name</label>
                    <input type="hidden" id="id" name="id">
                    <input type="text" id="fname" name="fname" class="form-control" required/>
                    <label>Lastname</label>
                    <input type="text" id="lname" id="lname" class="form-control" required/>
                    <label>Email</label>
                    <input type="text" id="email" name="email" class="form-control" required/>
                    <label>Web</label>
                    <input type="text" id="web" name="web" class="form-control" required/>
                    <br>
                    <input type="submit" id="insert" class="btn btn-success"/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>    