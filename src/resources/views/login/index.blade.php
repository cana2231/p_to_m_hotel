
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="{{ asset('js/register/index.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="css/register/index.css">
<form name="login_form" action="/login" method="post">
  @csrf
  <div class="login_form_top">
    <h1>ログイン</h1>
    <p>メールアドレス及びパスワードをご入力の上
      <br>「login」ボタンをクリックしてください。</p>
  </div>
  <div class="login_form_btm">
    <input type="email"    maxlength="50" class="user_e-mail" name="user_e-mail" placeholder="メールアドレス">
    <input type="password" maxlength="50" class="password" name="password" placeholder="パスワード">
    <div class="info">パスワードをお忘れの方はこちら</div>
    <input type="submit"   name="botton" value="login">
  </div>
</form>
