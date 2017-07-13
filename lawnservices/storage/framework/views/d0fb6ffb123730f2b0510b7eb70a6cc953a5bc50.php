<?php $__env->startSection('title', 'Main page'); ?>

<?php $__env->startSection('content'); ?>

<div class="row" style="margin-top: 1%;">
            <div class="col-lg-4">
                <div class="ibox-content">
                    <h2>Client's personal details</h2>
                    <ul class="todo-list m-t ui-sortable">
                        <li>                           
                            <div class="form-group ">
                                <label class="col-sm-4 control-label">Client status</label>
                                    <div class="col-sm-8 right-item">
                                        <select class="form-control m-b" name="account">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        </select>
                                    </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label">First name</label>
                                    <div class="col-sm-8 right-item" id="fist_name"><input type="text" class="form-control"></div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label">Surname</label>
                                    <div class="col-sm-8 right-item" id="surname"><input type="text" class="form-control"></div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label">Display name</label>
                                    <div class="col-sm-8 right-item" id="display_name"><input type="text" class="form-control"></div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label">Street no.</label>
                                    <div class="col-sm-8 right-item" id="street_no"><input type="text" class="form-control"></div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group ">
                                <label class="col-sm-4 control-label">Suburb</label>
                                    <div class="col-sm-8 right-item" id="Suburb">
                                        <select  class="form-control m-b" name="account">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        </select>
                                    </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label">Post code</label>
                                    <div class="col-sm-8 right-item" id="post_code"><input type="text" class="form-control"></div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label">Phone 1</label>
                                    <div class="col-sm-8 right-item" id="phone_1"><input type="text" class="form-control"></div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label">Phone 2</label>
                                    <div class="col-sm-8 right-item" id="phone_2"><input type="text" class="form-control"></div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label">Email</label>
                                    <div class="col-sm-8 right-item" id="email"><input type="text" class="form-control"></div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label">Fax</label>
                                    <div class="col-sm-8 right-item" id="fax"><input type="text" class="form-control"></div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label>Diary notes</label>
                                    <div class="right-item" id="diary_notes">
                                        <select multiple class="form-control m-b" name="account">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        </select>
                                    </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label>File notes</label>
                                    <div id="file_notes">                                                            
                                        <select multiple class="form-control m-b" name="account">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        </select>
                                    </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="ibox-content">    
                    <ul class="todo-list m-t ui-sortable">
                        <div id="exTab1" class="container">	    
                            <ul class="nav nav-pills">
                                <li class="active">
                                        <a href="#1a" data-toggle="tab">Services & Scheduling</a>
                                </li>
                                <li >
                                    <a href="#2a" data-toggle="tab">Billing details</a>
                                </li>
                                <li class="">
                                    <a href="#3a" data-toggle="tab">Future Jobs</a>
                                </li>
                                <li class="">
                                    <a href="#4a" data-toggle="tab">Past jobs</a>
                                </li>
                                <li class="">
                                    <a href="#5a" data-toggle="tab">Previous invoices</a>
                                </li>
                                <li class="">
                                    <a href="#6a" data-toggle="tab">Payments</a>
                                </li>
                                <li class="">
                                    <a href="#7a" data-toggle="tab">Attached Client(s)</a>
                                </li>
                            </ul>
                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="1a">
                                    <?php echo $__env->make('layouts.btn_services_scheduling', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </div>
                                <div class="tab-pane" id="2a">
                                    <?php echo $__env->make('layouts.btn_billing_details', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </div>
                                <div class="tab-pane" id="3a">
                                    <?php echo $__env->make('layouts.btn_future_jobs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </div>
                                <div class="tab-pane" id="4a">
                                    <?php echo $__env->make('layouts.btn_past_jobs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </div>
                                <div class="tab-pane" id="5a">
                                    <?php echo $__env->make('layouts.btn_previous_invoices', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </div>
                                <div class="tab-pane" id="6a">
                                    <?php echo $__env->make('layouts.btn_payments', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </div>
                                <div class="tab-pane" id="7a">
                                    <h3>We use css to change the background color of the content to be equal to the tab</h3>
                                </div>
                                <div class="tab-pane" id="8a">
                                    <h3>We use css to change the background color of the content to be equal to the tab</h3>
                                </div>
                            </div>
                            </div>
                    </div>
   
                    <ul>

        </div>
    </div>
    <?php
        // //Replace the line with require "vendor/autoload.php" if you are using the Samples from outside of _Samples folder
        // include('config.php');

        // use QuickBooksOnline\API\Core\ServiceContext;
        // use QuickBooksOnline\API\DataService\DataService;
        // use QuickBooksOnline\API\PlatformService\PlatformService;
        // use QuickBooksOnline\API\Core\Http\Serialization\XmlObjectSerializer;
        // use QuickBooksOnline\API\Facades\Customer;

        // // Prep Data Services
        // $dataService = DataService::Configure(array(
        //     'auth_mode' => 'oauth1',
        //         'consumerKey' => "qyprd6VgDJ1GbpWQfSQjmIWFB4dSpE",
        //         'consumerSecret' => "0MKQFPDugkTLG2TtEv8XLRbE3SNxazmEfn5JC5z1",
        //         'accessTokenKey' => "qyprdVV7Le8vViptxNtvfQaLJ9smCesOc6ZrvGx5z5qHSfJE",
        //         'accessTokenSecret' => "k9vAVGAU12GJh3n8805Najnb9zkxO9ZUyLgApgJk",
        //         'QBORealmID' => "193514527957689",
        //         'baseUrl' => "https://sandbox-quickbooks.api.intuit.com"
        // ));

        // // Run a query
        // $entities = $dataService->Query("SELECT * FROM Account");
        // $error = $dataService->getLastError();
        // if ($error != null) {
        //     echo "The Status code is: " . $error->getHttpStatusCode() . "\n";
        //     echo "The Helper message is: " . $error->getOAuthHelperError() . "\n";
        //     echo "The Response message is: " . $error->getResponseBody() . "\n";
        //     exit();
        // }
        // // Echo some formatted output
        // $i = 0;
        // foreach ($entities as $oneCustomer) {
        // //var_dump($oneCustomer);
        // if($oneCustomer->AccountSubType=="ServiceFeeIncome"){
        //     echo "Customer[$i] Name: {$oneCustomer->Name}, Type: {$oneCustomer->AccountType}, Detail Type: {$oneCustomer->AccountSubType}"."<br>";
        //     $i++;
        // }
        // }

    ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>