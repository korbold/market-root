@foreach ($items as $key => $item)
<tr>
    <td>{{ $key + 1 }}</td>
    <td>
        <a class="media align-items-center"
            href="{{ route('admin.item.view', [$item['id']]) }}">
            <div class="media-body">
                <h5 class="text-hover-primary mb-0">{{ $item['name'] }}</h5>
            </div>
        </a>
    </td>
    <td>
        {{ $item->orders->sum('quantity') }}
    </td>
    <td>
        {{ $item->orders->sum('price') }}
    </td>
    <td>
        {{ $item->orders->sum('discount_on_item') }}
    </td>
    <td>
        <div class="btn--container justify-content-center">
            <a href="{{ route('admin.item.view', [$item['id']]) }}"
                class="action-btn btn--primary btn-outline-primary">
                <i class="tio-invisible"></i>
            </a>
        </div>
    </td>
</tr>
@endforeach
