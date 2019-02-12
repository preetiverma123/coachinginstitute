<section class="applySection">
	<div class="container">
		<div class="apply-form">
             <form enctype="multipart/form-data" action="<?php echo site_url('addApplication'); ?>" method="post" name="apply" id="apply">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name" class="col-form-label"><?php echo $this->lang->line('name'); ?></label>
                        <input type="text" class="form-control" id="name" placeholder="<?php echo $this->lang->line('name'); ?>" name="name" required="required">
                        <div class="help-block"><?php echo form_error('name'); ?></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="fathers_name" class="col-form-label"><?php echo "Father's name"?></label>
                        <input type="text" class="form-control" id="fathers_name" placeholder="<?php echo $this->lang->line('father_name'); ?>" name="fathers_name" required="required">
                        <div class="help-block"><?php echo form_error('fathers_name'); ?></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="email" class="col-form-label"><?php echo $this->lang->line('email'); ?></label>
                        <input type="email" class="form-control" id="email" placeholder="<?php echo $this->lang->line('email'); ?>" name="email">
                        <div class="help-block"><?php echo form_error('email'); ?></div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="phone" class="col-form-label"><?php echo $this->lang->line('phone'); ?></label>
                        <input type="text" class="form-control" id="phone" placeholder="<?php echo $this->lang->line('phone'); ?>" name="phone" required="required">
                        <div class="help-block"><?php echo form_error('phone'); ?></div>
                    </div>
                </div>  
                <div class="form-row col-md-12">
                	<label for="course" class="col-form-label"><?php echo "Course"?></label>
                	<select class="form-control" name="course" required="required">
                        <option value="">Select Course</option>
                        <?php foreach($courses as $course){?>
					       <option value="<?php echo $course->id;?>"><?php echo $course->name;?></option>
					   <?php }?>
					</select>
                    <div class="help-block"><?php echo form_error('course'); ?></div>
                </div>
                  
                <button id="send" style="margin-left: 16px;" type="submit" class="btn btn-success"><?php echo $this->lang->line('submit'); ?></button>               
             <!--    <button type="submit" class="btn btn-primary btn-blue" style="margin-left: 16px;"><?php echo $this->lang->line('submit'); ?></button> -->
                
            </form>
        </div>
	</div>
</section>
<script type="text/javascript">
  $("#apply").validate();
 

 </script>