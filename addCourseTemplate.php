
<div id="add-course-popup" class="<?php echo (isset($id) ? 'show': 'hide'); ?>">
    <div class="modal-content">
        <button onclick="toggleVisibility('add-course-popup')" class="close"> Close </button>
        <form action="" method="post" enctype="multipart/form-data">
            <!--Course-->
            <label for="add_course_name">Course Name</label>
            <input type="text" name="add_course_name">

            <label for="add_course_code">Course Code</label>
            <input type="text" name="add_course_code">

            <label for="add_course_credit">Course Credit</label>
            <input type="text" name="add_course_credit">
            <br>
            <input type="submit" value="Add Course" name="add_course_btn">
        </form>
    </div>
</div>
<button type="submit" onclick="toggleVisibility('add-course-popup')" class="new-post-btn"> Add New Course </button>
