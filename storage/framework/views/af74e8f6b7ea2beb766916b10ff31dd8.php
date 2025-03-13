<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="flex flex-col justify-center items-center w-[90%]">
        
        <section class="w-[90%] flex flex-row justify-start items-start">
            <div class="w-[90%] flex flex-row ">
                <img src="<?php echo e(asset('storage/'.$user->user_image)); ?>"  class="rounded-full max-sm:w-20" alt="">

                <p class="ml-3 mt-14 max-sm:mt-6"><?php echo e($user->channel); ?></p>
            </div>
        </section>

        <div class="w-full border border-gray-400 mt-10 mb-10"></div>

        <div class="flex flex-row flex-wrap  justify-start items-start max-sm:justify-center max-sm:items-center  w-[90%] h-auto  gap-8">
            <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginaldba44c5fbce8d7e91fbd864c10912cbe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldba44c5fbce8d7e91fbd864c10912cbe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.video.cred','data' => ['video' => $video]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('video.cred'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['video' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($video)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldba44c5fbce8d7e91fbd864c10912cbe)): ?>
<?php $attributes = $__attributesOriginaldba44c5fbce8d7e91fbd864c10912cbe; ?>
<?php unset($__attributesOriginaldba44c5fbce8d7e91fbd864c10912cbe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldba44c5fbce8d7e91fbd864c10912cbe)): ?>
<?php $component = $__componentOriginaldba44c5fbce8d7e91fbd864c10912cbe; ?>
<?php unset($__componentOriginaldba44c5fbce8d7e91fbd864c10912cbe); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="w-[90%]">
            <?php echo e($videos->links()); ?>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\youtube\resources\views/channel/index.blade.php ENDPATH**/ ?>