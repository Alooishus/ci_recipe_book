<div class="container">
    <!-- Divider -->
    <div class="position-relative d-flex align-items-center py-3">
        <div class="flex-grow-1 border-top"></div>
        <span class="flex-shrink-1 mx-4 text-muted perm-marker">Thumbnail Details</span>
        <div class="flex-grow-1 border-top"></div>
    </div>
    <!-- End Divider -->
    <div class="row">
        <div class="col-sm-12 offset-lg-3 col-lg-6">
            <div class="input-group py-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Picture</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="thumbnail" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
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
    <!-- Divider -->
    <div class="position-relative d-flex align-items-center pt-4 pb-3">
        <div class="flex-grow-1 border-top"></div>
        <span class="flex-shrink-1 mx-4 text-muted perm-marker">Recipe Card Details</span>
        <div class="flex-grow-1 border-top"></div>
    </div>
    <!-- End Divider -->
    <div id="ingredientLine">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-4 input-group py-2">
                <div class="input-group-prepend">
                    <label class="input-group-text">Ingredient:</label>
                </div>
                <select class="custom-select" name="ingredient[]">
                    <option selected disabled hidden></option>
                    <option value="Easy">Easy</option>
                    <option value="Medium">Medium</option>
                    <option value="Hard">Hard</option>
                </select>
            </div>
            <div class="col-sm-12 col-lg-3 input-group py-2">
                <div class="input-group-prepend">
                    <span class="input-group-text input-group-text-sm" id="inputGroup-sizing">Quantity:</span>
                </div>
                <input type="text" class="form-control" name="quantity[]" aria-label="Sizing example input" aria-describedby="inputGroup-sizing">
            </div>
            <div class="col-sm-12 col-lg-3 input-group py-2">
                <div class="input-group-prepend">
                    <label class="input-group-text">Measurement:</label>
                </div>
                <select class="custom-select" name="unit[]">
                    <option selected disabled hidden></option>
                    <option value="Easy">Easy</option>
                    <option value="Medium">Medium</option>
                    <option value="Hard">Hard</option>
                </select>
            </div>
            <div class="col-lg-1 d-none d-lg-block">
                X
            </div>
        </div>
    </div>
    <div class="row justify-content-center py-2">
        <div class="col-lg-2">
            <button class="btn btn-primary btn-sm" id="addIngredient">Additional Ingredient</button>
        </div>
    </div>
        
                
</div>
<script>
    $(document).ready(function(){
        $('#addIngredient').click(function(){
            $('#ingredientLine').append(`<div class="row justify-content-center">
            <div class="col-sm-12 col-lg-4 input-group py-2">
                <div class="input-group-prepend">
                    <label class="input-group-text">Ingredient:</label>
                </div>
                <select class="custom-select" name="ingredient[]">
                    <option selected disabled hidden></option>
                    <option value="Easy">Easy</option>
                    <option value="Medium">Medium</option>
                    <option value="Hard">Hard</option>
                </select>
            </div>
            <div class="col-sm-12 col-lg-3 input-group py-2">
                <div class="input-group-prepend">
                    <span class="input-group-text input-group-text-sm" id="inputGroup-sizing">Quantity:</span>
                </div>
                <input type="text" class="form-control" name="quantity[]" aria-label="Sizing example input" aria-describedby="inputGroup-sizing">
            </div>
            <div class="col-sm-12 col-lg-3 input-group py-2">
                <div class="input-group-prepend">
                    <label class="input-group-text">Measurement:</label>
                </div>
                <select class="custom-select" name="unit[]">
                    <option selected disabled hidden></option>
                    <option value="Easy">Easy</option>
                    <option value="Medium">Medium</option>
                    <option value="Hard">Hard</option>
                </select>
            </div>
        </div>`);
        });
    });
</script>