    <?php $layout->viewContext->mergeIntoNewEnvironment($__env); ?>

    <?php $__env->startComponent($layout->view, $layout->params); ?>
        <?php $__env->slot($layout->slotOrSection); ?>
            <?php echo $content; ?>

        <?php $__env->endSlot(); ?>

        <?php
        // Manually forward slots defined in the Livewire template into the layout component...
        foreach ($layout->viewContext->slots[-1] ?? [] as $name => $slot) {
            $__env->slot($name, attributes: $slot->attributes->getAttributes());
            echo $slot->toHtml();
            $__env->endSlot();
        }
        ?>
    <?php echo $__env->renderComponent(); ?><?php /**PATH /var/www/5a5b779e-2ce1-449e-8f4f-cde8aa60fa21/storage/framework/views/4943bc92ebba41e8b0e508149542e0ad.blade.php ENDPATH**/ ?>