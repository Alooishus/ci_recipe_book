<div class="container">
    <!-- Thumbnail Divider -->
    <div class="position-relative d-flex align-items-center py-3">
        <div class="flex-grow-1 border-top"></div>
        <span class="flex-shrink-1 mx-4 text-muted perm-marker">Thumbnail Details</span>
        <div class="flex-grow-1 border-top"></div>
    </div>
    <!-- End Divider -->
    <form action="">
    <div class="row align-items-center">
        <div class="col-sm-8 offset-lg-3 col-lg-6">
            <div class="input-group py-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Picture</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="photo" onchange="previewFile(this.id);" id="image0" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="thumbnail" id="thumbnailText" >Choose file</label>
                </div>
            </div>
        </div>
            <div class="col-lg-2">
                <div>
                    <img class="rounded" id="previewImage0" style="width:auto; max-height:100px;" src="<?= base_url() ?>/assets/icons/placeholder.jpg"alt="Placeholder">
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-12 col-lg-6 input-group py-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text input-group-text-sm" id="inputGroup-sizing">Title:</span>
                    </div>
                    <input type="text" class="form-control" name="recipe_name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing">
                </div>

                <div class="col-sm-12 col-lg-6 input-group py-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text">Difficulty:</label>
                    </div>
                    <select class="custom-select" name="difficulty">
                        <option selected disabled hidden></option>
                        <option value="Easy">Easy</option>
                        <option value="Medium">Medium</option>
                        <option value="Hard">Hard</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6 input-group py-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text">Hours:</label>
                    </div>
                    <select class="custom-select" name="hours">
                    <?php  for ($i = 0; $i < 49; $i++): ?>
                            <option value="<?= sprintf("%02d", $i) ?>"><?= sprintf("%02d", $i) ?></option>
                        <?php endfor ?>
                    </select>
                </div>

                <div class="col-sm-12 col-lg-6 input-group py-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text">Minutes:</label>
                    </div>
                    <select class="custom-select" name="minutes">
                        <?php  for ($i = 0; $i < 60; $i=$i+5): ?>
                            <option value="<?= sprintf("%02d", $i) ?>" <?= $i==30 ? 'selected' : '' ?>><?= sprintf("%02d", $i) ?></option>
                        <?php endfor ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div id="categoryLine">
        <div class="row justify-content-center" id="">
            <div class="col-10 col-lg-4 input-group py-2">
                <div class="input-group-prepend">
                    <label class="input-group-text">Category:</label>
                </div>
                <select class="custom-select" id="categorySelect" name="category[]">
                    <option selected disabled hidden></option>
                    <?php foreach($categories as $category): ?>
                        <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option> 
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-1">
                <span class="h1 delete-item" onclick="delete_cat_line(0)" aria-hidden="true">&times;</span>
            </div>
        </div>
    </div>
    <div class="row justify-content-center py-2">
        <div class="col-lg-2">
            <button type="button" class="btn btn-primary btn-sm" id="addCategory">Additional Category</button>
        </div>
    </div>
    <!-- Recipe Card Divider -->
    <div class="position-relative d-flex align-items-center pt-4 pb-3">
        <div class="flex-grow-1 border-top"></div>
        <span class="flex-shrink-1 mx-4 text-muted perm-marker">Recipe Card Details</span>
        <div class="flex-grow-1 border-top"></div>
    </div>
    <!-- End Divider -->
     <div class="row pb-5 mb-5">
        <div class="col">
            <div id="editor"></div>
        <div>
     </div>  
     <!-- Card Images Divider -->
    <div class="position-relative d-flex align-items-center pt-2 pb-3">
        <div class="flex-grow-1 border-top"></div>
        <span class="flex-shrink-1 mx-4 text-muted perm-marker">Recipe Page Images</span>
        <div class="flex-grow-1 border-top"></div>
    </div>
    <!-- End Divider -->
    
    <div class="row justify-content-center" id="previewContainer"></div>
    <div id="imageLine"></div>
    
    <div class="row justify-content-center py-2">
        <div class="col-lg-2">
            <button type="button" class="btn btn-primary btn-sm" id="addImage">Additional Images</button>
        </div>
    </div>
    <!-- Submit Button Divider -->
    <div class="position-relative d-flex align-items-center pt-2 pb-3">
        <div class="flex-grow-1 border-top"></div>
        <span class="flex-shrink-1 mx-4 text-muted perm-marker">Enter Recipe</span>
        <div class="flex-grow-1 border-top"></div>
    </div>
    <!-- End Divider -->
    <div class="row justify-content-center py-2">
    <button class="btn btn-success" id="finalize">Finalize</button>
                        </div>
    </form>            
</div>

<!-- Start Modal -->
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
<!-- End Modal -->

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
    theme: 'snow',
    modules: {
        'toolbar': [
          [{ 'font': [] }, { 'size': [] }],
          [ 'bold', 'italic', 'underline', 'strike' ],
          [{ 'color': [] }, { 'background': [] }],
          [{ 'script': 'super' }, { 'script': 'sub' }],
          [{ 'header': '1' }, { 'header': '2' }],
          [{ 'list': 'ordered' }, { 'list': 'bullet'}, { 'indent': '-1' }, { 'indent': '+1' }],
          [ 'link'],
          [ 'clean' ]
        ]
    }
  });
</script>

<script>
    $(document).ready(function(){
        $('#finalize').on('click', function(event){
            event.preventDefault();
            let html = $('#editor').children().html();

            console.log(html);
        })
        let cat_line = 1;
        let image_line = 1;
        $('#addCategory').click(function(){
            $('#categoryLine').append(`<div class="row justify-content-center" id="categoryLine${cat_line}">
            <div class="col-10 col-lg-4 input-group py-2">
                <div class="input-group-prepend">
                    <label class="input-group-text">Category:</label>
                </div>
                <select class="custom-select" name="category[]">
                    <option selected disabled hidden></option>
                    <option value="Easy">Easy</option>
                    <option value="Medium">Medium</option>
                    <option value="Hard">Hard</option>
                </select>
            </div>
            <div class="col-1">
                <span class="h1 delete-item" onclick="delete_cat_line(${cat_line})" aria-hidden="true">&times;</span>
            </div>
        </div>`);
        cat_line++;
        });
        $('#addImage').click(function(){
            $('#imageLine').append(`<div class="row justify-content-center align-items-center" id="imageLine${image_line}">
            <div class="col-10 col-lg-4 input-group py-2">
                <div class="input-group py-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon${image_line}" name="additional_images[]">Picture</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image${image_line}" onchange="previewFile(this.id);" id="image${image_line}" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="image${image_line}">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <span class="h1 delete-item" onclick="delete_image_line(${image_line})" aria-hidden="true">&times;</span>
            </div>
        </div>`);
        image_line++;
        });
    });

    $('#categoryModal').on('shown.bs.modal', function () {
        $('#addCategoryName').focus();
    }) 

    $(document).on('submit', '#category_form', function(event){
        event.preventDefault();
        var category_name = $('#addCategoryName').val();
        $.ajax({
            url:"<?php echo base_url().'Category_controller/index' ?>",
            method:'POST',
            data: {category_name, category_name},
            dataType: 'json'
        }).done(function( data ) {
            $('#categoryResultMsg').removeClass('d-none').addClass('d-block');
            if(data['status'] === 'success'){
                $('#categoryResultMsg').find('span').removeClass('text-danger').addClass('text-success').text(data['msg']);
                $('#categorySelect').append(`<option value="${data['insert_id']}">${data['category_name']}</option>`)
            }else{
                $('#categoryResultMsg').find('span').removeClass('text-success').addClass('text-danger').text(data['msg']);
            }
            $('#addCategoryName').val('');
        })
    });
    
</script>