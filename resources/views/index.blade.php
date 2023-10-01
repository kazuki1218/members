<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <!-- タイトル -->
        <title>会員一覧画面</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="会員一覧画面" />
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
        <div class="w-50 p-3 m-auto">
                <a class="float-right my-2 text-decoration-none " href="{{ route('create') }}">{{
                    ">>登録"
                }}</a>
            <table class="table table-bordered mr-auto">
                <tr class="text-center">
                    <th>名前</th>
                    <th>電話番号</th>
                    <th>メールアドレス</th>
                    <th></th>
                </tr>
                @foreach($members as $member)
                <tr>
                    <td>{{$member->name}}</td>
                    <td>{{$member->phone}}</td>
                    <td>{{$member->email}}</td>
                    <td class="text-center">
                        <a class="text-decoration-none " href="{{ route('edit',['id'=>$member->id])}}">{{
                            __(">>編集")
                        }}</a>
                    </td>
                </tr>
                @endforeach
            </table>
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
