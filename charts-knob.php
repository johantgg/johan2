<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

    <head>
        
    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Jquery Knob Charts')); ?>

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

                        <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Charts' , 'title' => 'Jquery Knob Charts')); ?>

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                        
                                        <h4 class="card-title">Disable Display Input</h4>
                                        <p class="card-title-desc">Example of disable display input knob chart.</p>
    
                                        <div class="text-center" dir="ltr">
                                            <input data-plugin="knob" data-width="180" data-height="180" data-bgColor="#ebeff2"
                                                data-fgColor="#3d8ef8" data-displayInput=false value="69" />
                                        </div>
                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                        
                                        <h4 class="card-title">Cursor Mode</h4>
                                        <p class="card-title-desc">Example of cursor mode chart.</p>
    
                                        <div class="text-center" dir="ltr">
                                            <input data-plugin="knob" data-width="180" data-height="180" data-cursor=true
                                                data-fgColor="#11c46e" value="54" />
                                        </div>
                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
    
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                        
                                        <h4 class="card-title">Display Previous Value</h4>
                                        <p class="card-title-desc">Example of display previous value chart.</p>
    
                                        <div class="text-center" dir="ltr">
                                            <input data-plugin="knob" data-width="180" data-height="180" data-min="-100"
                                                data-fgColor="#f1b44c" data-displayPrevious=true value="72" />
                                        </div>
                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->
    
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                        
                                        <h4 class="card-title">Angle Offset and Arc</h4>
                                        <p class="card-title-desc">Example of angle offset and arc chart.</p>
                                        
                                        <div class="text-center" dir="ltr">
                                            <input data-plugin="knob" data-width="180" data-height="180" data-min="-100"
                                                data-fgColor="#0db4d6" data-displayPrevious=true data-angleOffset=-125
                                                data-angleArc=250 value="86" />
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                        
                                        <h4 class="card-title">Angle Offset</h4>
                                        <p class="card-title-desc">Example of angle offset chart.</p>
    
                                        <div class="text-center" dir="ltr">
                                            <input data-plugin="knob" data-width="180" data-height="180" data-angleOffset="90"
                                                data-linecap="round" data-fgColor="#fb4d53" value="75" data-bs-thickness=".15" />
                                        </div>
                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
    
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                        
                                        <h4 class="card-title">5-digit Values, Step 1000</h4>
                                        <p class="card-title-desc">Example of 5-digit values and step 1000 chart.</p>
                                        
                                        <div class="text-center" dir="ltr">
                                            <input data-plugin="knob" data-width="180" data-height="180" data-min="-15000"
                                                data-displayPrevious=true data-max="15000" data-step="1000" value="11000" data-bs-thickness=".12"
                                                data-fgColor="#7c8a96" />
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->
    
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                        
                                        <h4 class="card-title">Readonly</h4>
                                        <p class="card-title-desc">Example of readonly chart.</p>
                                        
                                        <div class="text-center" dir="ltr">
                                            <input data-plugin="knob" data-width="180" data-height="180" data-linecap=round
                                                data-fgColor="#846eff" value="33" data-skin="tron" data-angleOffset="180"
                                                data-readOnly=true data-bs-thickness=".1" />
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <?php include 'partials/footer.php'; ?>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?php include 'partials/right-sidebar.php'; ?>

        <?php include 'partials/vendor-scripts.php'; ?>

        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script> 

        <script src="assets/js/pages/jquery-knob.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
