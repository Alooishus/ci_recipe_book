<div class="container">
    <!-- Thumbnail Divider -->
    <div class="position-relative d-flex align-items-center py-3">
        <div class="flex-grow-1 border-top"></div>
        <span class="flex-shrink-1 mx-4 text-muted perm-marker">Recipe Details</span>
        <div class="flex-grow-1 border-top"></div>
    </div>
    <!-- End Divider -->
    <?php //print_arr($this->session); ?>
    <form method="post" id="uploadForm" enctype="multipart/form-data">
        <!-- <div class="row justify-content-center">
            <div class="col-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="thumbnail-image" id="thumbnail-image" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 input-group py-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text input-group-text-sm" id="inputGroup-sizing">Title:</span>
                        </div>
                        <input type="text" class="form-control" name="recipe_name" id="recipe_name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing">
                    </div>

                    <div class="col-sm-12 col-lg-6 input-group py-2">
                        <div class="input-group-prepend">
                            <label class="input-group-text">Difficulty:</label>
                        </div>
                        <select class="custom-select" name="difficulty" id="difficulty">
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
                        <select class="custom-select" name="hours" id="hours">
                        <?php  for ($i = 0; $i < 49; $i++): ?>
                                <option value="<?= sprintf("%02d", $i) ?>"><?= sprintf("%02d", $i) ?></option>
                            <?php endfor ?>
                        </select>
                    </div>

                    <div class="col-sm-12 col-lg-6 input-group py-2">
                        <div class="input-group-prepend">
                            <label class="input-group-text">Minutes:</label>
                        </div>
                        <select class="custom-select" name="minutes" id="minutes">
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
            <span class="flex-shrink-1 mx-4 text-muted perm-marker">Recipe Description/Method</span>
            <div class="flex-grow-1 border-top"></div>
        </div>
        <!-- End Divider -->
        <div class="row pb-5 mb-5">
            <div class="col">
                <div id="editor" name="editor"></div>
            <div>
        </div>  
        <!-- Recipe Page Images Divider -->
        <!-- <div class="position-relative d-flex align-items-center pt-2 pb-3">
            <div class="flex-grow-1 border-top"></div>
            <span class="flex-shrink-1 mx-4 text-muted perm-marker">Recipe Page Images</span>
            <div class="flex-grow-1 border-top"></div>
        </div> -->
        <!-- End Divider -->
        
       <!--  <div class="row justify-content-center" id="uploaded_images">
            <div class="col-lg-2">
                <div>
                    <img class="rounded" id="previewImage0" style="width:auto; max-height:100px;" src="<?= base_url() ?>/assets/icons/placeholder.jpg"alt="Placeholder">
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6">
                <div class="input-group py-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01"">Picture</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="files[]" id="files" multiple aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="thumbnail" id="thumbnailText" >Choose file</label>
                    </div>
                    <div class="pl-2">
                        <button class="btn btn-primary" id="uploadImages">Upload</button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Submit Button Divider -->
        <div class="position-relative d-flex align-items-center pt-2 pb-3">
            <div class="flex-grow-1 border-top"></div>
            <span class="flex-shrink-1 mx-4 text-muted perm-marker">Enter Recipe</span>
            <div class="flex-grow-1 border-top"></div>
        </div>
        <!-- End Divider -->
        <div class="row justify-content-center py-2">
            <button class="btn btn-success" type="submit" id="finalize">Finalize</button>
        </div>
    </form>            
</div>

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
        // show file name in custom file input
        $('#thumbnail-image').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
        // Insert recipe
        $("#theform").on("submit", function () {
                var hvalue = $('.ql-editor').html();
                $(this).append("<textarea name='content' style='display:none'>"+hvalue+"</textarea>");
            });
        $('#uploadForm').on('submit',function(e){
            e.preventDefault();
            let details = quill.root.innerHTML;
            $(this).append("<textarea name='description' style='display:none'>"+details+"</textarea>");
           $.ajax({
                url:"<?php echo base_url().'api/Insert_api/create' ?>",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success:function(data){
                    alert(data);
                }
            });
           

        });

        

        let cat_line = 1;
        $('#addCategory').click(function(){
            $('#categoryLine').append(`<div class="row justify-content-center" id="categoryLine${cat_line}">
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
                <span class="h1 delete-item" onclick="delete_cat_line(${cat_line})" aria-hidden="true">&times;</span>
            </div>
        </div>`);
        cat_line++;
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