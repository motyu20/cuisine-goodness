<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>グルメ日記</title>
        <link rel="stylesheet" href="middle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
        <meta name="viewport" contnts="width-device-width, initial-scale-1.0">
        <link rel="stylesheet" href="final.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="header-left">
                    <img class="logo" src="logo (3).png">
                </div>
                <a href="#" class="menu-icon">
                    <span class="fa fa-bars menu-icon"></span>
                </a>
                <div  class="header-right">
                    <div class="login" id="login-show">ログイン</div>
                </div>
            </div>
        </header>
        <div class="signup-modal-wrapper" id="signup-modal">
            <div class="modal">
                <div class="close-modal">
                  <i class="fa fa-2x fa-times"></i>
                </div>
                <div id="signup-form">
                  <h2>Emailで新規登録</h2>
                  <form action="#">
                    <input class="form-control" type="text" placeholder="メールアドレス">
                    <input class="form-control" type="password" placeholder="パスワード">
                    <div id="submit-btn">新規登録</div>
                  </form>
                </div>
              </div>

        </div>
        <div class="login-modal-wrapper" id="login-modal">
            <div class="modal">
                
                <div class="close-modal">
                  <i class="fa fa-2x fa-times"></i>
                </div>
                <div id="login-form">
                  <h2>Emailログイン</h2>
                  <form action="#">
                    <input class="form-control" type="text" placeholder="メールアドレス">
                    <input class="form-control" type="password" placeholder="パスワード">
                    <div id="submit-btn">ログイン</div>
                  </form>
                </div>
              </div>
        <div class="main">
            <h3>メッセージいただきありがとうございます。</h3>
            <div class="display-contact">
                <div class="form-title">入力内容</div>
                <div class="form-item">お名前</div>
                <?php echo $_POST['name']; ?>
                <div class="form-item">メールアドレス</div>
                <?php echo $_POST['email']; ?>
                <div class="form-item">メッセージ内容</div>
                <?php echo $_POST['message']; ?>
            </div>
        </div>
        <footer>
            <div class="container">
                <img src="logo (3).png">
                <p>Let's eat together.Be happy!</p>
            </div>
        </footer>
        <script src  = "script.js"></script>
    </body>
</html>


