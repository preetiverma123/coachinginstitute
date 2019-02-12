<section class="applySection">
	<div class="container">
		<div class="apply-form">
            <form action="<?php echo site_url('contact'); ?>" method="post" name="contact" id="contact">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="first_name" class="col-form-label"><?php echo $this->lang->line('name'); ?></label>
                        <input type="text" class="form-control" id="name" placeholder="<?php echo $this->lang->line('name'); ?>" name="name" required="required">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="first_name" class="col-form-label"><?php echo "father's name"?></label>
                        <input type="text" class="form-control" id="father_name" placeholder="<?php echo $this->lang->line('father_name'); ?>" name="father_name" required="required">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="email" class="col-form-label"><?php echo $this->lang->line('email'); ?></label>
                        <input type="email" class="form-control" id="email" placeholder="<?php echo $this->lang->line('email'); ?>" name="email" required="required">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="phone" class="col-form-label"><?php echo $this->lang->line('phone'); ?></label>
                        <input type="text" class="form-control" id="phone" placeholder="<?php echo $this->lang->line('phone'); ?>" name="phone">
                    </div>
                </div>  
                <div class="form-row col-md-12">
                	<label for="course" class="col-form-label"><?php echo "course"?></label>
                	<select class="form-control">
					  <option value="jee">JEE</option>
					  <option value="advance">JEE(Main+advance)</option>
					  <option value="prefoundation">Prefoundation</option>
					  <option value="foundation">Foundation</option>
					</select>
                </div>
                <!-- <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="comment"><?php echo $this->lang->line('comment'); ?></label>
                        <textarea class="form-control" id="comment" rows="5" name="comment" required="required" placeholder="<?php echo $this->lang->line('comment'); ?>"></textarea>
                    </div>                           
                </div>     -->                       
                <button type="submit" class="btn btn-primary btn-blue" style="margin-left: 16px;"><?php echo $this->lang->line('submit'); ?></button>
                
            </form>
        </div>
	</div>
</section>