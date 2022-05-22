<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element text-center">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Welcome,
                                            user
                                        </strong>
                                    </span></span>
                            </a>
                        </div>
                        <div class="logo-element" style="font-size: 14px;">Pet Care</div>
                    </li>

                    <li>
                        <a href="pet_request.php?email=<?php echo $dataofadmin['email']; ?>"> <i class="fa fa-user"></i> <span class="nav-label">Manage pet
                                Request</span></a>
                    </li>

                    <li>
                        <a href="reviews.php?email=<?php echo $dataofadmin['email']; ?>">
                        <i class="fa fa-diamond"></i> <span class="nav-label">Manage
                                Review</span></a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bars"></i> <span class="nav-label">Manage Appointment</span></a>
                        <ul class="nav">
                            <li>
                                <a style="font-weight:350;" 
                                href="appointments.php?email=<?php echo $dataofadmin['email']; ?>">
                                <i
                                        class="fa fa-diamond"></i> <span class="nav-label">Appointment
                                        Request</span></a>
                            </li>
                            <li>
                                <a style="font-weight:350;" 
                                href="#"><i
                                        class="fa fa-diamond"></i> <span class="nav-label">Upcoming
                                        Appointment</span></a>
                            </li>
                            <li>
                                <a style="font-weight:350;" 
                                href="PreviousAppointment.php?email=<?php echo $dataofadmin['email']; ?>">
                                <i class="fa fa-diamond"></i> <span class="nav-label">Previous
                                        Appointment</span></a>
                            </li>
                        </ul>

                    </li>

                    <li>
                        <a href="#"><i class="fa fa-image"></i>
                        <span class="nav-label">Service
                                Management</span></a>
                    </li>

                    <li>
                        <a href="about_us.php?email=<?php echo $dataofadmin['email']; ?>"><i class="fa fa-image"></i> <span class="nav-label">About us
                                Information</span></a>
                    </li>

                    <li>
                        <a href="company_info.php?email=<?php echo $dataofadmin['email']; ?>" ><i class="fa fa-image"></i> <span class="nav-label">Company
                                Information</span></a>
                    </li>


                    <li>
                        <a href="appointment_available.php?email=<?php echo $dataofadmin['email']; ?>" ><i class="fa fa-image"></i> <span
                                class="nav-label">Available Appointment</span></a>
                    </li>



                </ul>
            </div>
        </nav>