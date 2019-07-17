Has content groups: <br>
@foreach ( ContentInfo::all()  as $content_info)
@if (ProductService1::where('id',$product_id)->first()->linked_content_groups($content_info->id))
@foreach ( ProductService1::where('id',$product_id)->first()->linked_content_groups($content_info->id)->get() as $content_group)
<p>{{$content_group->description}} </p>
<p>it has</p>
<?php $first_id=true; ?>
@foreach ($content_group->contents()->get() as $content)
{{$first_id?"":","}}<span>{{$content->title}}</span>
<?php $first_id=false; ?>
@endforeach
@endforeach
@endif
@endforeach
