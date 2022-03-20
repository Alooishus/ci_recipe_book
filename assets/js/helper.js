function previewFile(input){
    var file = $('#'+input).get(0).files[0];
    var count = input.match(/\d+/);
    $('#'+input).next('.custom-file-label').html(file.name);
    if(file){
        var reader = new FileReader();
        reader.onload = function(){
            if(input === 'image0'){
                $("#previewImage0").attr("src", reader.result);
            }else{
                $('#previewContainer').append(`<div class="col-2 d-flex flex-column justify-content-center" id="figure${count[0]}">
                <img class="rounded" id="previewImage${count[0]}" style="width:auto; max-height:100px;" src=""alt="Placeholder">
                <p class="text-center font-weight-bold font-italic">figure:${count[0]}</p>
                </div>`);
                $("#previewImage"+count[0]).attr("src", reader.result);
            }
        }
        reader.readAsDataURL(file);
    }
}

function delete_cat_line(id){
    $('#categoryLine'+id).remove();
}

function delete_image_line(id){
    $('#imageLine'+id).remove();
}