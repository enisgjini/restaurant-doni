<!-- Modal -->

<div class="modal fade" id="editcategory<?php echo $row['categoryid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ndrysho Kategorin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="../admin/modules/editcategory.php?category=<?php echo $row['categoryid']; ?>" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Emri Kategoris:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php echo $row['catname']; ?>" name="cname">
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Delete Category -->
<div class="modal fade" id="deletecategory<?php echo $row['categoryid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Fshije Kategorin</h4>
                </center>
            </div>
            <div class="modal-body">
                <h3 class="text-center"><?php echo $row['catname']; ?></h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Mbylle</button>
                <a href="delete_category.php?category=<?php echo $row['categoryid']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Po</a>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>






















<!-- Edit Product -->