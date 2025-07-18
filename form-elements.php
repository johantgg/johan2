<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

    <head>
        
    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Form Elements')); ?>

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

                        <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Forms' , 'title' => 'Form Elements')); ?>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Textual inputs</h4>
                                        <p class="card-title-desc">Here are examples of <code>.form-control</code> applied to each
                                            textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
        
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Text</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Search</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">URL</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-number-input" class="col-md-2 col-form-label">Number</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number" value="42" id="example-number-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-datetime-local-input" class="col-md-2 col-form-label">Date and time</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="datetime-local" value="2019-08-19T13:45:00" id="example-datetime-local-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-date-input" class="col-md-2 col-form-label">Date</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-month-input" class="col-md-2 col-form-label">Month</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="month" value="2019-08" id="example-month-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-week-input" class="col-md-2 col-form-label">Week</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="week" value="2019-W33" id="example-week-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-time-input" class="col-md-2 col-form-label">Time</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-color-input" class="col-md-2 col-form-label">Color picker</label>
                                            <div class="col-md-10">
                                                <input type="color" class="form-control form-control-color mw-100" id="exampleColorInput" value="#0bb197"
                                                    title="Choose your color">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Select</label>
                                            <div class="col-md-10">
                                                <select class="form-select">
                                                    <option>Select</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">   
                                            <label for="exampleDataList" class="col-md-2 col-form-label">Datalists</label>
                                            <div class="col-md-10">
                                                <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                                                <datalist id="datalistOptions">
                                                    <option value="San Francisco">
                                                    <option value="New York">
                                                    <option value="Seattle">
                                                    <option value="Los Angeles">
                                                    <option value="Chicago">
                                                </datalist>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <h4 class="card-title">Sizing</h4>
                                        <p class="card-title-desc">Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>

                                        <form>
                                            <div class="row g-2 g-md-4">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="default-input">Default input</label>
                                                        <input class="form-control" type="text" id="default-input" placeholder="Default input">
                                                    </div>
                                                </div>
                                            
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="form-sm-input">Form Small input</label>
                                                        <input class="form-control form-control-sm" type="text" id="form-sm-input" placeholder=".form-control-sm">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-4">
                                                    <div class="mb-0">
                                                        <label class="form-label" for="form-lg-input">Form Large input</label>
                                                        <input class="form-control form-control-lg" type="text" id="form-lg-input" placeholder=".form-control-lg">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row  -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Range Inputs</h4>
                                        <p class="card-title-desc">Create custom <code>&lt;input type="range"&gt;</code>
                                            controls with <code>.form-range</code>.</p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="customRange1" class="form-label">Example Range</label>
                                                    <input type="range" class="form-range" id="customRange1">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="disabledRange" class="form-label">Disabled Range</label>
                                                    <input type="range" class="form-range" id="disabledRange" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-lg-6">
                                                <div class="mt-4">
                                                    <h5 class="font-size-14">Min and max</h5>
                                                    <p class="card-title-desc">Range inputs have implicit values for min and
                                                        max—0 and 100, respectively.</p>
                                                    <input type="range" class="form-range" min="0" max="5" id="customRange2">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mt-4">
                                                    <h5 class="font-size-14">Steps</h5>
                                                    <p class="card-title-desc">By default, range inputs “snap” to integer
                                                        values. To change this, you can specify a <code>step</code> value.</p>
                                                    <input type="range" class="form-range" min="0" max="5" id="customRange2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Checkboxes</h4>
                                        <p class="card-title-desc">Checks use custom Bootstrap icons to indicate checked or indeterminate states.</p>

                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                            <div class="col">
                                                <h5 class="font-size-14 mb-3"><u>Default Checkboxes</u></h5>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Default checkbox
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked>
                                                    <label class="form-check-label" for="defaultCheck2">
                                                        Default checkbox
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h5 class="font-size-14 mb-3"><u>Form Checkboxes Right</u></h5>
                                                <div>
                                                    <div class="form-check form-check-right">
                                                        <input type="checkbox" class="form-check-input" id="customCheck1" checked>
                                                        <label class="form-check-label" for="customCheck1">Form Checkboxes Right</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="form-check form-check-right">
                                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                                        <label class="form-check-label" for="customCheck2">Form Checked Checkboxes Right</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h5 class="font-size-14 mb-3"><u>Inline Checkboxes</u></h5>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value="" id="inlineCheck1">
                                                    <label class="form-check-label" for="inlineCheck1">
                                                        Inline Check 1
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value="" id="inlineCheck2" checked>
                                                    <label class="form-check-label" for="inlineCheck2">
                                                        Inline Check 2
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <h5 class="font-size-14 mb-3"><u>Disable Checkboxes</u></h5>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                                                    <label class="form-check-label" for="flexCheckDisabled">
                                                        Disabled checkbox
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                                                    <label class="form-check-label" for="flexCheckCheckedDisabled">
                                                        Disabled checked checkbox
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Radios</h4>

                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                            <div class="col">
                                                <h5 class="font-size-14 mb-3"><u>Default Radios</u></h5>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Default radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Default radio
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <h5 class="font-size-14 mb-3"><u>Form Radios Right</u></h5>
                                                <div class="form-check form-check-right mb-2">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                                    <label class="form-check-label" for="customRadio1">Toggle this Form Right Radio</label>
                                                </div>
                                                <div class="form-check form-check-right">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="form-check-input" checked>
                                                    <label class="form-check-label" for="customRadio2">Or Toggle this Form Right Radio</label>
                                                </div>
                                            </div>                                            

                                            <div class="col">
                                                <h5 class="font-size-14 mb-3"><u>Inline Radios</u></h5>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadios" id="inlineRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="inlineRadios1">
                                                        Inline Radio 1
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadios" id="inlineRadios2" value="option2">
                                                    <label class="form-check-label" for="inlineRadios2">
                                                        Inline Radio 2
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <h5 class="font-size-14 mb-3"><u>Disable Radios</u></h5>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
                                                    <label class="form-check-label" for="flexRadioDisabled">
                                                        Disabled radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked
                                                        disabled>
                                                    <label class="form-check-label" for="flexRadioCheckedDisabled">
                                                        Disabled checked radio
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Switches</h4>
                                        <p class="card-title-desc">A switch has the markup of a custom checkbox but uses the <code>.form-switch</code> class to render a toggle switch. Switches also support the <code>disabled</code> attribute.</p>

                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                                            <div class="col">
                                                <h5 class="font-size-14 mb-3"><u>Switch Examples</u></h5>

                                                <div class="d-flex flex-column gap-2">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                                                    </div>
                                                </div>                                                    
                                            </div>
                                            <div class="col">
                                                <h5 class="font-size-14 mb-3"><u>Switch Sizes</u></h5>

                                                <div class="d-flex flex-column gap-2">
                                                    <div class="form-check form-switch form-switch-md" dir="ltr">
                                                        <input class="form-check-input" type="checkbox" id="SwitchCheckSizemd">
                                                        <label class="form-check-label" for="SwitchCheckSizemd">Medium Size Switch</label>
                                                    </div>

                                                    <div class="form-check form-switch form-switch-lg" dir="ltr">
                                                        <input class="form-check-input" type="checkbox" id="SwitchCheckSizelg" checked>
                                                        <label class="form-check-label" for="SwitchCheckSizelg">Large Size Switch</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h5 class="font-size-14 mb-3"><u>Disable Switch</u></h5>

                                                <div class="d-flex flex-column gap-2">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
                                                        <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled Switch</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>
                                                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled Checked Switch</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Inline Forms</h4>
                                        <p class="card-title-desc">Use the <code>.form-inline</code> class to display a series of labels, form controls, and buttons on a single horizontal row.</p>

                                        <form class="row row-cols-lg-auto g-3 align-items-center">
                                            <div class="col-12">
                                                <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group-text">@</div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                                                <select class="form-select" id="inlineFormSelectPref">
                                                    <option selected>Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                                    <label class="form-check-label" for="inlineFormCheck">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Auto sizing</h4>
                                        <p class="card-title-desc">The example below uses a flexbox utility to vertically center the contents and changes <code>.col</code> to <code>.col-auto</code> so that your columns only take up as much space as needed. Put another way, the column sizes itself based on the contents.</p>

                                        <form class="row gy-2 gx-3 align-items-center">
                                            <div class="col-auto">
                                                <label class="visually-hidden" for="autoSizingInput">Name</label>
                                                <input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
                                            </div>
                                            <div class="col-auto">
                                                <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group-text">@</div>
                                                    <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                                                <select class="form-select" id="autoSizingSelect">
                                                    <option selected>Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                                    <label class="form-check-label" for="autoSizingCheck">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Floating labels</h5>
                                        <p class="card-title-desc">Create beautifully simple form labels that float over your input fields.</p>

                                        <form>                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                                        <label for="floatingFirstnameInput">First Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingLastnameInput" placeholder="Enter Your Last Name">
                                                        <label for="floatingLastnameInput">Last Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control" id="floatingemailInput" placeholder="Enter Email address">
                                                        <label for="floatingemailInput">Email address</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Works with selects</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="floatingCheck">
                                                    <label class="form-check-label" for="floatingCheck">
                                                      Check me out
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Inline Form With Stack</h4>
                                        <p class="card-title-desc">Create an inline form with <code>.hstack</code>:</p>

                                        <div class="w-50">
                                            <div class="hstack gap-3">
                                                <input class="form-control me-auto" type="text" placeholder="Add your item here..."
                                                    aria-label="Add your item here...">
                                                <button type="button" class="btn btn-secondary">Submit</button>
                                                <div class="vr"></div>
                                                <button type="button" class="btn btn-outline-danger">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

        <script src="assets/js/app.js"></script>

    </body>

</html>