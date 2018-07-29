<?php if(count($errors->all())): ?>
    
    
                                                      

                                                          

                                                              
                                                          
                                                      
                                                
    

<?php endif; ?>

<?php if(session()->has('success')): ?>
    <div class="alert alert-info">
        <span class="help-block">
            <small class="text-success">
                <h4><?php echo e(session('success')); ?></h4>
            </small>
        </span>
    </div>
<?php endif; ?>

<?php if(session()->has('error')): ?>
    <div class="alert alert-info">
        <span class="help-block">
            <small class="text-success">
                <h4><?php echo e(session('error')); ?></h4>
            </small>
        </span>
    </div>
<?php endif; ?>