<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->


        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('admin.index') }}"><i class="mdi mdi-view-dashboard-outline"></i>Dashboard</a>
                </li>

                <li class="menu-title mt-2">Apps</li>

                <li>
                    <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> News </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.news') }}">News Posts</a>
                            </li>
                            <li>
                                <a href="{{ route('add.news') }}">Add News Posts</a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Category </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.category') }}">All Categories</a>
                            </li>
                            <li>
                                <a href="{{ route('add.category') }}">Add Category</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCrm" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span> Admin Settings </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.admins') }}">All Admins</a>
                            </li>
                            <li>
                                <a href="crm-contacts.html">Add Admin</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Inbox </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('show.contacts') }}">Contact</a>
                            </li>
                            <li>
                                <a href="{{ route('sent.news') }}">Received News</a>
                            </li>
                            <li>
                                <a href="{{ route('comments') }}">Comments</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('socialmedia') }}">
                        <span class="badge bg-pink float-end">Hot</span>
                        <i class="mdi mdi-rss"></i>
                        <span> Social Feed </span>
                    </a>
                </li>

                <li>
                    <a href="apps-companies.html">
                        <i class="mdi mdi-domain"></i>
                        <span> Companies </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarProjects" data-bs-toggle="collapse">
                        <i class="mdi mdi-briefcase-check-outline"></i>
                        <span> Projects </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProjects">
                        <ul class="nav-second-level">
                            <li>
                                <a href="project-list.html">List</a>
                            </li>
                            <li>
                                <a href="project-detail.html">Detail</a>
                            </li>
                            <li>
                                <a href="project-create.html">Create Project</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarTasks" data-bs-toggle="collapse">
                        <i class="mdi mdi-clipboard-multiple-outline"></i>
                        <span> Tasks </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTasks">
                        <ul class="nav-second-level">
                            <li>
                                <a href="task-list.html">List</a>
                            </li>
                            <li>
                                <a href="task-details.html">Details</a>
                            </li>
                            <li>
                                <a href="task-kanban-board.html">Kanban Board</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarContacts" data-bs-toggle="collapse">
                        <i class="mdi mdi-book-account-outline"></i>
                        <span> Contacts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarContacts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="contacts-list.html">Members List</a>
                            </li>
                            <li>
                                <a href="contacts-profile.html">Profile</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarTickets" data-bs-toggle="collapse">
                        <i class="mdi mdi-lifebuoy"></i>
                        <span> Tickets </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTickets">
                        <ul class="nav-second-level">
                            <li>
                                <a href="tickets-list.html">List</a>
                            </li>
                            <li>
                                <a href="tickets-detail.html">Detail</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="apps-file-manager.html">
                        <i class="mdi mdi-folder-star-outline"></i>
                        <span> File Manager </span>
                    </a>
                </li>


            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
