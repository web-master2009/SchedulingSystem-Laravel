   <ul class="todo-list m-t ui-sortable">
            <li>                           
                <div class="form-group ">
                    <label class="col-sm-2 control-label">Service</label>
                    <div class="col-sm-4 right-item">
                        <select class="form-control m-b">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        </select>
                    </div>
                    <label class="col-sm-3 control-label">Price(GST inc)</label>
                    <div class="col-sm-3 right-item" id="fist_name"><input type="text" class="form-control"></div>
                </div>
            </li>
            <li>
                    <div class="form-group"><label class="col-sm-2" >Job notes</label>
                            <div class="right-item" id="diary_notes">
                                <select multiple="" class="form-control m-b" name="account">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                    </div>
            </li>
            <li>                           
                <div class="form-group ">
                    <label class="col-sm-2 control-label">Job type</label>
                    <div class="col-sm-4 right-item">
                        <select class="form-control m-b">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        </select>
                    </div>
                    <label class="col-sm-3 control-label">Start Date(Base date)</label>
                    <div class="col-sm-3 right-item" id="fist_name"><input type="text" class="form-control"></div>
                </div>
            </li>
            <li>                           
                <div class="form-group">
                    <label class="col-sm-2 control-label">Frequency</label>
                    <div class="col-sm-4 right-item">
                        <select class="form-control m-b">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        </select>
                    </div>
                    <label class="col-sm-3 control-label">Employee</label>
                    <div class="col-sm-3 right-item" id="fist_name"><input type="text" class="form-control"></div>
                </div>
            </li>
            </ul>
            <ul class="todo-list m-t ui-sortable">
            <li>                           
                <div class="form-group ">
                    <div class="col-sm-6 right-item     " id="fist_name">
                        <!--<button type="button" class="btn btn-secondary">Add new Service?</button>-->
                        <!-- Add new Service? -->
                            <div class="text-right">
                            <a data-toggle="modal" class="btn btn-secondary" href="#modal-form">Add new Service?</a>
                            </div>
                                <?php echo $__env->make('layouts.add_new_service_dialog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                    <div class="col-sm-6 right-item" id="fist_name">
                        <button type="button" class="btn btn-secondary">Remove Service?</button>
                    </div>
                </div>
            </li>
            <li>
                <div class="form-group ">
                    <div class="col-sm-12 right-item text_align_center" id="fist_name">
                        <button type="button col-sm-8" class="btn btn-secondary"><b>Create Schedule based on the 
                        services shown above...
                        </b></button>
                    </div>
                </div>
            </li>
        <ul>