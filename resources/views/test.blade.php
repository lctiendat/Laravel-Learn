<h1>Test</h1>
<a href="test/1/category/100">Test 1</a>
<a href="test/2/category/101">Test 1</a>
<a href="test/3/category/102">Test 1</a>
<a href="test/4/category/103">Test 1</a>
<a href="test/5/category/104">Test 1</a>

<ul>
    <li>
        <a href="{{ route('test') }}">Test</a>
        <a href="{{ route('test') }}">Test</a>
        <a href="{{ route('test') }}">Test</a>
        <a href="{{ route('test') }}">Test</a>
        <a href="{{ route('test') }}">Test</a>

    </li>
</ul>
<ul>
    <li>
        <a href="{{ route('test.show',['id'=>'ok']) }}">Test show</a>
        <a href="{{ route('test.show',['id'=>2]) }}">Test show</a>
        <a href="{{ route('test.show',['id'=>3]) }}">Test show</a>
        <a href="{{ route('test.show',['id'=>4]) }}">Test show</a>
        <a href="{{ route('test.show',['id'=>5]) }}">Test show</a>

    </li>
</ul>
<ul>
    <li>
        <a href="{{ route('backend.user') }}">Backend User</a>
        <a href="{{ route('backend.product') }}">Backend Product</a>
        <a href="{{ route('backend.news') }}">Backend News</a>
    </li>
</ul>