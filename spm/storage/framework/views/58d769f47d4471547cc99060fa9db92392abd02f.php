<?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <b><h3 class="card-header" style="text-align:center">Workflow</h3></b>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <h4>Step 1</h4> 
                        <p>Students are interviewed by the prospective employer.</p>
                    <h4>Step 2</h4> 
                        <p>If selected student and employer fills up Internship Acceptance form (Form I-1) and supervisor e-mails the form across to Ind. Training Manager</p>
                    <h4>Step 3</h4> 
                        <p>Industry training manager acknowledges the acceptance of Form I-1. Now the student is officially registered  for internship</p>
                    <h4>Step 4</h4> 
                        <p>Students are required to maintain Form I-3 (Industry Training Daily Diary)</p>
                    <h4>Step 5</h4> 
                        <p>Industry supervisor who directly looks into student’s work evaluates the students on weekly basis on the Form I-3 and attests the form monthly basis.</p>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.formsNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>