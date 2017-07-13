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
    <div class="ibox-content">
        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th>#</th>
                <th>Job date</th>
                <th>Job description</th>
                <th>Price</th>
                <th>Notes</th>
                <th>Status<th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                    $i=1;
                $html = '';
                foreach($jobs as $job){
                    if($job->status=='1') $status='PENDING';
                    $html.= "<tr><td><a data-toggle='modal' href='#edit_job_form'><input class='sel_job_active_radio' name='sel_job_active_radio' value='{$job->id}' type='radio'></a></td>".
                                "<td>{$i}</td>".                        
                                "<td>{$job->jobDate}</td>".
                                "<td>{$job->serviceCode}</td>".
                                "<td>{$job->price}</td>".
                                "<td>{$job->notes}</td>".
                                "<td>{$status}
                                     <input id='hidden_future_clientId' type='hidden' value='{$job->clientId}'>
                                     <input id='hidden_future_employeeId' type='hidden' value='{$job->employeeId}'>
                                     <input id='hidden_future_defaultGLAccount' type='hidden' value='{$job->defaultGLAccount}'>
                                </td>";
                    $i++;
                }
                echo $html;
                ?>
            </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-sm-12 text_align_center" id="fist_name">
                <button class="btn btn-secondary">Add Job</button>
                <button class="btn btn-secondary">Add a visit</button>
                <button class="btn btn-secondary">Edit job/visit</button>
                <button class="btn btn-secondary">Delete</button>
                <button class="btn btn-secondary">Print</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text_align_center" id="fist_name"><button class="btn btn-secondary">Set job prices for client who pays monthly</button></div>
        </div> 
    </div>
</div>
<!-- form part-->
<?php echo $__env->make('layouts.future_job_select_editjobform', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  
                     