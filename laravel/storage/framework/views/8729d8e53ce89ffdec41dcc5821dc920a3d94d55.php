Has content groups: <br>
<?php foreach( ContentInfo::all()  as $content_info): ?>
<?php if(ProductService1::where('id',$product_id)->first()->linked_content_groups($content_info->id)): ?>
<?php foreach( ProductService1::where('id',$product_id)->first()->linked_content_groups($content_info->id)->get() as $content_group): ?>
<p><?php echo e($content_group->description); ?> </p>
<p>it has</p>
<?php $first_id=true; ?>
<?php foreach($content_group->contents()->get() as $content): ?>
<?php echo e($first_id?"":","); ?><span><?php echo e($content->title); ?></span>
<?php $first_id=false; ?>
<?php endforeach; ?>
<?php endforeach; ?>
<?php endif; ?>
<?php endforeach; ?>
