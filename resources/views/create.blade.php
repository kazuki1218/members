<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <!-- タイトル -->
        <title>新規登録画面</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="会員登録画面" />
        <!-- <ファビコン> -->
        <!-- <link rel="icon type="image" href="images/> -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSS -->
        <!-- <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css"> -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <!-- main(本文) -->

        <h2 class="text-center mt-5 mb-2">会員登録</h2>
        <div class="w-50 m-auto align-items-center d-block">
            <div class="text-right mb-2">
                <a class="text-decoration-none " href="{{ route('index') }}">{{
                    __("一覧へ戻る")
                }}</a>
            </div>

            <!-- フォーム先を指定 -->
            <form class="" method="POST" action="{{ route('store') }}">
                @csrf

                <div class="text-center mb-3">
                    <input
                        class="w-50"
                        type="text"
                        name="name"
                        id="form-name"
                        placeholder="名前"
                        required
                    />
                </div>

                <div class="text-center mb-3">
                    <input
                        class="w-50"
                        type="tel"
                        name="phone"
                        id="form-tel"
                        placeholder="電話番号"
                        required
                    />
                </div>

                <div class="text-center mb-3">
                    <input
                        class="w-50"
                        type="email"
                        name="email"
                        id="form-email"
                        placeholder="メールアドレス"
                        required
                    />
                </div>
                <div class="text-center m-3">
                    <input class="w-50" type="submit" value="登録">  
                </div>
            </form>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
