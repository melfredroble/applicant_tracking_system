<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="index.html"><img src="../sources/assets/vssfinal.svg" alt="Oculux Logo" class="img-fluid logo"><span>&nbsp;V &nbsp;&nbsp;S &nbsp;&nbsp;S</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="../sources/assets/images/user.png" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Louis Pierce</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="profile.html"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="../index.php"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="header">Main</li>
                <li class="<?php if($_GET['page'] == 'dashboard') { echo 'active'; } ?>"><a href="index.php?page=dashboard"><i class="icon-speedometer"></i><span>Job Dashboard</span></a></li>
                <li class="<?php if($_GET['page'] == 'positions') { echo 'active'; } ?>"><a href="index.php?page=positions"><i class="icon-user"></i><span>Positions</span></a></li>
                <li class="<?php if($_GET['page'] == 'applicants') { echo 'active'; } ?>"><a href="index.php?page=applicants"><i class="icon-grid"></i><span>Applicants</span></a></li>
                <li class="<?php if($_GET['page'] == 'resumes') { echo 'active'; } ?>"><a href="index.php?page=resumes"><i class="icon-users"></i><span>Resumes</span></a></li>
                <li class="<?php if($_GET['page'] == 'settings') { echo 'active'; } ?>"><a href="index.php?page=settings"><i class="icon-equalizer"></i><span>Settings</span></a></li>
                <li class="<?php if($_GET['page'] == 'add_applicant') { echo 'active'; } ?>"><a href="index.php?page=add_applicant"><i class="icon-equalizer"></i><span>Add Applicant</span></a></li>
            </ul>
        </nav>
    </div>
</div>