<h1>トップページ</h1>
<!-- @if(count($errors) > 0)
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
@endif -->
<form action="/" method="post">
  @csrf
  <p>氏名</p>
  <input type="text" name="name">
  <p>メールアドレス</p>
  <input type="text" name="email">
  <input type="submit" value="送信する">
</form>