<?php $currentPage = '/';?>

<?php $__env->startSection('content'); ?>
<!-- END nav -->

<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
  <div class="row no-gutters slider-text align-items-center">
    <div class="col-md-6 ftco-animate d-flex align-items-end">
        <div class="text w-100">
          <h1 class="mb-4">Counseling For Your Better Life</h1>
          <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          <p><a href="<?php echo e(asset('/registerCustom')); ?>" class="btn btn-primary py-3 px-4">Register Now</a> <a href="#" class="btn btn-white py-3 px-4">Read more</a></p>
      </div>
    </div>
    <a href="https://vimeo.com/45830194" class="img-video popup-vimeo d-flex align-items-center justify-content-center">
        <span class="fa fa-play"></span>
    </a>
  </div>
  </div>
  </div>
  
<section class="ftco-intro">
    <div class="container">
        <div class="row no-gutters">
          <?php $__currentLoopData = $goals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-4 d-flex">
            <div class="intro color-1 d-lg-flex w-100">
                <div class="icon">
                    <span class="flaticon-employee"></span>
                </div>
                <div class="text">
                    <h2><?php echo e($item->name); ?></h2>
                    <p><?php echo e($item->discription); ?></p>
                </div>
            </div>
        </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

    <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
      
    </div>
        <div class="row">
          <?php $__currentLoopData = $brifDescriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brifDescription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-3 d-flex align-items-stretch ftco-animate">
            <div class="services-2 text-center">
                <div class="icon-wrap">
                    <div class="number d-flex align-items-center justify-content-center"><span>*</span></div>
                    <div class="icon d-flex align-items-center justify-content-center">
                      <img class="async-done" src="<?php echo e($brifDescription->image_url); ?>" alt="Cloud" data-uniqueid="58089-183259" data-guid="https://www.continuouscare.io/wp-content/uploads/2018/02/cloud-icon.png" data-path="2018/02/cloud-icon.png" data-width="32" data-height="30" data-singlew="3" data-singleh="" data-crop="" data-fixed="">
                    </div>
                </div>
                <h2><?php echo e($brifDescription->name); ?></h2>
                <p><?php echo e($brifDescription->description); ?></p>
            </div>
        </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
     
      
        </div>
    </div>
</section>



    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-3">Virtual Practice®</h2>
        <span class="subheading">A web and mobile application for health providers and organizations to engage with patients and manage their business. With built-in capabilities to support your practice's needs, the Virtual Practice® sets your business up for greater success.</span>
      </div>
    </div>
            <div class="row tabulation mt-4 ftco-animate">
              <div class="col-md-4">
                    <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                      <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li class="nav-item text-left">
                        <a class="nav-link  py-4" data-toggle="tab" href="#ser-<?php echo e($item->id); ?>" ><img src="https://www.continuouscare.io/wp-content/uploads/2016/12/patientRecord-active.png" alt=""> <?php echo e($item->name); ?></a>
                      </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                      <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="tab-pane container p-0 active " id="ser-<?php echo e($item->id); ?>">
                        <div class="img" style="background-image: url(<?php echo e($item->image_url); ?>);"></div>
                        <h3><a href="#"><?php echo e($item->name); ?></a></h3>
                        <p><?php echo e($item->description); ?></p>
                    </div> 
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="ftco-section testimony-section">
    <div class="img img-bg border" style="background-image: url(images/bg_4.jpg);"></div>
    <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          <span class="subheading">See what they have to say!</span>
        <h2 class="mb-3">Join 8000+ Healthcare Providers from 100+ countries</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <?php $__currentLoopData = $reviwes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item">
            <div class="testimony-wrap py-4">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
              <div class="text">
                <p class="mb-4"><?php echo e($item->what_say); ?></p>
                <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(<?php echo e($item->image_url); ?>)"></div>
                    <div class="pl-3">
                        <p class="name"><?php echo e($item->name); ?></p>
                        <span class="position"><?php echo e($item->jop_description); ?></span>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section bg-light " style="    padding-bottom: 0rem; padding-top: 0rem; background-color: #FFC1C4!important;">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3" style="padding-bottom: 0rem!important;">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <p style="padding-top: 1rem;font-size: x-large;">Get started using your Virtual Practice<sup>®</sup>    <a href="<?php echo e(asset('#')); ?>" class="btn btn-primary py-3 px-4">Try It Free</a> </p>
      </div>
    </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
  <div class="container">
      <div class="row">
        <div class="col-md-6 wrap-about px-md-5 ftco-animate py-5 bg-light" style="background-color: #ffffff!important;">
          <div class="heading-section">
              <span class="subheading">Welcome to Counselor</span>
            <h2 class="mb-4">Your Branded Mobile App For Patient Engagement.</h2>
      
            <p>We create a branded mobile app for your patients too! Your Virtual Practice
              <sup>®</sup> services can be available to patients on your own mobile app.</p>
          </div>
      
         </div>
          <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center">
            <img src="https://www.continuouscare.io/wp-content/uploads/2018/10/customapp-image-150.png" width="700" height="520" alt="">
          </div>
      </div>
  </div>
</section> 


    



                
 <?php $__env->stopSection(); ?>

                  
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/creaspo/Projects/continuouscare/resources/views/welcome.blade.php ENDPATH**/ ?>