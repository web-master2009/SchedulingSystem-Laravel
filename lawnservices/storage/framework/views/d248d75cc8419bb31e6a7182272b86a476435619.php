<ul class="todo-list m-t ui-sortable">
    <li>                           
        <div class="form-group ">
            <label class="col-sm-2 control-label">Service</label>
            <div class="col-sm-4 right-item">
                <select id="select_schedule_service" class="form-control m-b">
                    <?php
                        $html = '';
                            foreach($services as $service){
                                $html.="<option value='{$service->id}'>{$service->service}</option>";
                            }
                        echo $html;
                    ?>
                </select>
            </div>
            <label class="col-sm-3 control-label">Price(GST inc)</label>
            <div class="col-sm-3 right-item" id="fist_name"><input id="txt_schedule_price_gst" type="text" class="form-control"></div>
        </div>
    </li>
    <li>
            <div class="form-group"><label class="col-sm-2" >Job notes</label>
                <div class="form-group">
                    <textarea id="txt_schedule_job_notes" class="form-control"></textarea>
                </div>
            </div>
    </li>
    <li>                           
        <div class="form-group ">
            <label class="col-sm-2 control-label">Job type</label>
            <div class="col-sm-4 right-item">
                <select id="select_schedule_job_type" class="form-control m-b">
                    <option selected value="1">Regular</option>
                    <option value="2">Default</option>
                </select>
            </div>
            <label class="col-sm-3 control-label">Start Date(Base date)</label>
            <div class="col-sm-3 right-item" id="fist_name">
                <input id="txt_schedule_start_date" class="form-control datepicker-only-init" placeholder="Interval" style="" type="text">
            </div>
        </div>
    </li>
    <li>                           
        <div class="form-group">
            <label class="col-sm-2 control-label">Frequency</label>
            <div class="col-sm-4 right-item">
                <select id="select_schedule_frequency" class="form-control m-b">             
                    <option selected  value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                </select>
            </div>
            <label class="col-sm-3 control-label">Employee</label>
            <div class="col-sm-3 right-item" id="fist_name">
                <select id="select_schedule_employee" class="form-control m-b">
                    <option selected>Josh</option>
                </select>
        </div>
    </li>
    </ul>
    <ul class="todo-list m-t ui-sortable">
    <li>                           
        <div class="form-group ">
            <div class="col-sm-4 right-item" id="fist_name">
                    <div class="text-right">
                    <a id="a_add_new_service" data-toggle="modal" class="btn btn-secondary" href="#modal-form">Add new Service?</a>
                    </div>
                        <?php echo $__env->make('layouts.add_new_service_dialog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-sm-8 right-item" id="fist_name">
                <button id="btn_create_schedule" type="button" class="btn btn-secondary col-sm-10"><b>Create Schedule based on the 
                services shown above...
                </b></button>
            </div>
        </div>
    </li>
    <!--<li>
        <div class="form-group ">
            <div class="col-sm-12 right-item text_align_center" id="fist_name">
                <button type="button col-sm-8" class="btn btn-secondary"><b>Create Schedule based on the 
                services shown above...
                </b></button>
            </div>
        </div>
    </li>-->
<ul>