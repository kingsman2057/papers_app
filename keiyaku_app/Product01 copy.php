<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css" text="css/text">
    <link rel="stylesheet" href="main.css" text="css/text">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <title>契約作成アプリ</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="index.html"><img src="img/logo (1).jpg" alt="サービス名"></a>
            </div>
    </header>
    <div class="wrapper">
    <sidemenu class="sidemenu">
        <ul>
            <li class="sidemenu-item"><a href="#">機能１</a></li>
            <li class="sidemenu-item"><a href="#">機能２</a></li>
            <li class="sidemenu-item"><a href="#">機能３</a></li>
            <li class="sidemenu-item"><a href="#">機能４</a></li>
            <li class="sidemenu-item"><a href="#">機能５</a></li>
        </ul>
    </sidemenu>
    <main class="main">
        <div class="contents">
        
        <!-- Create the editor container -->
            <div id="editor">
                <h2>秘密保持契約書</h2>

                <div class="sentence-wrapper">
                <p><?php echo $_POST['myself_company_name'];?>株式会社（以下「甲」という。）と
                <?php echo $_POST['yourself_company_name'];?>株式会社（以下「乙」という。）とは、
                <?php echo $_POST['detail'];?>について
                検討するにあたり（以下「本取引」という。）、甲又は乙が相手方に開示する秘密情報の取扱いについて、
                以下のとおりの秘密保持契約（以下「本契約」という。）を締結する。<br>
                秘密情報は、---1.機密情報の定義---<p class="radio_add"></p>であるとする。
                </p>

                </div>

                <div class="sentence-wrapper"><h3>第１条（秘密情報）</h3>
                <p>
                本契約における「秘密情報」とは、甲又は乙が相手方に開示し、かつ開示の際に秘密である旨を明示した技術上又
                は営業上の情報、本契約の存在及び内容その他一切の情報をいう。<br>
                ただし、開示を受けた当事者が書面によってその根拠を立証できる場合に限り、
                以下の情報は秘密情報の対象外とするものとする。<br>
                (1)	開示を受けたときに既に保有していた情報<br>
                (2)	開示を受けた後、秘密保持義務を負うことなく第三者から正当に入手した情報<br>
                (3)	開示を受けた後、相手方から開示を受けた情報に関係なく独自に取得し、又は創出した情報<br>
                (4)	開示を受けたときに既に公知であった情報<br>
                (5)	開示を受けた後、自己の責めに帰し得ない事由により公知となった情報<br>
                </p>
                </div>

                <div class="sentence-wrapper">
                    <p>本契約締結の証として、本書を二通作成し、両者署名又は記名捺印の上、各自一通を保有する。 </p>
                </div>
                <div class="sentence-footer">
                    <p><?php echo $_POST['contract_date'];?><br>
                    甲<br>  <?php echo $_POST['myself_company_address'];?>
                    <?php echo $_POST['myself_company_name'];?>株式会社<br>
                    <?php echo $_POST['myself_position'];?>  <?php echo $_POST['myself_name'];?><br>
                    乙　<?php echo $_POST['yourself_company_address'];?><br>
                    <?php echo $_POST['yourself_company_name'];?>株式会社<br>
                    <?php echo $_POST['yourself_position'];?>  <?php echo $_POST['yourself_name'];?>
                    </p>
                </div>


            </div>
        <!-- Include the Quill library -->
            <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

        <!-- Initialize Quill editor -->
            <script>
            var quill = new Quill('#editor', {
                theme: 'snow'
            });
            </script>
        <div class="add_question">
        <h3>文書を自動で修正します</h3>
        <p>「秘密情報の定義について」選択肢から一つ選んでください</p>
        <form action="post" action="Product2.php">
            <div class="question">
            <label><input type="radio" name="what_secret" value="一切の情報" class="question_item">一切の情報</label>
            <label><input type="radio" name="what_secret" value="書面で秘密情報である旨を通知した情報" class="question_item">書面で秘密情報である旨を通知した情報</label>
            <label><input type="radio" name="what_secret" value="書面、もしくは口頭で秘密情報である旨を通知した情報" class="question_item">書面、もしくは口頭で秘密情報である旨を通知した情報</label>
            </div>
            <p class="try1"></p>
        </form>
        </div>

        </div>
    </main>
    </div>
    <footer class="footer">
        <ul class="horizontal-list">
            <li class="horizontal-item"><a href="#">ABOUT ME</a></li>
            <li class="horizontal-item"><a href="#">SITE MAP</a></li>
            <li class="horizontal-item"><a href="#">SNS</a></li>
            <li class="horizontal-item"><a href="#">CONTACT</a></li>
        </ul>
    </footer>

    
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="main.js"></script>
<script src="change_bunsetu.js"></script>

</html> 

