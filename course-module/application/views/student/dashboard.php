 <?php 
    if($myprofile!=''){
    foreach($myprofile as $mf){
?>

    <section>
        <div class="pro-cover">
        </div>
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
                    <ul>
                        <li><a href="<?=base_url();?>member/dashboard" class="pro-act">My Dashboard</a></li>
                        <li><a href="<?=base_url();?>member/profile">Profile</a></li>
                        <li><a href="<?=base_url();?>member/current_course">Courses</a></li>
                        <li><a href="<?=base_url();?>member/exam">Exams</a></li>
                        <li><a href="<?=base_url();?>member/timeline">Time Line</a></li>
                        <li> <a href="<?php echo base_url()?>member/chat_student">My Chat</a> </li>
                        <li><a href="#">Entry</a></li>
                        <li><a href="#">Notifications</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="stu-db">
            <div class="container pg-inn">
                <div class="col-md-3">
                    <div class="pro-user">
                        <img src="<?php echo base_url()?>uploads/profile/<?php echo $mf->profile_image?>" alt="user">
                    </div>
                    <div class="pro-user-bio">
                        <ul>
                            <li>
                                <h4><?php echo $mf->first_name?> &nbsp; <?php echo $mf->last_name?></h4>
                            </li>
                            <li>Student Id: ST17241</li>
                            <li><a href="#!"><i class="fa fa-facebook"></i> Facebook: my sample</a></li>
                            <li><a href="#!"><i class="fa fa-google-plus"></i> Google: my sample</a></li>
                            <li><a href="#!"><i class="fa fa-twitter"></i> Twitter: my sample</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="udb">

                        <div class="udb-sec udb-prof">
                            <h4><img src="<?=base_url();?>user_panel/new/images/icon/db1.png" alt="" /> My Profile</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <div class="udb-sec udb-cour">
                            <h4><img src="<?=base_url();?>user_panel/new/images/icon/db2.png" alt="" /> Booking Courses</h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.The point of using Lorem Ipsummaking it look like readable English.</p>
                            <div class="sdb-cours">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="list-mig-like-com com-mar-bot-30">
                                                <div class="list-mig-lc-img"> <img src="<?=base_url();?>user_panel/new/images/course/3.jpg" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:150 Days</span> </div>
                                                <div class="list-mig-lc-con">
                                                    <h5>Master of Science</h5>
                                                    <p>Illinois City,</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="list-mig-like-com com-mar-bot-30">
                                                <div class="list-mig-lc-img"> <img src="<?=base_url();?>user_panel/new/images/course/4.jpg" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:60 Days</span> </div>
                                                <div class="list-mig-lc-con">
                                                    <h5>Java Programming</h5>
                                                    <p>Illinois City,</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="list-mig-like-com com-mar-bot-30">
                                                <div class="list-mig-lc-img"> <img src="<?=base_url();?>user_panel/new/images/course/5.jpg" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:30 Days</span> </div>
                                                <div class="list-mig-lc-con">
                                                    <h5>Aeronautical Engineering</h5>
                                                    <p>Illinois City,</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="list-mig-like-com com-mar-bot-30">
                                                <div class="list-mig-lc-img"> <img src="<?=base_url();?>user_panel/new/images/course/3.jpg" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:20 Days</span> </div>
                                                <div class="list-mig-lc-con">
                                                    <h5>Master of Science</h5>
                                                    <p>Illinois City,</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="udb-sec udb-cour-stat">
                            <h4><img src="images/icon/db3.png" alt="" /> Course Status</h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.The point of using Lorem Ipsummaking it look like readable English.</p>
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Course Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Software Testing</td>
                                            <td>12May 2018</td>
                                            <td>18Aug 2018</td>
                                            <td><span class="pro-user-act">active</span></td>
                                            <td><a href="javascript:void(0);" class="pro-edit">edit</a></td>
                                            <td><a href="javascript:void(0);" class="pro-edit">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>Mechanical Design</td>
                                            <td>05Jan 2019</td>
                                            <td>10Feb 2019</td>
                                            <td><span class="pro-user-act">active</span></td>
                                            <td><a href="javascript:void(0);" class="pro-edit">edit</a></td>
                                            <td><a href="javascript:void(0);" class="pro-edit">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Architecture & Planning</td>
                                            <td>21Jun 2020</td>
                                            <td>08Dec 2020</td>
                                            <td><span class="pro-user-act">active</span></td>
                                            <td><a href="javascript:void(0);" class="pro-edit">edit</a></td>
                                            <td><a href="javascript:void(0);" class="pro-edit">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>Board Exam Training</td>
                                            <td>08Jun 2018</td>
                                            <td>21Sep 2018</td>
                                            <td><span class="pro-user-act pro-user-de-act">de-active</span></td>
                                            <td><a href="javascript:void(0);" class="pro-edit">edit</a></td>
                                            <td><a href="javascript:void(0);" class="pro-edit">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>05</td>
                                            <td>Yoga Training Classes</td>
                                            <td>16JFeb 2018</td>
                                            <td>26Mar 2018</td>
                                            <td><span class="pro-user-act pro-user-de-act">de-active</span></td>
                                            <td><a href="javascript:void(0);" class="pro-edit">edit</a></td>
                                            <td><a href="javascript:void(0);" class="pro-edit">view</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="udb-sec udb-time">
                            <h4><img src="<?=base_url();?>user_panel/new/images/icon/db4.png" alt="" /> Class Time Line</h4>
                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            <div class="tour_head1 udb-time-line days">
                                <ul>
                                    <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <div class="sdb-cl-tim">
                                            <div class="sdb-cl-day">
                                                <h5>Today</h5>
                                                <span>10Sep 2018</span>
                                            </div>
                                            <div class="sdb-cl-class">
                                                <ul>
                                                    <li>
                                                        <div class="sdb-cl-class-tim tooltipped" data-position="top" data-delay="50" data-tooltip="Class timing">
                                                            <span>09:30 am</span>
                                                            <span>10:15 pm</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name tooltipped" data-position="top" data-delay="50" data-tooltip="Class Details">
                                                            <h5>Software Testing <span>John Smith</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim tooltipped" data-position="top" data-delay="50" data-tooltip="Class timing">
                                                            <span>10:15 am</span>
                                                            <span>11:00 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name tooltipped" data-position="top" data-delay="50" data-tooltip="Class Details">
                                                            <h5>Mechanical Design Classes <span>Stephanie</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>11:00 am</span>
                                                            <span>11:45 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name sdb-cl-class-name-lev">
                                                            <h5>Board Exam Training Classes <span>Matthew</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <div class="sdb-cl-tim">
                                            <div class="sdb-cl-day">
                                                <h5>Tuesday</h5>
                                                <span>11Sep 2018</span>
                                            </div>
                                            <div class="sdb-cl-class">
                                                <ul>
                                                    <li>
                                                        <div class="sdb-cl-class-tim tooltipped" data-position="top" data-delay="50" data-tooltip="Class timing">
                                                            <span>9:30 am</span>
                                                            <span>10:15 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name tooltipped" data-position="top" data-delay="50" data-tooltip="Class Details">
                                                            <h5>Agriculture <span>John Smith</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>10:15 am</span>
                                                            <span>11:00 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name">
                                                            <h5>Google Product Training <span>Stephanie</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>11:00 am</span>
                                                            <span>11:45 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name sdb-cl-class-name-lev">
                                                            <h5>Web Design & Development <span>Matthew</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <div class="sdb-cl-tim">
                                            <div class="sdb-cl-day">
                                                <h5>Wednesday</h5>
                                                <span>12Sep 2018</span>
                                            </div>
                                            <div class="sdb-cl-class">
                                                <ul>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>9:30 am</span>
                                                            <span>10:15 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name">
                                                            <h5>Software Testing <span>John Smith</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>10:15 am</span>
                                                            <span>11:00 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name">
                                                            <h5>Mechanical Design Classes <span>Stephanie</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>11:00 am</span>
                                                            <span>11:45 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name sdb-cl-class-name-lev">
                                                            <h5>Board Exam Training Classes <span>Matthew</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <h4><span>Holiday: </span> Thursday </h4>
                                        <p>After breakfast, proceed for tour of Dubai city. Visit Jumeirah Mosque, World Trade Centre, Palaces and Dubai Museum. Enjoy your overnight stay at the hotel.In the evening, enjoy a tasty dinner on the Dhow cruise.
                                            Later, head back to the hotel for a comfortable overnight stay.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <?php } } ?>