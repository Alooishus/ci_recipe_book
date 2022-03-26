<div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" id="category_form">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="categoryModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="text-center" id="categoryResultMsg">
            <span>Enter categories one at a time.</span>
            <hr>
        </div>
        <input type="text" class="form-control" id="addCategoryName" name="addCategoryName" placeholder="Enter Category Name..." autofocus>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="action" value="add" class="btn btn-primary">Submit</button>
    </div>
    </div>
    </form>
  </div>
</div>
