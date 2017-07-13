<div>
    <div class="col-md-8 col-md-offset-2">
    <h1>Create New Post</div>
    <hr>
     <?php echo Form::open(['route' => 'posts.store']); ?>

        <?php echo e(Form::label('title','Title:')); ?>

        </br>
        <?php echo e(Form::text('title',null,array('class'=>'form-control'))); ?>

        </br>
        <?php echo e(Form::label('body','Post Body:')); ?>

        </br>
        <?php echo e(Form::textarea('body',null,array('class'=>'form-control'))); ?>

        </br>
        <?php echo e(Form::submit('Create Post')); ?>

    <?php echo Form::close(); ?>

    </div>
</div>