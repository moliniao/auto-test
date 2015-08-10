
<form method="POST" action="/autotest/produtLineCreate">
    {!! csrf_field() !!}

    <div>
        描述
        <input type="text" name="description">
    </div>

    <div>
        产品线名称
        <input type="text" name="product_name">
    </div>
    <div>
        邮箱
        <input type="text" name="email">
    </div>

    <div>
        <button type="submit">确定</button>
    </div>
</form>