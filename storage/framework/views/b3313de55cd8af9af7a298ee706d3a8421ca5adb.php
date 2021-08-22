<?php $__env->startSection('content'); ?>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <p>You are !</p>
                <a href="<?php echo e(asset('/loginCustom')); ?>"><input type="submit" name="" value="Login" /><br /></a>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">


                    <li class="nav-item <?php echo e(request()->is('#home') ? 'active' : ''); ?>">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Patient</a>
                    </li>

                    <li class="nav-item <?php echo e(request()->is('#profile') ? 'active' : ''); ?>">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Doctor</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <?php $currentPage = 'home'; ?>
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Apply as a Patient</h3>
                        <form action="<?php echo e(asset('/registerCustom')); ?>" method="POST">
                            <div class="row register-form">
                                <?php echo csrf_field(); ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Name *" value=""
                                            name="name" id="name" />
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" value=""
                                            name="password" id="password" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password *"
                                            value="" />
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender_id" id="1" value=1 checked>
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender_id" id="2" value=2>
                                                <span>Female </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" value=""
                                            name="email" id="email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="10" class="form-control"
                                            placeholder="Your Phone *" value="" name="user_phone" id="user_phone" />
                                    </div>
                                    <input type="submit" class="btnRegister" value="Register" />
                                </div>
                            </div>
                    </div>
                    </form>


                    
                    <?php $currentPage = 'profile'; ?>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Apply as a Doctor</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <form action="<?php echo e(asset('/doctor')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" value=""
                                            name="name" id="name" />
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email *" value="" name="email"
                                            id="email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="10" class="form-control"
                                            placeholder="Your Phone *" value="" name="user_phone" id="user_phone" />
                                    </div>


                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value=""
                                        name="password" id="password" />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender_id" id="1" value=1 checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender_id" id="2" value=2>
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>


                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                            </form>
                        </div>
                    </div>
                    <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
            </div>
        </div>
    </div>
    
            <?php $__env->stopSection(); ?>
            <script>
               window.localStorage.setItem('userId', JSON.stringify(userId));  
            </script>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/creaspo/Projects/continuouscare/resources/views/register.blade.php ENDPATH**/ ?>