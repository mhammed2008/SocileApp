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
     <?php $__env->slot('title', null, []); ?> 
        <?php echo e($video->title); ?>

     <?php $__env->endSlot(); ?>
    <div class="w-full flex-col">
        <div>
            <video src="<?php echo e(asset('storage/'.$video->video)); ?>" class="w-3/4 max-sm:w-full max-sm:h-[50vh]" controls></video>
            <p class="ml-6 mb-6"><?php echo e($video->title); ?></p>
            <a href="/channel/<?php echo e($video->user->channel_slug); ?>" class="flex flex-row ml-4 gap-4">
                <img src="<?php echo e(asset('storage/'.$video->user->user_image)); ?>" class="rounded-full w-10 h-10" alt="<?php echo e('image url: '. $video->user->user_image); ?>">
                <p class="mt-2">
                    <?php echo e($video->user->name); ?>

                </p>
            </a>
        </div>

        <div>
            <div class="w-[70%] max-sm:w-[90%] flex flex-row justify-start items-start mt-6 bg-gray-800 p-3 rounded-3xl ml-3 " >
                <form method="post" action="/comment" class="w-full">
                    <?php echo csrf_field(); ?>
                    <label for="comment">Comment</label>
                    <textarea name="comment" id="comment"  rows="2" class="bg-black w-full"></textarea>
                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('comment')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('comment'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                    <input type="hidden" value="<?php echo e($video->id); ?>" name="video">
                    <button type="submit" class="mt-4 bg-gray-900 p-3 text-sm rounded-3xl">Post Comment</button>
                </form>
            </div>

            <?php $__currentLoopData = $video->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginale59f50329f1fe309f06e1fbe4da93522 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale59f50329f1fe309f06e1fbe4da93522 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.video.comment','data' => ['comment' => $comment]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('video.comment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['comment' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($comment)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale59f50329f1fe309f06e1fbe4da93522)): ?>
<?php $attributes = $__attributesOriginale59f50329f1fe309f06e1fbe4da93522; ?>
<?php unset($__attributesOriginale59f50329f1fe309f06e1fbe4da93522); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale59f50329f1fe309f06e1fbe4da93522)): ?>
<?php $component = $__componentOriginale59f50329f1fe309f06e1fbe4da93522; ?>
<?php unset($__componentOriginale59f50329f1fe309f06e1fbe4da93522); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\youtube\resources\views/video/show.blade.php ENDPATH**/ ?>