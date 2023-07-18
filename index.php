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
            <div class="left border-end">
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
                <div class="tl-item">
                        <div class="icon"></div>
                        <div class="right">
                            <div class="name-space">
                                <div><b>篤脩</b></div>
                                <div>@802KsaRATgSUa@m.tkngh.jp</div>
                                <div>1900/01/01・00:00:02</div>
                            </div>
                            <div class="note-space">
                                二つ目の投稿です。↓の投稿には下線は尽きませんが、それ以外には下線がつき、ノートの区切りを表します。
                            </div>
                        </div>
                    </div>
                    <div class="tl-item">
                        <div class="icon"></div>
                        <div class="right">
                            <div class="name-space">
                                <div><b>篤脩</b></div>
                                <div>@802KsaRATgSUa@m.tkngh.jp</div>
                                <div>1900/01/01・00:00:01</div>
                            </div>
                            <div class="note-space">
                                これは投稿のテストです。実際にActivityPubから取ったものではありません。HTMLに直書きをしてテストをしています。MFM対応は未定です。
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="right border-start">
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
        <div class="modal" tabindex="-1" id="modal" data-bs-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalBody">
                        <p>Body Area</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="modalDisaccept">キャンセル</button>
                        <button type="button" class="btn btn-primary" id="modalAccept">Positive</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="/core/resource/script/main.js?<?=time();?>"></script>
        <script>
            //モーダル
            const modal = document.getElementById('modal');
            const modalCtl = new bootstrap.Modal(modal)
        </script>
    </body>
</html>