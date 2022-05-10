<!-- Add Product -->
<div class="modal" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title" id="myModalLabel">Shtoni nje produkt</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="../admin/modules/addproduct.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-floating mb-3 p-1">
                                <input type="text" class="form-control" id="floatingInput1" name="pname">
                                <label for="floatingInput1">Emri i produktit</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-floating mb-3 p-1">
                                <select class="form-control" name="category">
                                    <?php
                                    $sql = "select * from category order by categoryid asc";
                                    $query = $conn->query($sql);
                                    while ($row = $query->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $row['categoryid']; ?>"><?php echo $row['catname']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <label for="floatingInput2">Kategoria</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-floating mb-3 p-1">
                                <input type="text" class="form-control" id="floatingInput3" name="price">
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
                <button type="button" class="btn btn-light border border-dark" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Mbylle</button>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>Ruaje</button>
                </form>
            </div>
        </div>
    </div>
</div>