<div id="menu_add_form" class="modal fade" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:70%">
        <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 b-r">
                        <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Click on the list to select a client to update/delete</h5>
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
                            <table class="table " id="table_clients">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>#</th>
                                    <th>Client Status</th>
                                    <th>First Name</th>
                                    <th>Surname</th>
                                    <th>Diplay Name</th>
                                    <th>Street no.</th>
                                    <th>Street</th>
                                    <th>Suburb</th>
                                    <th>Post Code</th>
                                    <th>Phone1</th>
                                    <th>Phone2</th>
                                    <th>Email</th>
                                    <th>Fax</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=1;
                                        $html = '';
                                        foreach($clients as $client){
                                             $st = $client->active=='1'?'Active':'Inative';
                                                $html.= "<tr><td><input class='sel_client_active_radio' name='sel_client_active_radio' value='{$client->id}' type='radio'></td>".
                                                "<td>{$i}</td>".
                                                "<td>{$st}</td>".
                                                "<td>{$client->firstName}</td>".
                                                "<td>{$client->surname}</td>".
                                                "<td>{$client->displayName}</td>".
                                                "<td>{$client->streetNo}</td>".
                                                "<td>{$client->street}</td>".
                                                "<td>{$client->suburb}</td>".
                                                "<td>{$client->postCode}</td>".
                                                "<td>{$client->phone1}</td>".
                                                "<td>{$client->phone2}</td>".
                                                "<td>{$client->email}</td>".
                                                "<td>{$client->fax}</td>";
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
                                            <label class="col-sm-2 control-label">First Name</label>
                                            <div class="col-sm-4 right-item"><input id="txt_client_firstname" type="text" class="form-control"></div>
                                            <label class="col-sm-2 control-label">Surname Name</label>
                                            <div class="col-sm-4 right-item"><input id="txt_client_surname" type="text" class="form-control"></div>
                                        </div>
                                    </div>  
                                    <div class="form-group ">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Display name</label>
                                            <div class="col-sm-4 right-item"><input id="txt_client_displayname" type="text" class="form-control"></div>
                                            <label class="col-sm-2 control-label">Active</label>
                                            <div class="col-sm-4 right-item">
                                                <select id="select_client_active" class="form-control">
                                                    <option selected value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Street no.</label>
                                            <div class="col-sm-4 right-item"><input id="txt_client_streetno" type="text" class="form-control"></div>
                                            <label class="col-sm-2 control-label">Street</label>
                                            <div class="col-sm-4 right-item"><input id="txt_client_street" type="text" class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Suburb</label>
                                            <div class="col-sm-4 right-item"><input id="txt_client_suburb" type="text" class="form-control"></div>
                                            <label class="col-sm-2 control-label">Post Code</label>
                                            <div class="col-sm-4 right-item"><input id="txt_client_postcode" type="text" class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Phone 1</label>
                                            <div class="col-sm-4 right-item"><input id="txt_client_phone1" type="text" class="form-control"></div>
                                            <label class="col-sm-2 control-label">Phone 2</label>
                                            <div class="col-sm-4 right-item"><input id="txt_client_phone2" type="text" class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-4 right-item"><input id="txt_client_email" type="text" class="form-control"></div>
                                            <label class="col-sm-2 control-label">Fax</label>
                                            <div class="col-sm-4 right-item"><input id="txt_client_fax" type="text" class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">    
                                        <div class="row" class="text-center">
                                            <div class="col-sm-3" id="fist_name"><button id="btn_client_add_as_new" class="btn btn-secondary">Add as new</button></div>
                                            <div class="col-sm-3" id="fist_name"><button id="btn_client_update" class="btn btn-secondary">Update</button></div>
                                            <div class="col-sm-3" id="fist_name"><button id="btn_client_delete" class="btn btn-secondary">Delete</button></div>
                                            <div class="col-sm-3" id="fist_name"><button id="btn_client_clear_fields" class="btn btn-secondary">Clear fields</button></div>
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
    </div>
</div>               