Has content groups: <br>
@foreach ( ContentInfo::all()  as $content_info)
@if (ProductService1::where('id',$product_id)->first()->linked_content_groups($content_info->id))
@foreach ( ProductService1::where('id',$product_id)->first()->linked_content_groups($content_info->id)->get() as $content_group)
<p>{{$content_group->description}} </p>
@endforeach
@endif
@endforeach
