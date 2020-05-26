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

        </div>
        <div class="top-wrapper">
            <div class="container">
                <h1>Let's eat together</h1>
                <h1>Be happy!</h1>
                <p>美味しい物は身体と心を豊かにする。</p>
                <p>幸せな時間を一緒に過ごそう。</p>
                <div class="btn-wrapper">
                    <div class="btn signup signup-show">新規登録はこちら</div>
                    <p>or</p>
                    <a href="https://www.facebook.com/profile.php?id=100030010028486" class="btn facebook"><span class="fab fa-facebook"></span>Facebook</a>
                    <a href="#" class="btn twitter"><span class="fab fa-twitter"></span>Twitter</a>
                    <a href="https://www.instagram.com/motyu20/" class="btn instagram"><span class="fab fa-instagram"></span>Instagram</a>
                </div>
            </div>
        </div>
        <div class="lesson-wrapper">
            <div class="container">
                <div class="heading">
                    <h2>What kind of foods do you like?</h2>
                </div>
                <div class="lessons">
                    <div class="lesson lesson-hover">
                        <div class="lesson-icon">
                            <img src="https://prog-8.com/images/html/advanced/html.png">
                            <p>和食</p>
                        </div>
                        <p class="text-contents">ex)定食、丼物、お蕎麦、うどん etc</p>
                    </div>
                    <div class="lesson lesson-hover">
                        <div class="lesson-icon">
                            <img src="https://prog-8.com/images/html/advanced/jQuery.png">
                            <p>イタリアン</p>
                        </div>
                        <p class="text-contents">ex)パスタ、ピザ、ラザニア etc</p>
                    </div>
                    <div class="lesson lesson-hover">
                        <div class="lesson-icon">
                            <img src="https://prog-8.com/images/html/advanced/ruby.png">
                            <p>中華</p>
                        </div>
                        <p class="text-contents">ex)ラーメン、チャーハン、餃子 etc</p>
                    </div>
                    <div class="lesson lesson-hover">
                        <div class="lesson-icon">
                            <img src="https://prog-8.com/images/html/advanced/php.png">
                            <p>その他</p>
                        </div>
                        <p class="text-contents">ex)フレンチ、アジアン料理 etc</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq-wrapper">
            <div class="container">
                <div class="heading">
                    <h2>FAQ</h2>
                </div>
                <div class="faq">
                    <ul id="faq-list">
                        <li class="faq-list-item">
                          <h3 class="question">会員特典はあるんですか？</h3>
                          <span>+</span>
                          <div class="answer">
                            <p>定期的に行うプレゼント企画に応募できます。お食事会も開催予定です。</p>
                          </div>
                        </li>
                        <li class="faq-list-item">
                          <h3 class="question">会費はかかりますか？</h3>
                          <span>+</span>
                          <div class="answer">
                            <p>会員登録は無料です。しかしお食事会の際はその都度会費を頂きます。</p>
                          </div>
                        </li>
                        <li class="faq-list-item">
                          <h3 class="question">おすすめのお店を紹介することはできますか？</h3>
                          <span>+</span>
                          <div class="answer">
                            <p>はい。お問い合わせフォームやSNSでコメントを受け付けています。</p>
                          </div>
                        </li>
                      </ul>
                </div>
            </div>
        </div>
        <div class="message-wrapper">
            <div class="container">
                <div class="heading">
                    <h2>あなたも一緒に旅をしませんか</h2>
                    <h3>Let's enjoy eating!!</h3>
                </div>
                <span class="btn message signup-show">会員登録する</span>
            </div>
        </div>
        <div id="contact" class="contact-section gray-section">
            <div class="contact-section-inner">
              <div class="container">
                <?php include 'sent.php'; ?>
                <div class="section-title">
                  <h3>お問い合わせ</h3>
                </div>
                <div class="contact-form">
                  <h4>メッセージを送る</h4>
                  <form method="post" action="sent.php">
                    <form>
                      <div class="error-message"></div>
                      <input type="text" name="name" placeholder="お名前" class="contact-name">
                      <div class="error-message"></div>
                      <input type="text" name="email" placeholder="メールアドレス" class="contact-email">
                      <div class="error-message"></div>
                      <textarea name="message" placeholder="メッセージ内容"></textarea>
                      <button type="submit" class="btn btn-contact">送信</button>
                    </form>
                  </form>
                </div>　
                <div class="contact-about">
                  <h4>About Me</h4>
                  <p>都内の大学三年生。食べることが大好きです。
                  </p>
                  <h4>Address</h4>
                  <p>
                    <i class="fa fa-map-marker"></i>東京都渋谷区神宮前6-19-20 第15荒井ビル9階
                  </p>
                  <p>
                    <i class="fa fa-phone"></i>Phone: 03-6455-0950
                  </p>
                </div>
              </div>
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
