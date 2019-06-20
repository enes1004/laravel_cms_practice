Has content groups: <br>
<?php foreach( ContentInfo::all()  as $content_info): ?>
<?php if(ProductService1::where('id',$product_id)->first()->linked_content_groups($content_info->id)): ?>
<?php foreach( ProductService1::where('id',$product_id)->first()->linked_content_groups($content_info->id)->get() as $content_group): ?>
<p><?php echo e($content_group->description); ?> </p>
<?php endforeach; ?>
<?php endif; ?>
<?php endforeach; ?>
