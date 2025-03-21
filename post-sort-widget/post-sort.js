jQuery(document).ready(function($) {
    // Handler for changing selection in a drop-down list
    $('#sort-options').change(function() {
        let sortOption = $(this).val();

        // Perform an AJAX request only if a date or title is selected
        if (sortOption) {
            $.post(ajax_object.ajax_url, { action: 'sort_posts', sort_option: sortOption }, function(response) {
                $('#posts-container').html(response);
            });
        }
    });
});

