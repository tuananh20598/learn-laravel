<a href="/user">User</a> |
<a href="/product">Product</a> |
<a href="/news">News</a> |
<a href="/service">Service</a> |

<hr />

<ul>
    <li><a href="/news/1/category/100">Bài viết số 1</a></li>
    <li><a href="/news/2/category/160">Bài viết số 2</a></li>
    <li><a href="/news/3/category/120">Bài viết số 3</a></li>
    <li><a href="/news/4/category/130">Bài viết số 4</a></li>
    <li><a href="/news/5/category/150">Bài viết số 5</a></li>
</ul>

<hr/>

<h2>Route Name trong Laravel: route('name')</h2>
<ul>
    <li><a href="{{ route('user') }}">User</a></li>
    <li><a href="{{ route('user') }}">User</a></li>
    <li><a href="{{ route('user') }}">User</a></li>
    <li><a href="{{ route('user') }}">User</a></li>
    <li><a href="{{ route('user') }}">User</a></li>
    <li><a href="{{ route('user') }}">User</a></li>
</ul>

<hr/>
<h2>Route Name có tham số truyền vào: route('name')</h2>
<ul>
    <li><a href="{{ route('user.show', ['id' => 1]) }}">User detail</a></li>
    <li><a href="{{ route('user.show', ['id' => 2]) }}">User detail</a></li>
    <li><a href="{{ route('user.show', ['id' => 3]) }}">User detail</a></li>
</ul>

<hr/>
<ul>
    <li><a href="{{ route('user.show.branch', ['id' => 1, 'branchId' => 6]) }}">User by branch</a></li>
    <li><a href="{{ route('user.show.branch', ['id' => 2, 'branchId' => 7]) }}">User by branch</a></li>
    <li><a href="{{ route('user.show.branch', ['id' => 3, 'branchId' => 8]) }}">User by branch</a></li>
</ul>

<hr/>
<h2>Route group trong laravel</h2>
<ul>
    <li><a href="{{ route('backend.user') }}">User management</a></li>
    <li><a href="{{ route('backend.product') }}">Product management</a></li>
    <li><a href="{{ route('backend.news') }}">News management</a></li>
</ul>

<ul>
    <li><a href="{{ route('backend.user') }}">User management</a></li>
    <li><a href="{{ route('backend.product') }}">Product management</a></li>
    <li><a href="{{ route('backend.news') }}">News management</a></li>
</ul>