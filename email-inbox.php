<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

    <head>
        
    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Inbox')); ?>

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

                        <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Email' , 'title' => 'Inbox')); ?>

                        <div class="row">
                            <div class="col-xl-3 mb-4 mb-xl-0"> 
                                <div class="card h-100">
                                    <div class="card-body email-leftbar">
                                        <div class="d-grid">
                                            <a href="email-compose.php" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="mdi mdi-plus me-1"></i> Compose</a>                   
                                        </div>

                                        <div class="mail-list mt-4">
                                            <a href="#" class="active"><i class="mdi mdi-inbox me-2"></i> Inbox <span class="ms-1 float-end">(18)</span></a>
                                            <a href="#"><i class="mdi mdi-star-outline me-2"></i>Starred</a>
                                            <a href="#"><i class="mdi mdi-diamond-stone me-2"></i>Important</a>
                                            <a href="#"><i class="mdi mdi-file-outline me-2"></i>Draft</a>
                                            <a href="#"><i class="mdi mdi-send-check-outline me-2"></i>Sent Mail</a>
                                            <a href="#"><i class="mdi mdi-trash-can-outline me-2"></i>Trash</a>
                                        </div>

                                        <div>
                                            <h6 class="mt-4">Labels</h6>
        
                                            <div class="mail-list mt-1">
                                                <a href="#"><span class="mdi mdi-circle-outline me-2 text-info"></span>Theme Support</a>
                                                <a href="#"><span class="mdi mdi-circle-outline me-2 text-warning"></span>Freelance</a>
                                                <a href="#"><span class="mdi mdi-circle-outline me-2 text-primary"></span>Social</a>
                                                <a href="#"><span class="mdi mdi-circle-outline me-2 text-danger"></span>Friends</a>
                                                <a href="#"><span class="mdi mdi-circle-outline me-2 text-success"></span>Family</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-9">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group me-2 mb-3">
                                            <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-inbox"></i></button>
                                            <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-exclamation-circle"></i></button>
                                            <button type="button" class="btn btn-primary waves-light waves-effect"><i class="far fa-trash-alt"></i></button>
                                        </div>
                                        <div class="btn-group me-2 mb-3">
                                            <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Updates</a>
                                                <a class="dropdown-item" href="#">Social</a>
                                                <a class="dropdown-item" href="#">Team Manage</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn-toolbar justify-content-md-end" role="toolbar">
                                        <div class="btn-group ms-md-2 mb-3">
                                            <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Updates</a>
                                                <a class="dropdown-item" href="#">Social</a>
                                                <a class="dropdown-item" href="#">Team Manage</a>
                                            </div>
                                        </div>
        
                                        <div class="btn-group ms-2 mb-3">
                                            <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                More <i class="mdi mdi-dots-vertical ms-1"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Mark as Unread</a>
                                                <a class="dropdown-item" href="#">Mark as Important</a>
                                                <a class="dropdown-item" href="#">Add to Tasks</a>
                                                <a class="dropdown-item" href="#">Add Star</a>
                                                <a class="dropdown-item" href="#">Mute</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-justified nav-tabs-custom" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#custom-primary" role="tab">
                                                    <i class="mdi mdi-inbox me-2 align-middle font-size-18"></i> <span class="d-none d-md-inline-block">Primary</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#custom-social" role="tab">
                                                    <i class="mdi mdi-account-group-outline me-2 align-middle font-size-18"></i> <span class="d-none d-md-inline-block"> Social</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#custom-promotion" role="tab">
                                                    <i class="mdi mdi-tag-multiple me-2 align-middle font-size-18"></i> <span class="d-none d-md-inline-block">Promotion</span>
                                                </a>
                                            </li>
                                        </ul>
        
                                        <!-- Tab panes -->
                                        <div class="tab-content pt-3">
                                            <div class="tab-pane active" id="custom-primary" role="tabpanel">
                                                <ul class="message-list mb-0">
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk1">
                                                                <label for="chk1" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Peter, me (3)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Hello – <span class="teaser">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                            </a>
                                                            <div class="date">Mar 6</div>
                                                        </div>
                                                    </li>
                        
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk2">
                                                                <label for="chk2" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">me, Susanna (7)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-warning badge me-2">Freelance</span>Since you asked... and i'm
                                                                inconceivably bored at the train station –
                                                                <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                                            </a>
                                                            <div class="date">Mar. 6</div>
                                                        </div>
                                                    </li>
                
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk3">
                                                                <label for="chk3" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Web Support Dennis</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Re: New mail settings – 
                                                                <span class="teaser">Will you answer him asap?</span>
                                                            </a>
                                                            <div class="date">Mar 7</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk4">
                                                                <label for="chk4" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">me, Peter (2)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-info badge me-2">Support</span>Off on Thursday - 
                                                                <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4  4 mar 2014 at 5:55 pm</span>
                                                            </a>
                                                            <div class="date">Mar 4</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk5">
                                                                <label for="chk5" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Medium</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-primary badge me-2">Social</span>This Week's Top Stories – 
                                                                <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America’s Ego</span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk6">
                                                                <label for="chk6" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Death to Stock</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Montly High-Res Photos – 
                                                                <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                        </div>
                                                    </li>
                
                                                    <li class="unread">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk7">
                                                                <label for="chk7" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Randy, me (5)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-success badge me-2">Family</span>Last pic over my village – 
                                                                <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                            </a>
                                                            <div class="date">5:01 am</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk8">
                                                                <label for="chk8" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Andrew Zimmer</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Mochila Beta: Subscription Confirmed
                                                                – <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                            </a>
                                                            <div class="date">Mar 8</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk9">
                                                                <label for="chk9" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Infinity HR</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Sveriges Hetaste sommarjobb –
                                                                <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                            </a>
                                                            <div class="date">Mar 8</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk10">
                                                                <label for="chk10" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Revibe</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-danger badge me-2">Friends</span>Weekend on Revibe – 
                                                                <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                                            </a>
                                                            <div class="date">Feb 27</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk11">
                                                                <label for="chk11" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Erik, me (5)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Regarding our meeting – 
                                                                <span class="teaser">That's great, see you on Thursday!</span>
                                                            </a>
                                                            <div class="date">Feb 24</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk12">
                                                                <label for="chk12" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">KanbanFlow</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-primary badge me-2">Social</span>Task assigned: Clone ARP's website
                                                                – <span class="teaser">You have been assigned a task by Alex@Work on the board Web.</span>
                                                            </a>
                                                            <div class="date">Feb 24</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk13">
                                                                <label for="chk13" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Tobias Berggren</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Let's go fishing! – 
                                                                <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk14">
                                                                <label for="chk14" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Charukaw, me (7)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Hey man – <span class="teaser">Nah man sorry i don't. Should i get it?</span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                        </div>
                                                    </li>
                                                    <li class="unread">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk15">
                                                                <label for="chk15" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">me, Peter (5)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-info badge me-2">Support</span>Home again! – <span class="teaser">That's just perfect! See you tomorrow.</span>
                                                            </a>
                                                            <div class="date">Feb 21</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk16">
                                                                <label for="chk16" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Stack Exchange</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">1 new items in your Stackexchange inbox
                                                                – <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                                            </a>
                                                            <div class="date">Feb 21</div>
                                                        </div>
                                                    </li>
        
                
                                                </ul>
                                            </div>
                                            <div class="tab-pane" id="custom-social" role="tabpanel">
                                                <ul class="message-list mb-0">
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk17">
                                                                <label for="chk17" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Andrew Zimmer</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Mochila Beta: Subscription Confirmed
                                                                – <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                            </a>
                                                            <div class="date">Mar 8</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk18">
                                                                <label for="chk18" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Peter, me (3)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Hello – <span class="teaser">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                            </a>
                                                            <div class="date">Mar 6</div>
                                                        </div>
                                                    </li>
                        
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk19">
                                                                <label for="chk19" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Web Support Dennis</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Re: New mail settings – 
                                                                <span class="teaser">Will you answer him asap?</span>
                                                            </a>
                                                            <div class="date">Mar 7</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk20">
                                                                <label for="chk20" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">me, Peter (2)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-info badge me-2">Support</span>Off on Thursday - 
                                                                <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4  4 mar 2014 at 5:55 pm</span>
                                                            </a>
                                                            <div class="date">Mar 4</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk21">
                                                                <label for="chk21" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Medium</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-primary badge me-2">Social</span>This Week's Top Stories – 
                                                                <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America’s Ego</span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk22">
                                                                <label for="chk22" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">me, Susanna (7)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-warning badge me-2">Freelance</span>Since you asked... and i'm
                                                                inconceivably bored at the train station –
                                                                <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                                            </a>
                                                            <div class="date">Mar. 6</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk23">
                                                                <label for="chk23" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Infinity HR</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Sveriges Hetaste sommarjobb –
                                                                <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                            </a>
                                                            <div class="date">Mar 8</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk24">
                                                                <label for="chk24" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Death to Stock</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Montly High-Res Photos – 
                                                                <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                        </div>
                                                    </li>
                
                                                    <li class="unread">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk25">
                                                                <label for="chk25" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Randy, me (5)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-success badge me-2">Family</span>Last pic over my village – 
                                                                <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                            </a>
                                                            <div class="date">5:01 am</div>
                                                        </div>
                                                    </li>
                                                    
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk26">
                                                                <label for="chk26" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Erik, me (5)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Regarding our meeting – 
                                                                <span class="teaser">That's great, see you on Thursday!</span>
                                                            </a>
                                                            <div class="date">Feb 24</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk27">
                                                                <label for="chk27" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">KanbanFlow</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-primary badge me-2">Social</span>Task assigned: Clone ARP's website
                                                                – <span class="teaser">You have been assigned a task by Alex@Work on the board Web.</span>
                                                            </a>
                                                            <div class="date">Feb 24</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk28">
                                                                <label for="chk28" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Tobias Berggren</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Let's go fishing! – 
                                                                <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                        </div>
                                                    </li>
                                                    
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk29">
                                                                <label for="chk29" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Charukaw, me (7)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Hey man – <span class="teaser">Nah man sorry i don't. Should i get it?</span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                        </div>
                                                    </li>
                                                    <li class="unread">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk30">
                                                                <label for="chk30" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">me, Peter (5)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-info badge me-2">Support</span>Home again! – <span class="teaser">That's just perfect! See you tomorrow.</span>
                                                            </a>
                                                            <div class="date">Feb 21</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk31">
                                                                <label for="chk31" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Revibe</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-danger badge me-2">Friends</span>Weekend on Revibe – 
                                                                <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                                            </a>
                                                            <div class="date">Feb 27</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk32">
                                                                <label for="chk32" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Stack Exchange</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">1 new items in your Stackexchange inbox
                                                                – <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                                            </a>
                                                            <div class="date">Feb 21</div>
                                                        </div>
                                                    </li>
        
                
                                                </ul>
                                            </div>
                                            <div class="tab-pane" id="custom-promotion" role="tabpanel">
                                                <ul class="message-list mb-0">
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk33">
                                                                <label for="chk33" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Peter, me (3)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Hello – <span class="teaser">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                            </a>
                                                            <div class="date">Mar 6</div>
                                                        </div>
                                                    </li>
                        
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk34">
                                                                <label for="chk34" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">me, Susanna (7)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-warning badge me-2">Freelance</span>Since you asked... and i'm
                                                                inconceivably bored at the train station –
                                                                <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                                            </a>
                                                            <div class="date">Mar. 6</div>
                                                        </div>
                                                    </li>
                
                                                    
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk35">
                                                                <label for="chk35" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Medium</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-primary badge me-2">Social</span>This Week's Top Stories – 
                                                                <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America’s Ego</span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk36">
                                                                <label for="chk36" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">me, Peter (2)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-info badge me-2">Support</span>Off on Thursday - 
                                                                <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4  4 mar 2014 at 5:55 pm</span>
                                                            </a>
                                                            <div class="date">Mar 4</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk37">
                                                                <label for="chk37" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Death to Stock</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Montly High-Res Photos – 
                                                                <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk38">
                                                                <label for="chk38" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Web Support Dennis</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Re: New mail settings – 
                                                                <span class="teaser">Will you answer him asap?</span>
                                                            </a>
                                                            <div class="date">Mar 7</div>
                                                        </div>
                                                    </li>
                                                    <li class="unread">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk39">
                                                                <label for="chk39" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Randy, me (5)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-success badge me-2">Family</span>Last pic over my village – 
                                                                <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                            </a>
                                                            <div class="date">5:01 am</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk40">
                                                                <label for="chk40" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Andrew Zimmer</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Mochila Beta: Subscription Confirmed
                                                                – <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                            </a>
                                                            <div class="date">Mar 8</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk41">
                                                                <label for="chk41" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Infinity HR</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Sveriges Hetaste sommarjobb –
                                                                <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                            </a>
                                                            <div class="date">Mar 8</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk42">
                                                                <label for="chk42" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Revibe</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-danger badge me-2">Friends</span>Weekend on Revibe – 
                                                                <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                                            </a>
                                                            <div class="date">Feb 27</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk43">
                                                                <label for="chk43" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Erik, me (5)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Regarding our meeting – 
                                                                <span class="teaser">That's great, see you on Thursday!</span>
                                                            </a>
                                                            <div class="date">Feb 24</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk44">
                                                                <label for="chk44" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">KanbanFlow</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-primary badge me-2">Social</span>Task assigned: Clone ARP's website
                                                                – <span class="teaser">You have been assigned a task by Alex@Work on the board Web.</span>
                                                            </a>
                                                            <div class="date">Feb 24</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk45">
                                                                <label for="chk45" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Tobias Berggren</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Let's go fishing! – 
                                                                <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk46">
                                                                <label for="chk46" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Charukaw, me (7)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Hey man – <span class="teaser">Nah man sorry i don't. Should i get it?</span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                        </div>
                                                    </li>
                                                    <li class="unread">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk47">
                                                                <label for="chk47" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">me, Peter (5)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject"><span class="bg-info badge me-2">Support</span>Home again! – <span class="teaser">That's just perfect! See you tomorrow.</span>
                                                            </a>
                                                            <div class="date">Feb 21</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk48">
                                                                <label for="chk48" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Stack Exchange</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">1 new items in your Stackexchange inbox
                                                                – <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                                            </a>
                                                            <div class="date">Feb 21</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row justify-content-end">
                            <div class="col-xl-9">
                                <div class="row my-4">
                                    <div class="col-7">
                                        Showing 1 - 20 of 1,524
                                    </div>
                                    <div class="col-5">
                                        <div class="btn-group float-end">
                                            <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-left"></i></button>
                                            <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

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

        <script src="assets/js/app.js"></script>

    </body>
</html>
