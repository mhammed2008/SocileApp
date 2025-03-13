<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['comment']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['comment']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div class="w-[40%] max-sm:w-[90%] flex flex-col justify-start items-start mt-6 bg-gray-800 p-3 rounded-3xl ml-3">
    <div class="flex flex- mb-3">
        <img src="<?php echo e(asset('storage/'. $comment->user->user_image)); ?>" class="w-10 h-10 rounded-full" alt="">
        <p class="ml-3 mt-1"><?php echo e($comment->user->name); ?></p>
    </div>
    <p class="ml-3">
        <?php echo e($comment->comment); ?>    </p>
</div><?php /**PATH C:\xampp\htdocs\youtube\resources\views/components/video/comment.blade.php ENDPATH**/ ?>