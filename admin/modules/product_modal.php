<!-- Edit Product -->
<div class="modal" id="editproduct<?php echo $row['productid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Përditso produktin</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="../admin/modules/editproduct.php?product=<?php echo $row['productid']; ?>" enctype="multipart/form-data">

                        <div class="row">
                            <div class="form-floating mb-3 p-1">
                                <input type="text" class="form-control" id="floatingInput1" value="<?php echo $row['productname']; ?>" name="pname">
                                <label for="floatingInput1">Emri i produktit</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-floating mb-3 p-1">
                                <select class="form-control" name="category">
                                    <option value="<?php echo $row['categoryid']; ?>"><?php echo $row['catname']; ?></option>
                                    <?php
                                    $sql = "select * from category where categoryid != '" . $row['categoryid'] . "'";
                                    $cquery = $conn->query($sql);

                                    while ($crow = $cquery->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $crow['categoryid']; ?>"><?php echo $crow['catname']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <label for="floatingInput2">Kategoria</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-floating mb-3 p-1">
                                <input type="text" class="form-control" id="floatingInput3" value="<?php echo $row['price']; ?>" name="price">
                                <label for="floatingInput3">Qmimi</label>
                            </div>
                        </div>
                        <div class="row">
                            <label for="formFile" class="form-label">Ngarko foton e ushqimit</label>
                            <input class="form-control" type="file" id="formFile" name="photo">
                        </div>

                       
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light border" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Mbylle</button>
                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Ruaj</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Delete Product -->
<div class="modal" id="deleteproduct<?php echo $row['productid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Fshi produktin</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <h6 class="text-center">A je i sigurtë qe deshiron ta heqesh përgjithmonë produktin <?php echo $row['productname']; ?> ?</h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light border" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Mbylle</button>
                <a href="../admin/modules/delete_product.php?product=<?php echo $row['productid']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Po</a>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>