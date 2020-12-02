<nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <ul class="pcoded-item pcoded-left-item">
                                <div class="pcoded-navigatio-lavel">Dashboard</div>
                                <li class="pcoded-hasmenu pcoded-trigger {{ request()->is('/') ? 'pcoded-trigger':'' }}">
                                     <li class="">
                                        <a href="{{ url('/') }}">
                                            <span class="pcoded-micon"><i class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                                            <span class="pcoded-mtext">Home</span>
                                        </a>
                                    </li>
                                </li>

                                <!-- Bill section start -->
                                <li class="pcoded-hasmenu {{ request()->is('bill/*') ? 'pcoded-trigger':'' }}">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext ">Customer Bill</span>
                                    </a>

                                    <ul class="pcoded-submenu">
                                        <li class="{{ request()->is('bill/add_bill') ? 'active':'' }}">
                                            <a href="{{ url('bill/add_bill') }}">
                                                <span class="pcoded-mtext">Add Bill</span>
                                            </a>
                                        </li>
                                        <li class="{{ request()->is('bill/all_bill') ? 'active':'' }}">
                                            <a href="{{ url('bill/all_bill') }}">
                                                <span class="pcoded-mtext">All Bill</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- My Next day work section start -->
                                <li class="pcoded-hasmenu {{ request()->is('MyWork/*') ? 'pcoded-trigger':'' }}">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext ">My Work</span>
                                    </a>

                                    <ul class="pcoded-submenu">
                                        <li class="{{ request()->is('MyWork/add_MyWork') ? 'active':'' }}">
                                            <a href="{{ url('MyWork/add_MyWork') }}">
                                                <span class="pcoded-mtext">Add Next Work</span>
                                            </a>
                                        </li>
                                        <li class="{{ request()->is('MyWork/all_MyWork') ? 'active':'' }}">
                                            <a href="{{ url('MyWork/all_MyWork') }}">
                                                <span class="pcoded-mtext">All Next Work</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>



                                <li class="">
                                    <a href="navbar-light.htm">
                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                        <span class="pcoded-mtext">Navigation</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                        <span class="pcoded-mtext">Widget</span>
                                        <span class="pcoded-badge label label-danger">100+</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="widget-statistic.htm">
                                                <span class="pcoded-mtext">Statistic</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>