<script defer src="https://cdn.jsdelivr.net/npm/@flasher/flasher@1.2.4/dist/flasher.min.js"></script>
<?php if(session()->has('success')): ?>
    <?php echo e(session()->get('success')); ?>

<?php endif; ?>
<?php if(session()->has('error')): ?>
    <?php echo e(session()->get('error')); ?>

<?php endif; ?>


<script>
    function error_msg(mes) {
        flasher.error(mes);
    }
    function warning_msg(mes) {
        flasher.warning(mes);
    }
    function success_msg(mes) {
        flasher.success(mes);
    }
    function info_msg(mes) {
        flasher.info(mes);
    }
</script>
<?php /**PATH C:\xampp\htdocs\medi-world-app\resources\views/layouts/admin/flasher.blade.php ENDPATH**/ ?>