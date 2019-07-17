<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <?php if($already_registered): ?> Already Registered <?php else: ?> Registered to <?php endif; ?> <?php echo e(Service::where('id',$service_id)->first()->name); ?>

                    <br>
                    Now, register for products
                    <br>
                      <?php if($already_registered_product): ?><br> Already Registered to product<br> <?php endif; ?>

                    <?php foreach(Service::where('id',$service_id)->first()->products()->get() as $product): ?>
                    <span><?php echo e($product->description); ?> : </span>
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/products/'.$service_id.'/'.$product->id.'/register_done')); ?>">
                    <input type="hidden" name="service_id" value="<?php echo e($service_id); ?>" />
                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>" />
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                    <?php $product_id=$product->id; ?>
                    <?php echo $__env->make('products.'.mb_strtolower(Service::where('id',$service_id)->first()->name).'.linked_product', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <br>
                    <button type="submit">Register</button>
                    </form>
                    <?php endforeach; ?>
                </div>
                <div>
                  Your purchase status for this service:<br>
                  <ul>
                  <?php foreach(Auth::user()->purchases($service_id)->get() as $purch ): ?>
                  <li><?php echo e($purch->name.": ".$purch->pivot->status); ?></li>
                  <?php endforeach; ?>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>