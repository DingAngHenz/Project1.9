<?php $__env->startComponent('mail::message'); ?>
# Your order has been fullfilled! 

Thank you for your purchase with us! Track your order at the order detail page now!


<?php $__env->startComponent('mail::button', ['url' => 'http://localhost:8000/order']); ?>
Track your order
<?php echo $__env->renderComponent(); ?>

Sincerely,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\Users\user\Desktop\SCHOOL\project1.9\resources\views/emails/fulfillment.blade.php ENDPATH**/ ?>