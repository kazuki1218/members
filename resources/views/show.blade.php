<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <!-- タイトル -->
        <title>詳細画面</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="会員詳細画面" />
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
        <h2 class="text-center mt-5 mb-2">会員編集 会員ID:{{$member->id}}</h2>
        <a href="{{ route('index') }}">{{ __("一覧に戻る") }}</a>
        <a href="{{ route('edit',['id'=>$member->id]) }}">{{ __("編集") }}</a>
        <div>
            名前
            {{$member->name}}
        </div>

        <div>
            電話番号
            {{$member->phone}}
        </div>

        <div>
            メールアドレス
            {{$member->email}}
        </div>
        
        <form method="POST" action="{{route('destroy',['id'=>$member->id])}}">
            @csrf
            <button type="submit">削除</button>
        </form>
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
