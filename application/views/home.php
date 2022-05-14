<div class="container">
    <!-- Thumbnail Divider -->
    <div class="position-relative d-flex align-items-center pt-5 pb-2">
        <div class="flex-grow-1 border-top"></div>
        <span class="flex-shrink-1 mx-4 text-muted perm-marker">Recipes</span>
        <div class="flex-grow-1 border-top"></div>
    </div>
    <!-- End Divider -->
    <table id="table_id" class="display">
    <thead>
        <tr>
            <!-- <th>Image</th> should I add images to the table -->
            <th>Title</th>
            <th>Difficulty</th>
            <th>Time</th>
            <!-- <th>Categories </th>  need to add categories to table -->
            <th>Creator</th>
        </tr>
    </thead>
    <tbody>
        <!-- foreach to list recipes in the table -->
        <?php foreach($recipes as $recipe): ?>
            <tr>
                <td><?php echo $recipe['title']; ?></td>
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
    } );
</script>