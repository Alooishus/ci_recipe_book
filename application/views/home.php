<div class="container main-container">
    <!-- Thumbnail Divider -->
    <div class="position-relative d-flex align-items-center pt-5 pb-2">
        <div class="flex-grow-1 border-top"></div>
        <span class="flex-shrink-1 mx-4 text-muted perm-marker">Recipes</span>
        <div class="flex-grow-1 border-top"></div>
    </div>
    <!-- End Divider -->
    <table id="table_id" class="display text-center">
    <thead>
        <tr class="text-center">
            <th>Title</th>
            <th>Categories</th>
            <th>Difficulty</th>
            <th>Time</th>
            <th>Creator</th>
        </tr>
    </thead>
    <tbody>
        <!-- foreach to list recipes in the table -->
        <?php foreach($recipes as $recipe): ?>
            <tr>
                <td class="view-recipe" id="<?php echo $recipe['id'] ?>"><a href=""><?php echo $recipe['title']; ?></a></td>
                <?php if(!empty($recipe['cats']))
                {
                    echo '<td class="text-center">';
                    foreach($recipe['cats'] as $category)
                    {
                        echo $category['category_name'].'<br>';
                    }
                    echo '</td>';
                }
                else
                {
                    echo '<td class="text-center">&times;</td>';
                }?>
                <td><?php echo $recipe['difficulty']; ?></td>
                <td><?php echo $recipe['total_time']; ?></td>
                <td><?php echo $recipe['user_name']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    
    
</div>
<script>
    // Need to add the configs for data table - mainly searchable columns.
    $(document).ready( function () {
        $('#table_id').DataTable();

        $('.view-recipe').on('click', function(e){
            e.preventDefault();
            let id = $(this).attr('id');
            console.log('ho');
            $.ajax({
            url:"<?php echo base_url().'pages/View_controller/index' ?>",
            method:'POST',
            data: {id, id},
            dataType: 'html'
            }).done(function( data ) {
                $('.main-container').html(data);
            })
        });

    } );
</script>