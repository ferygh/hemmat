@foreach($items as $item)
    {{State::find($item->state_id)->title}} : {{$item->prcnt}}
@endforeach