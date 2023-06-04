
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="{{ asset('js/register/index.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="css/register/index.css">
<form name="login_form" action="/regist" method="post">
  @csrf
  <div class="login_form_top">
    <h1>アカウント作成</h1>
    <p>必要事項をご入力の上、「次へ進む」ボタンをクリックしてください。</p>
  </div>
  <div class="login_form_btm">
    <input type="text"     maxlength="50" class="user_name"   name="user_name"   placeholder="氏名">
    <input type="email"    maxlength="50" class="user_e-mail" name="user_e-mail" placeholder="メールアドレス">
    <input type="text"     maxlength="50" class="user_number" name="user_number" placeholder="電話番号">
    <div class="info">電話番号はハイフン無しでご入力ください。</div>
    <input type="text"     maxlength="50" class="address"  name="address" placeholder="住所">
    <input type="password" maxlength="50" class="password" name="password" placeholder="パスワード">
    <input type="password" maxlength="50" class="password" name="re_password" placeholder="パスワード確認">
    <input type="submit"   name="botton" value="次へ進む">
  </div>
</form>
