<h1>
    @if (isset($title))
        {{ $title }}
    @endif
</h1>
<div class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('blog.admin.index.index') }}">
            <i class="fas fa-gauge mr-1"></i>{{ $parent }}
        </a>
    </li>
    @if (isset($order))
        <li class="breadcrumb-item">
            <a href="{{ route('blog.admin.orders.index') }}">
                <i></i>{{ $order }}
            </a>
        </li>
    @endif
    @if (isset($catogory))
        <li class="breadcrumb-item">
            <a href="{{ route('blog.admin.categories.index') }}">
                <i></i>{{ $catogory }}
            </a>
        </li>
    @endif
    @if (isset($user))
        <li class="breadcrumb-item">
            <a href="{{ route('blog.admin.users.index') }}">
                <i></i>{{ $user }}
            </a>
        </li>
    @endif
    @if (isset($product))
        <li class="breadcrumb-item">
            <a href="{{ route('blog.admin.products.index') }}">
                <i></i>{{ $product }}
            </a>
        </li>
    @endif
    @if (isset($group_filter))
        <li class="breadcrumb-item">
            <a href="{{ route('blog.admin.group-filter.index') }}">
                <i></i>{{ $group_filter }}
            </a>
        </li>
    @endif
    @if (isset($attrs_filter))
        <li class="breadcrumb-item">
            <a href="{{ route('blog.admin.attributes-filter.index') }}">
                <i></i>{{ $attrs_filter }}
            </a>
        </li>
    @endif
    @if (isset($corrency))
        <li class="breadcrumb-item">
            <a href="{{ route('blog.admin.currency.index') }}">
                <i></i>{{ $corrency }}
            </a>
        </li>
    @endif
    <li><i class="breadcrumb-item active"></i>{{ $active }}</li>
</div>
