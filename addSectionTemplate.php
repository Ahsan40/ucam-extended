
<div id="add-section-popup" class="<?php echo (isset($id) ? 'show': 'hide'); ?>">
    <div class="modal-content">
        <button onclick="toggleVisibility('add-section-popup')" class="close"> Close </button>
        <form action="" method="post" enctype="multipart/form-data">
            <!--Course-->
            <label for="add_section_name">Section Name</label>
            <input type="text" name="add_section_name">
            <label for="add_section_faculty">Faculty Name</label>
            <input type="text" name="add_section_faculty">
            <br>
            <input type="submit" value="Add Section" name="add_section_btn">
        </form>
    </div>
</div>
<button type="submit" onclick="toggleVisibility('add-section-popup')" class="new-post-btn"> Add New Section </button>
