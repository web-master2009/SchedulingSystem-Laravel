<div id="edit_job_form" class="modal fade" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:50%">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 b-r">
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
                                    <div class="form-group ">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Status</label>
                                            <div class="col-sm-10 right-item">
                                                <select id="select_future_job_status" class="form-control">
                                                    <option value="1" selected>PENDING</option>
                                                    <option value="2">COMPLETED</option>
                                                    <option value="3">CANCELLED</option>
                                                </select>    
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="form-group ">
                                        <div class="row">
                                                <label class="col-sm-2 control-label">Client</label>
                                                <div class="col-sm-4 right-item">
                                                    <select id="select_future_job_client" class="form-control">
                                                        <?php
                                                        $html='';
                                                        foreach($clients as $client){
                                                            $html.= "<option value='{$client->id}'>{$client->displayName}</option>";
                                                        }
                                                        echo $html;
                                                        ?>
                                                    </select>    
                                                </div>
                                                <div class="col-sm-6 right-item">
                                                    <a data-toggle='modal' class="btn btn-secondary" href='#future_addpayment_form'>Add payment</a>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Date of job</label>
                                            <div class="col-sm-4 right-item">
                                                <input id="txt_future_job_edit_date" class="form-control datepicker-only-init caledar" placeholder="Interval" style="" type="text">
                                            </div>
                                            <label class="col-sm-2 control-label">Employee</label>
                                            <div class="col-sm-4 right-item">
                                                <select id="select_future_job_edit_emplyee" class="form-control">
                                                    <option value="josh">Josh</option>
                                                </select>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Job Description</label>
                                            <div class="col-sm-10 right-item">
                                                <input id="txt_future_job_description" class="form-control" type="text">
                                            </div>
                                            </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2" >Notes</label>
                                        <div class="form-group">
                                            <textarea id="txt_future_notes" class="form-control"></textarea>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>    
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>List of services(click an item to select)</h5>
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
                                    <table class="table"id="table_list_service">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>#</th>
                                                <th>Service</th>
                                                <th>Price</th>
                                                <th>Revenue Account</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input class='sel_list_service_active_radio' name='sel_job_active_radio' value='' type='radio'>
                                                </td>
                                                <td>1</td>
                                                <td>ee</td>
                                                <td>ff</td>
                                                <td>ff</td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                        <div class="col-sm-12 text_align_left">
                                            <label for="lable_future_total" >Total = $60.00</label>
                                            <label id='lable_future_total'></label>
                                        </div>
                                </div>  
                            </div> 
                        </div>
                        <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Service</label>
                                    <div class="col-sm-4 right-item">
                                        <select id="select_future_job_add_service" class="form-control">
                                            <option value="josh">Josh</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 control-label">Price(GST inc.)</label>
                                    <div class="col-sm-4 right-item">
                                        <input id="txt_future_job_add_price" class="form-control" placeholder="$0.00" style="" type="text">
                                    </div>
                                </div>
                        </div>
                        <div class="form-group">   
                            <div class="row">
                                        <div class="col-sm-12 text_align_center" id="fist_name">
                                            <button id="select_future_insert_as" class="btn btn-secondary">Insert as new service</button>
                                            <button id="select_future_Update_service" class="btn btn-secondary">Update service</button>
                                            <button id="select_future_Remove_service" class="btn btn-secondary">Remove service</button>
                                        </div>
                            </div>  
                        </div>
                        <div class="form-group">     
                            <div class="row">
                                <div class="col-sm-6">                          
                                        <button  id='btn_future_payment_save' class="btn btn-primary pull-right col-sm-4">Save</button>
                                </div>     
                                    <div class="col-sm-6">
                                        <button id="btn_cancel" class="btn btn-primary col-sm-4">Cancel</button>
                                    </div>
                            </div>
                        </div>       
                    </div>
                </div>
            </div>
        </div> 
     </div>    
</div>
<div id="future_addpayment_form" class="modal fade" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:50%">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 b-r">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Payment details</h5>
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
                                    <div class="form-group ">
                                        <div class="row">
                                                <label class="col-sm-2 control-label">Received from</label>
                                                <div class="col-sm-4 right-item">
                                                    <select id="select_future_received_from" class="form-control">
                                                        <?php
                                                        $html='';
                                                        foreach($clients as $client){
                                                            $html.= "<option value='{$client->id}'>{$client->displayName}</option>";
                                                        }
                                                        echo $html;
                                                        ?>
                                                    </select>    
                                                </div>
                                                <div class="col-sm-6 right-item">
                                                    <a data-toggle='modal' class="btn btn-secondary" href='#future_addpayment_form'>Add payment</a>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Payment amount</label>
                                            <div class="col-sm-3 right-item">
                                                <input id="txt_future_job_payment_amount" class="form-control" placeholder="$0.00" style="" type="text">
                                            </div>
                                            <label class="col-sm-2 control-label">GST inc</label>
                                            <div class="col-sm-3 right-item">
                                                <input id="txt_future_job_gst_inc" class="form-control" placeholder="$0.00" style="" type="text">
                                            </div>
                                            <div class="col-sm-2 right-item">
                                                <input id="txt_future_job_tax_exempt" type="checkbox">Tax Exempt?
                                            </div>    
                                        </div>
                                     </div>   
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Date received</label>
                                            <div class="col-sm-4 right-item">
                                                <input id="txt_future_job_payment_date" class="form-control datepicker-only-init caledar"  style="" type="text">
                                            </div>
                                            <label class="col-sm-2 control-label">Paid by</label>
                                            <div class="col-sm-4 right-item">
                                                <select id="select_future_job_paid_by" class="form-control">
                                                    <option value="1">CASH</option>
                                                    <option value="2">BANKCARD</option>
                                                    <option value="3">CHEQUE</option>
                                                    <option value="4">CREDIT</option>
                                                    <option value="5">DIRECT DEBIT</option>
                                                    <option value="6">VISA</option>
                                                    <option value="7">WRITE OFF</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2" >Notes</label></div>
                                    <div class="form-group">
                                        <textarea id="txt_future_payment_notes" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">     
                                        <div class="row">
                                            <div class="col-sm-6">                          
                                                    <button  id='btn_future_payment_save' class="btn btn-primary pull-right col-sm-4">Save</button>
                                            </div>     
                                             <div class="col-sm-6">
                                                    <button id="btn_cancel" class="btn btn-primary col-sm-4">Cancel</button>
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

