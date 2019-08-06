<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css" text="css/text">
    <link rel="stylesheet" href="main.css" text="css/text">
    <link rel="stylesheet" href="form.css" text="css/text">

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
            <h2>必要事項を入力してください</h2>
                <form action="Product01.php" method="post">
                <!--役職の選択肢-->
                <?php 
                    $position_array = array(
                        "" =>'選択してください',
                        "代表取締役" => '代表取締役',
                        '部長' => '部長',
                        '課長' => '課長',
                    )
                    ?>
                    <div class="information-group">
                    <h3>自分の会社の情報</h3>
                        <div class="form-gourp">
                            <label for="myself_company_name">自分の会社の名前:<span class="help-block"></span>
                            <input type="text" name="myself_company_name">
                            </label>
                        </div>
                        <div class="form-gourp">
                            <label for="myself_company_address">自分の会社の住所：<span class="help-block"></span>
                            <input type="text" name="myself_company_address">
                            </label>
                        </div>
                        <div class="form-gourp">
                            <label for="myself_name">自分の代表者の名前:<span class="help-block"></span>
                            <input type="text" name="myself_name">
                            </label>
                        </div>
                        <div class="form-gourp">
                            <label for="myself_positon">自分の代表者の役職:<span class="help-block"></span>
                            <select name="myself_position">
                                <?php 
                                foreach($position_array as $a=>$b){
                                 echo "<option value='{$a}'>{$b}</option>";
                                } ?>
                                </select>
                            </label>
                        </div>
                    
                    </div>
                    <div class="information-group">
                    <h3>相手の会社の情報</h3>
                        <div class="form-gourp">
                            <label for="yourself_company_name">相手の会社の名前:<span class="help-block"></span>
                            <input type="text" name="yourself_company_name">
                            </label>
                        </div>
                        <div class="form-gourp">
                            <label for="yourself_company_address">相手の会社の住所：<span class="help-block"></span>
                            <input type="text" name="yourself_company_address">
                            </label>
                        </div>
                        <div class="form-gourp">
                            <label for="yourself_name">相手の会社の代表者の名前:<span class="help-block"></span>
                            <input type="text" name="yourself_name">
                            </label>
                        </div>
                        <div class="form-gourp">
                            <label for="yourself_positon">相手の代表者の役職:<span class="help-block"></span>
                            <select name="yourself_position">
                                <?php 
                                foreach($position_array as $a=>$b){
                                 echo "<option value='{$a}'>{$b}</option>";
                                } ?>
                                </select>
                            </label>
                        </div>
                    
                    </div>
                    <div class="information-group">
                        <h3>契約情報</h3>
                        <div class="form-group">
                            <label for="contract_date">契約日：<span class="help-block"></span>
                            <input type="date" name="contract_date">
                            </label>
                        </div>
                        <div class="form-group">
                                <label for="detail">守秘義務の対象内容：</label>
                                <input type="text" name="detail">
                        </div>
                    </div>
                    <input type="submit" value="契約書を作る">
                </form>
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
<script src="form.js"></script>
</html> 

