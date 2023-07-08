<!DOCTYPE html>
<html lang="ja-jp">
    <head>
        <title>Note Deck Web</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/core/resource/home.css?ver=<?=time();?>">
    </head>
    <body>
        <div class="wrap">
            <div class="left">
                <ul>
                    <li class="logo" id="instance-logo">Logo</li>
                </ul>
            </div>
            <div class="center">
                <div class="bar border-bottom">
                    <select id="timeline-mode" class="form-control">
                        <optgroup label="通常">
                            <option value="timeline" selected>ホーム</option>
                            <option value="local-timeline">ローカル</option>
                            <option value="hybrid-timeline">ソーシャル(ハイブリッド | ホーム + ローカル)</option>
                            <option value="global-timeline">グローバル</option>
                        </optgroup>
                        <optgroup label="個人" id="timeline-personal-settings"></optgroup>
                    </select>
                </div>
                <div class="timeline" id="timeline">
                    タイムライン
                </div>
            </div>
            <div class="right">
                <form id="search" method="post">
                    <input type="text" name="q" class="form-control" placeholder="検索"><button type="submit" class="btn btn-outline-success">Search</button>
                </form>
                <hr>
                <div id="widget">
                    ここはウィジェットを表示します。
                </div>
                <hr>
                <div class="about">
                    (C)2016-2023 tkng.
                </div>
            </div>
        </div>
    </body>
</html>