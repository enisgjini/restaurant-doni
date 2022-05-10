 <div class="modal" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="myModalLabel">Shtoni nje kategori te re</h4>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
             </div>
             <div class="modal-body">
                 <div class="container-fluid">
                     <form method="POST" action="../admin/modules/addcategory.php" enctype="multipart/form-data">
                         <div class="form-group" style="margin-top:10px;">
                             <div class="row">
                                 <div class="col-md-3" style="margin-top:7px;">
                                     <label class="control-label">Emri i kategoris</label>
                                 </div>
                                 <div class="col-md-9">
                                     <input type="text" class="form-control" name="cname" required>
                                 </div>
                             </div>
                         </div>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-light border" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Mbylle</button>
                 <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>Ruaje</button>
                 </form>
             </div>
         </div>
     </div>
 </div>



 <!-- Modal -->

 <div class="modal" id="editcategory<?php echo $row['categoryid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                 <button type="button" class="btn btn-light border" data-bs-dismiss="modal">Mbylle</button>
                 <button type="submit" class="btn btn-success">Ruaj</button>
                 </form>
             </div>
         </div>
     </div>
 </div>


 <!-- Delete Category -->
 <div class="modal" id="deletecategory<?php echo $row['categoryid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
             <h4 class="modal-title" id="myModalLabel">Fshije Kategorin</h4>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                 
                     
                 
             </div>
             <div class="modal-body">
                 <h6 class="text-center">A je i sigurtë qe deshiron ta heqesh përgjithmonë kategorinë <?php echo $row['catname']; ?> ?</h6>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-light border" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Mbylle</button>
                 <a href="../admin/modules/delete_category.php?category=<?php echo $row['categoryid']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Po</a>
                 </form>
             </div>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>






















 <!-- Edit Product -->