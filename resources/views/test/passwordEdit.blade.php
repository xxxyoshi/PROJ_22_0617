<form action="{{ route('test.passwordUpdate') }}" method="POST">
@csrf
<h3>新しいパスワード</h3>
<h4>(必須)</h4>
<input type="password" name="newPassword" required>
@if($errors->has('newPassword'))
    <p>{{ $errors->first('newPassword') }}</p>
@endif

<h3>パスワード再入力</h3>
<h4>(必須)</h4>
<input type="password" name="newPassword_confirmation" required>
<input type="submit" value="更新">
</form>
