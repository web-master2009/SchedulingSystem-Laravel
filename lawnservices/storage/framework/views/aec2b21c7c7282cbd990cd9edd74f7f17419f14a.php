
<div id="modal-form" class="modal fade" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:50%">
        <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 b-r">
                        <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Click on the list to select a service to update/delete</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div id="div_table" class="ibox-content">
                            <table class="table " id="table_services">
                                <thead>
                                <tr>
                                    <th><th>
                                    <th>#</th>
                                    <th>Service</th>
                                    <th>Service code</th>
                                    <th>Default Ledger Account</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=1;
                                $html = '';
                                    foreach($services as $service){
                                        $st = $service->status=='1'?'Regular':'Default';
                                        $html.="<tr><td><input name='sel_radio' class='sel_radio' type='radio' value='{$service->id}'><td>".
                                                "<td>{$i}</td>".
                                                "<td>{$service->service}</td>".
                                                "<td>{$service->serviceCode}</td>".
                                                "<td>{$service->defaultGLAccount}</td>".
                                                "<td>{$st}</td></tr>";
                                            $i++;
                                    }
                                    echo $html;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Basic form</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group ">
                                        <div class="row">
                                            <label class="col-sm-4 control-label">Service</label>
                                            <div class="col-sm-6 right-item"><input id="txt_service" type="text" class="form-control"></div>
                                        </div>
                                    </div>  
                                    <div class="form-group ">
                                        <div class="row">
                                            <label class="col-sm-4 control-label">Service code</label>
                                            <div class="col-sm-6 right-item"><input id="txt_service_code" type="text" class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <label class="col-sm-4 control-label">Default GL Account</label>
                                            <div class="col-sm-6 right-item" id="fist_name">
                                                <select id="select_gl_account" class="form-control">
                                                    <option></option>
                                                    <?php
                                                        // Echo some formatted output
                                                        $i = 0;
                                                        foreach ($entities as $oneCustomer) {
                                                            //var_dump($oneCustomer);
                                                            if($oneCustomer->AccountSubType=="ServiceFeeIncome"){
                                                                echo "<option value='{$oneCustomer->Name}'>{$oneCustomer->Name}</option>";
                                                                $i++;
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Regular</label>
                                            <div class="col-sm-2 right-item"><input type="radio" checked value="1" name="status" class="form-control"></div>
                                            <label class="col-sm-3 control-label">Default</label>
                                            <div class="col-sm-2 right-item"><input type="radio" value="2" name="status" class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">    
                                        <div class="row" class="text-center">
                                            <div class="col-sm-3" id="fist_name"><button id="btn_add_as_new" class="btn btn-secondary">Add as new</button></div>
                                            <div class="col-sm-3" id="fist_name"><button id="btn_service_update" class="btn btn-secondary">Update</button></div>
                                            <div class="col-sm-3" id="fist_name"><button id="btn_service_delete" class="btn btn-secondary">Delete</button></div>
                                            <div class="col-sm-3" id="fist_name"><button id="btn_clear_fields" class="btn btn-secondary">Clear fields</button></div>
                                        </div>
                                     </div>     
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6" id="fist_name">  
                                        <div class="text-center">
                                            <a data-toggle="modal" class="btn btn-primary" href="#modal1-form">Form in simple modal box</a>
                                        </div>
                                     </div>     
                                    <div class="col-sm-6" id="fist_name"><button id='btn_download_services' class="btn btn-primary">Download services</button></div>
                                </div>                   
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    
                </div>
        </div>
    </div>
</div>  
<div id="modal1-form" class="modal fade" aria-hidden="true" style="display: none;">
<div class="modal-dialog" style="width:50%">
    <div class="modal-content">
        <div class="modal-body">
            <div class="row">
                    <div class="ibox-content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NAME</th>
                                    <th>TYPE</th>
                                    <th>DETAIL TYPE</th>
                                    <th>QUICKBOOKS BALANCE</th>
                                    <th>BANK BALANCE</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php
                                    // Echo some formatted output
                                    $i = 1;
                                    foreach ($entities as $oneCustomer) {
                                        //var_dump($oneCustomer);
                                        if($oneCustomer->AccountSubType=="ServiceFeeIncome"){
                                            echo "<tr><td>{$i}</td>".
                                                 "<td>{$oneCustomer->Name}</td>".
                                                 "<td>{$oneCustomer->AccountType}</td>".
                                                 "<td>{$oneCustomer->AccountSubType}</td>".
                                                 "<td>{$oneCustomer->CurrentBalance}</td>".
                                                 "<td>{$oneCustomer->CurrentBalanceWithSubAccounts}</td></tr>";
                                            $i++;
                                        }
                                    }
                                 ?>
                            </tbody>
                        </table>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>                       