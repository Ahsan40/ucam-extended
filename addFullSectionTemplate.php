
<div id="add-full-course-popup" class="<?php echo (isset($id) ? 'show': 'hide'); ?>">
    <div class="modal-content">
        <button onclick="toggleVisibility('add-full-course-popup')" class="close"> Close </button>
        <form action="" method="post" enctype="multipart/form-data">
            <!--Course-->
            <label for="files">Select A Course</label>
            <select>
                <?php while ($line = mysqli_fetch_assoc(fetchAllCoursesEntity($conn))){ ?>
                    <option name="add_course_name" value="<?php echo $line['c_id'];?>">
                        <?php echo $line['code']." ".$line['name'];?>
                    </option>
                <?php } ?>
            </select>

            <!--Section-->
            <label for="files">Select A Section</label>
            <select>
                <?php while ($line = mysqli_fetch_assoc(fetchAllSectionEntity($conn))){ ?>
                    <option name="add_section_name" value="<?php echo $line['id'];?>">
                        <?php echo $line['name'].". ".$line['faculty'];?>
                    </option>
                <?php } ?>
            </select>

            <!--Time-->
            <label for="files">Select A Time</label>
            <select>
                <?php while ($line = mysqli_fetch_assoc(fetchAllTimeEntity($conn))){ ?>
                    <option name="add_time_name" value="<?php echo $line['id'];?>">
                        <?php echo $line['time'];?>
                    </option>
                <?php } ?>
            </select>
            <br>
            <input type="submit" value="Add Section" name="add_full_section_btn">
        </form>
    </div>
</div>
<button type="submit" onclick="toggleVisibility('add-full-course-popup')" class="new-post-btn"> Add New Course </button>
