<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="../uploads/admin/<?= $adminrec['image']; ?>" alt="<?= $adminrec['name']; ?>" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        <?= $adminrec['name']; ?>
                        <small><?= $adminrec['email']; ?></small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="profile.php"><i class="fa fa-user"></i>Profile</a></li>
                    <li><a href="general-details.php"><i class="fa fa-user"></i>General Detail</a></li>
                    <li><a href="login/logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="has-sub active">
                <a href="index.php">
                    <b class="caret"></b>
                    <i class="fa fa-home fa-spin"></i>
                    <span>Dashboard</span>
                </a>
            </li>

			<li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
					<i class="fa fa-picture-o"></i>
                    <span>Popup Management</span>
                </a>
                <ul class="sub-menu">
					<li><a href="add-popup.php">Add Popup </a></li>    
					<li><a href="view_popup.php">View / Edit Popup </a></li>
                </ul>
            </li>



            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <img src="assets/img/advertising.gif" style="width: 20px;" /> <span
                        >Announcement Man..</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="view-announcement.php">Manage Announcement </a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-calendar"></i><span>Event
                        Management</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="view-event.php">Manage Event </a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-newspaper-o"></i><span>News & Events
                        Mana...</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="view-newsevent.php">Manage News & Events</a></li>
                </ul>
            </li>


            <li class="has-sub ">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-file-pdf-o"></i><span>Result
                        Management</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="view-result.php">Manage Result</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-edge"></i><span>Holiday
                        Management</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="view-holiday.php">Manage Holiday</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-book"></i><span>Syllabus
                        Management</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="view-syllabus.php">Manage Syllabus</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-book"></i><span>SLC
                        Management</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="view-slc.php">Manage SLC</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-file-image-o"></i><span>Banner Management</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="view-banner.php">Manage Slider <i class="fa fa-paper-plane text-theme m-l-5"></i></a>
                    </li>
                </ul>
            </li>




            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-file-text-o"></i><span>Homepage Mana..</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="view_about.php">Manage Aboutus <i class="fa fa-paper-plane text-theme m-l-5"></i></a>
                    </li>
                    <li><a href="view_facilities.php">Manage Facilities <i
                                class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                    <li><a href="view_choose.php">Manage Choose <i class="fa fa-paper-plane text-theme m-l-5"></i></a>
                    </li>
                    <li><a href="view_popup.php">Homepage popup <i class="fa fa-paper-plane text-theme m-l-5"></i></a>
                    </li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-align-left"></i>
                    <span>Menu Management</span>
                </a>
                <ul class="sub-menu">
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            Mainmenu
                        </a>
                        <ul class="sub-menu">
                            <li><a href="add-category.php">Add Menu</a></li>
                            <li><a href="view-category.php">Manage Menu</a></li>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            Sub Menu
                        </a>
                        <ul class="sub-menu">
                            <li><a href="add-subcategory.php">Add Submenu</a></li>
                            <li><a href="view-subcategory.php">Manage Submenu</a></li>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            Sub Submenu
                        </a>
                        <ul class="sub-menu">
                            <li><a href="add-subsubcategory.php">Add Subsubmenu</a></li>
                            <li><a href="view-subsubcategory.php">Manage Subsubmenu</a></li>
                        </ul>
                    </li>

                </ul>
            </li>


            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-picture-o"></i><span>Photo Gallary Manag..</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="view-photoalbum.php">Manage Album </a></li>
                    <li><a href="view-photo.php">Manage Photo </a></li>
                    <li><a href="manage-printcategory.php">MSMS Print Year </a></li>
                    <li><a href="view-msmsprint.php">Manage MSMS Print </a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-picture-o"></i><span>Video Gallary Manag..</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="view-videoalbum.php">Manage Video </a></li>
                </ul>
            </li>







            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-meetup"></i><span>Testimonial Manage</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="view-testimonial.php">Manage Testimonials <i
                                class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-users"></i><span>Contact Details</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="general-details.php">Manage Details<i
                                class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                </ul>
            </li>






            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i
                        class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>