<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

    <head>
        
    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Alerts')); ?>
        
        <?php include 'partials/head-css.php'; ?>

    </head>

    <?php include 'partials/body.php'; ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

        <?php include 'partials/menu.php'; ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'UI Elements' , 'title' => 'Alerts')); ?>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Examples</h4>
                                        <p class="card-title-desc">Alerts are available for any length of
                                            text, as well as an optional dismiss button. For proper styling, use one
                                            of the four <strong>required</strong> contextual classes (e.g., <code>.alert-success</code>). For inline
                                            dismissal, use the alerts jQuery plugin.</p>
        
                                        <div>
                                            <div class="alert alert-primary" role="alert">
                                                A simple primary alert
                                            </div>
                                            <div class="alert alert-success" role="alert">
                                                A simple success alert
                                            </div>
                                            <div class="alert alert-info" role="alert">
                                                A simple info alert
                                            </div>
                                            <div class="alert alert-warning" role="alert">
                                                A simple warning alert
                                            </div>
                                            <div class="alert alert-danger mb-0" role="alert">
                                                A simple danger alert
                                            </div>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Link color</h4>
                                        <p class="card-title-desc">Use the <code>.alert-link</code> utility class to
                                            quickly provide matching colored links within any alert.</p>
        
                                        <div class="">
                                            <div class="alert alert-primary" role="alert">
                                                A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                            </div>
                                            <div class="alert alert-success" role="alert">
                                                A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                            </div>
                                            <div class="alert alert-info" role="alert">
                                                A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                            </div>
                                            <div class="alert alert-warning" role="alert">
                                                A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                            </div>
                                            <div class="alert alert-danger mb-0" role="alert">
                                                A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                            </div>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Dismissing</h4>
                                        <p class="card-title-desc">You can see this in action with a live demo:</p>
        
                                        <div class="">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                <strong>Well done!</strong> You successfully read this important alert message.
                                            </div>
                                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                            </div>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                            </div>
                                            <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                            </div>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Card Alerts</h4>
                                        <p class="card-title-desc">Alerts can also contain additional HTML elements like icons, headings and paragraphs in card.</p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card alert border p-0 mb-0">
                                                    <div class="card-header bg-success-subtle text-success">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1">
                                                                <h5 class="font-size-16 text-success my-1">Success Alert</h5>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                            </div>
                                                        </div>                                                        
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <div class="mb-4">
                                                                <i class="mdi mdi-checkbox-marked-circle-outline display-4 text-success"></i>
                                                            </div>
                                                            <h4 class="alert-heading">Well done!</h4>
                                                            <p class="mb-0">Placed your Order successfully</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card alert border mt-4 mt-lg-0 p-0 mb-0">
                                                    <div class="card-header bg-danger-subtle text-danger">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1">
                                                                <h5 class="font-size-16 text-danger my-1">Danger Alert</h5>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                            </div>
                                                        </div>                                                                                                          
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <div class="mb-4">
                                                                <i class="mdi mdi-alert-outline display-4 text-danger"></i>
                                                            </div>
                                                            <h4 class="alert-heading">Something went wrong</h4>
                                                            <p class="mb-0">Sorry ! Product not available</p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div>
                        <!--end row-->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Live Example</h4>
                                        <p class="card-title-desc">Click the button below to show an alert (hidden with inline styles to start), then dismiss (and destroy) it with the built-in close button.</p>
        
                                        <div class="">
                                            <div id="liveAlertPlaceholder"></div>
                                            <button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Additional content</h4>
                                        <p class="card-title-desc">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
        
                                        <div class="">
                                            <div class="alert alert-success" role="alert">
                                                <h4 class="alert-heading">Well done!</h4>
                                                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so
                                                    that you can see how spacing within an alert works with this kind of content.</p>
                                                <hr>
                                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->    
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <?php include 'partials/footer.php'; ?>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?php include 'partials/right-sidebar.php'; ?>

        <?php include 'partials/vendor-scripts.php'; ?>

        <!-- Alerts Live Demo js -->
        <script src="assets/js/pages/alerts.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
