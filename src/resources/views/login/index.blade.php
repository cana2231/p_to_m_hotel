<body id="particles-js"></body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="{{ asset('js/login/index.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<link rel="stylesheet" type="text/css" href="css/login/index.css">
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
    <h1>P To M's Hotel</h1><span>powered <i class='fa fa-code'></i> by <a href='https://github.com/cana2231'>CanaT</a></span>
  </div>
  <div class="rerun"><a href="/">Topへ戻る</a></div>
  <div class="container">
    <div class="card"></div>
    <div class="card">
      <form>
        <div class="input-container">
          <input type="#{type}" id="#{label}" required="required"/>
          <label for="#{label}">メールアドレス</label>
          <div class="bar"></div>
        </div>
        <div class="input-container">
          <input type="#{type}" id="#{label}" required="required"/>
          <label for="#{label}">パスワード</label>
          <div class="bar"></div>
        </div>
        <div class="button-container">
          <button><span>ログイン</span></button>
        </div>
        <div class="footer"><a href="#">パスワードをお忘れの方</a></div>
      </form>
    </div>
    <div class="card alt">
      <div class="toggle"><i class="bi bi-pencil-fill"></i></div>
      <h1 class="title">会員登録
        <div class="close"></div>
      </h1>
      <form>
        <div class="input-container">
            <input type="#{type}" id="#{label}" required="required"/>
            <label for="#{label}">お名前</label>
            <div class="bar"></div>
        </div>
        <div class="input-container">
          <input type="#{type}" id="#{label}" required="required"/>
          <label for="#{label}">メールアドレス</label>
          <div class="bar"></div>
        </div>
        <div class="input-container">
          <input type="password" id="#{label}" required="required"/>
          <label for="#{label}">パスワード</label>
          <div class="bar"></div>
        </div>
        <div class="input-container">
          <input type="password" id="#{label}" required="required"/>
          <label for="#{label}">パスワード再確認</label>
          <div class="bar"></div>
        </div>
        <div class="button-container">
          <button><span>登録</span></button>
        </div>
      </form>
    </div>
  </div>
