
<div id="add-time-popup" class="<?php echo (isset($id) ? 'show': 'hide'); ?>">
    <div class="modal-content">
        <button onclick="toggleVisibility('add-time-popup')" class="close"> Close </button>
        <form action="" method="post" enctype="multipart/form-data">
            <!--Course-->
            <label for="files">Input Time</label>
            <input type="time" name="add_time_value">
            <br>
            <input type="submit" value="Add Time" name="add_time_btn">
        </form>
    </div>
</div>
<button type="submit" onclick="toggleVisibility('add-time-popup')" class="new-post-btn"> Add New Time </button>
