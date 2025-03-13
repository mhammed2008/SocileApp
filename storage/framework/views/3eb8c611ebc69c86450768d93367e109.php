<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['video']));

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

foreach (array_filter((['video']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div class="flex flex-col justify-center items-center w-60 rounded-lg  mb-10 bg-white/4 p-4  bg-white/5  hover:bg-white/10">
    <a href="/video/<?php echo e($video->id); ?>" class="flex flex-col flex-nowrap justify-center items-center gap-4 ">
        <div class="rounded-lg w-60 h-20 px-2">
            <img src="<?php echo e(asset('storage/'.$video->thumbnail_url)); ?>" class="w-60 h-32" alt="">
        </div>
        <span class="mt-10 ml-3 w-60 ">
            <?php echo e($video->title); ?>


        </span>
    </a>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('authorize',$video)): ?>
        <a href="/video/<?php echo e($video->id); ?>/edit" class="flex justify-end w-full ">
            <span class="bg-gray-700 p-1 rounded-full">
                Edit
            </span></a>
    <?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\youtube\resources\views/components/video/cred.blade.php ENDPATH**/ ?>