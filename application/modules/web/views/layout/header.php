
<header id="header">
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 header-top">
                    <p>
                        <a href="mailto:<?php echo $settings->email; ?>"><i class="fa fa-envelope"></i> <?php echo $settings->email; ?></a>
                        <a href="tel:<?php echo $settings->phone; ?>"><i class="fa fa-phone"></i> <?php echo $settings->phone; ?></a>
                    </p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">                            
                    <!-- <div class="top-menu">
                        <ul>
                            <li><a href="<?php echo site_url('admission'); ?>"><?php echo $this->lang->line('admission'); ?></a></li>
                            <li>|</li>
                            <?php if (logged_in_user_id()) { ?>       
                            <li><a href="<?php echo site_url('dashboard'); ?>"><?php echo $this->lang->line('dashboard'); ?></a></li>
                            <li>|</li>
                            <li><a href="<?php echo site_url('auth/logout'); ?>"><?php echo $this->lang->line('logout'); ?></a></li>
                            <?php }else{ ?>

                            <li><a href="<?php echo site_url('login'); ?>"><?php echo $this->lang->line('login'); ?></a></li>

                            <?php } ?>
                        </ul>
                    </div> -->
                    <div class="top-menu">
                        <ul>
                            <li><a href="#careerModal" data-toggle="modal">Career</a></li>
                            <li>|</li>
                            <li><a href="<?php echo site_url('apply-online'); ?>">Apply Online</a></li>
                            <li>|</li>
                            <?php if (logged_in_user_id()) { ?>       
                            <li><a href="<?php echo site_url('dashboard'); ?>"><?php echo $this->lang->line('dashboard'); ?></a></li>
                            <li>|</li>
                            <li><a href="<?php echo site_url('auth/logout'); ?>"><?php echo $this->lang->line('logout'); ?></a></li>
                            <?php }else{ ?>

                            <li><a href="<?php echo site_url('login'); ?>"><?php echo $this->lang->line('login'); ?></a></li>

                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- open career modal -->
    <div class="modal fade career-modal" id="careerModal" role="dialog">
        <div class="modal-dialog">
           
            <!-- Modal content-->
            <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="career-modal-head">
                        <img src="<?php echo UPLOAD_PATH; ?>/logo/<?php echo $settings->logo;?>" alt="" />
                        <h3>Origin Career Institute</h3>
                    </div>
                    
                </div>
                <div class="career-form-modal">
                    <form enctype="multipart/form-data" action="<?php echo site_url('career'); ?>" method="post" name="career" id="career">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name" class="col-form-label"><?php echo $this->lang->line('name'); ?></label><span class="required" style="color: red">*</span>
                                <input type="text" class="form-control" id="name" placeholder="<?php echo $this->lang->line('name'); ?>" name="name">
                                 <div class="help-block"><?php echo form_error('name'); ?></div>
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="email" class="col-form-label"><?php echo $this->lang->line('email'); ?></label> 
                                <input type="email" class="form-control" id="email" placeholder="<?php echo $this->lang->line('email'); ?>" name="email">
                                <div class="help-block"><?php echo form_error('email'); ?></div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="phone" class="col-form-label"><?php echo $this->lang->line('phone'); ?></label> <span class="required" style="color: red">*</span>
                                <input type="text" class="form-control" id="phone" placeholder="<?php echo $this->lang->line('phone'); ?>" name="phone">
                                <div class="help-block"><?php echo form_error('phone'); ?></div>
                            </div>
                        </div>  
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <div class="btn btn-default btn-file fileUpload">
                                <i class="fa fa-paperclip"></i> <?php echo $this->lang->line('upload'); ?>
                                <input  class="form-control col-md-7 col-xs-12"  name="resume"  id="resume" type="file" >
                              </div>
                              <div class="text-info"><?php echo $this->lang->line('valid_file_format_doc'); ?></div>
                              <div class="help-block"><?php echo form_error('resume'); ?></div>
                            </div>                           
                        </div>  
                        <button id="send" type="submit" class="btn btn-success"><?php echo $this->lang->line('submit'); ?></button>                         
                        <!-- <button type="submit" class="btn btn-primary btn-blue" style="margin-left: 16px;"><?php echo $this->lang->line('submit'); ?></button> -->
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="header-area d-flex align-items-center">
        <div class="container-fluid pos">
            <div class="row">
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="<?php echo site_url(); ?>"><img src="<?php echo UPLOAD_PATH; ?>/logo/<?php echo $settings->logo;?>" alt="" />
                            <!-- <a><span>B</span>al <span>V</span>idya <span>M</span>andir</a> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 static">
                    <div class="main-menu">
                      <!--   <nav>
                            <ul class="mainmenu" id="mainmenu">
                                <li class="active"><a href="<?php echo site_url(); ?>" ><?php echo $this->lang->line('home'); ?></a></li>
                                <li><a href="#" class="hidemenu"><?php echo $this->lang->line('announcement'); ?> <i class="fa fa-caret-down"></i></a>                                       
                                    <ul class="submenu">
                                        <li><a href="<?php echo site_url('news'); ?>"><?php echo $this->lang->line('news'); ?></a></li>
                                        <li><a href="<?php echo site_url('notice'); ?>"><?php echo $this->lang->line('notice'); ?></a></li>
                                        <li><a href="<?php echo site_url('holiday'); ?>"><?php echo $this->lang->line('holiday'); ?></a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo site_url('about'); ?>"><?php echo $this->lang->line('about'); ?></a></li>
                                <li><a href="<?php echo site_url('events'); ?>"><?php echo $this->lang->line('event'); ?></a></li>
                                <li><a href="<?php echo site_url('galleries'); ?>"><?php echo $this->lang->line('gallery'); ?></a></li>
                                <li><a href="<?php echo site_url('teachers'); ?>"><?php echo $this->lang->line('teacher'); ?></a></li>
                                <li><a href="<?php echo site_url('staff'); ?>"><?php echo $this->lang->line('staff'); ?></a></li>
                             
                                <li><a href="<?php echo site_url('contact'); ?>"><?php echo $this->lang->line('contact_us'); ?></a></li>
                                
                            </ul>
                            <ul class="mainmenu-toggle" id="mainmenu-toggle">
                                <li class="manutoggle"><a href="javascript:void(0);" onclick="toggleMenu()"><i class="fa fa-bars"></i></a></li>
                            </ul>
                        </nav> -->
                        <nav>
                            <ul class="mainmenu" id="mainmenu">
                                <li class="active"><a href="<?php echo site_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
                                <li><a href="javascript:void(0);" class="hidemenu"><?php echo $this->lang->line('announcement'); ?> <i class="fa fa-caret-down"></i></a>                                       
                                    <ul class="submenu">
                                        <li><a href="<?php echo site_url('news'); ?>"><?php echo $this->lang->line('news'); ?></a></li>
                                        <li><a href="<?php echo site_url('notice'); ?>"><?php echo $this->lang->line('notice'); ?></a></li>
                                        <li><a href="<?php echo site_url('holiday'); ?>"><?php echo $this->lang->line('holiday'); ?></a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="javascript:void(0);"><?php echo $this->lang->line('about'); ?></a></li> -->
                                <!-- about -->
                                <li><a href="javascript:void(0);" class="hidemenu">About Us <i class="fa fa-caret-down"></i></a>                                       
                                    <ul class="submenu">
                                        <li><a href="<?php echo site_url('about/origin'); ?>">Origin</a></li>
                                        <li><a href="<?php echo site_url('about/director-message'); ?>">Director's Message</a></li>
                                        <li><a href="<?php echo site_url('about/success-story'); ?>">Success Story</a></li>
                                        <li><a href="<?php echo site_url('about/why-origin'); ?>">Why Origin</a></li>
                                    </ul>
                                </li>
                                <!-- end about -->
                                 <li class="courseMenu"><a href="<?php echo site_url('courses'); ?>" class="hidemenu">Course <i class="fa fa-caret-down"></i></a>                                       
                                    <ul class="submenu submenu-course clearfix">
                                        <li class="inline-items-menu"><a href="javascript:void(0);" class="course-dropdown">Target Course</a>

                                            <ul class="course-dropdown-sub">
                                                <?php foreach($courses as $course){?>
                                                    <?php if($course->type=='target'){ ?>
                                                    <li><a href="javascript:void(0);"><?php echo $course->name;?></a></li>
                                                   <!--  <li><a href="javascript:void(0);">JEE (Mains)</a></li>
                                                    <li><a href="javascript:void(0);">NEET/AIIMS/JIPMER</a></li> -->
                                                     <?php }?>
                                                <?php }?>
                                            </ul>
                                        </li class="inline-items-menu">
                                        <li class="inline-items-menu"><a href="javascript:void(0);" class="course-dropdown">Academic Course</a>
                                            <ul class="course-dropdown-sub">
                                                 <?php foreach($courses as $course){?>
                                                    <?php if($course->type=='academic'){ ?>
                                                    <li><a href="javascript:void(0);"><?php echo $course->name;?></a></li>
                                                   <!--  <li><a href="javascript:void(0);">JEE (Mains)</a></li>
                                                    <li><a href="javascript:void(0);">NEET/AIIMS/JIPMER</a></li> -->
                                                     <?php }?>
                                                <?php }?>
                                                
                                            </ul>
                                        </li>
                                        <li class="inline-items-menu"><a href="javascript:void(0);" class="course-dropdown">Special Course</a>
                                            <ul class="course-dropdown-sub">
                                                 <?php foreach($courses as $course){?>
                                                    <?php if($course->type=='special'){ ?>
                                                    <li><a href="javascript:void(0);"><?php echo $course->name;?></a></li>
                                                   <!--  <li><a href="javascript:void(0);">JEE (Mains)</a></li>
                                                    <li><a href="javascript:void(0);">NEET/AIIMS/JIPMER</a></li> -->
                                                     <?php }?>
                                                <?php }?>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                               <!--  <li><a href="<?php echo site_url('competition-results'); ?>"><?php echo $this->lang->line('competition-results'); ?></a></li> -->
                                <li><a href="<?php echo 'competition-results'?>">Results</a></li>
                                <!-- <li><a href="javascript:void(0);"><?php echo $this->lang->line('teacher'); ?></a></li>
                                <li><a href="javascript:void(0);"><?php echo $this->lang->line('staff'); ?></a></li> -->
                               
                                <li><a href="<?php echo site_url('contact'); ?>"><?php echo $this->lang->line('contact_us'); ?></a></li>
                                
                            </ul>
                            <ul class="mainmenu-toggle" id="mainmenu-toggle">
                                <li class="manutoggle"><a href="javascript:void(0);" onclick="toggleMenu()"><i class="fa fa-bars"></i></a></li>
                            </ul>
                        </nav>
                    </div>

                    <script type="text/javascript">

                        function toggleMenu() {
                            var x = document.getElementById("mainmenu");
                            if (x.className === "mainmenu") {
                                x.className += " responsive";
                            } else {
                                x.className = "mainmenu";
                            }
                        }
                        $(document).ready(function(){
                            $(".hidemenu").click(function(){
                                $(".submenu").toggle();
                            });
                            
                        });
                    </script>

                </div>
            </div>
        </div>
    </div>
</header>