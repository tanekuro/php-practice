<?php
// Q1 変数と文字列
$name = "種延";

echo '私の名前は「' . $name . '」です。';
// Q2 四則演算
$num = (5 * 4);
echo $num . "\n";
echo $num / 2;
// Q3 日付操作
echo date("現在時刻はY年m月d日 H時i分s秒です。");

// $now = new DateTimeImmutable('now', new DateTimeZone('Asia/Tokyo'));
// $time = $now->format('H時i分s秒');
// $message = "現在時刻は、2019年05月23日 {$time} です。."\n";

// Q4 条件分岐-1 if文
// 下記の条件のもとで文字列を出し分ける処理をif文を使って作成してください。

// $deviceに任意の文字列を格納してください。
// $deviceの値が「windows」だったら、「使用OSは、windowsです。」と表示。
// $deviceの値が「mac」だったら、「使用OSは、macです。」と表示。
// $deviceの値が上記2つ以外だったら、「どちらでもありません。」と表示。
// 但し、ifとelseのみを使用して処理を作成してください。（elseif は使わないでください）

$device = 'windows';
 if ($device => 'windows'){
  $message = "使用OSは、windowsです。";
 }else{
  if ($device => 'mac'){
    $message = "使用OSは、macです。";
  }else{
    $message = "どちらでもありません。";
  }
 }
echo $message;

// Q5 条件分岐-2 三項演算子
// $ageという変数に任意の数値を格納してください。そして下記の条件のもとで文字列を出し分ける処理を三項演算子を使って作成してください。
// $ageが18未満だったら、「未成年です。」と表示。
// $ageが18以上だったら、「成人です。」と表示。

$age = 19;
$message = ($age > 18 ) ? '成人です。' : '子供です。';

echo $message;
// Q6 配列　関東の都・県を格納した配列を作成し、3番目と4番目の値を以下のように表示してください。
$ken = ['東京','神奈川','栃木','千葉','埼玉','群馬','茨城'];
$message = $ken[2] . "県と" . $ken[3] . "県は関東地方の都道府県です。";

echo $message;
// Q7 連想配列-1
// 関東の都・県をキー、それぞれの県庁所在地をバリューとする連想配列を作成し、
// バリューを全て表示してください。但し、下記のように縦に並んで表示されるようにしてください。
// 尚、東京都の県庁所在地は下記の資料に基づいて「新宿区」とします。
$kentyou =  ['東京' => '新宿区', '神奈川' => '横浜市', '栃木' => '宇都宮市', '千葉' => '千葉市', '埼玉' => 'さいたま市', '群馬' => '前橋市', '茨城' => '水戸市', '岡山' => '岡山市', '広島' => '広島市'];
foreach ($kentyou as $value){
  echo $value . "\n";
} 


// Q8 連想配列-2
// 上記で作成した連想配列とif文を使用して下記の文章のみを出力してください。(県名と県庁所在地は連想配列のキー, バリューを使用して表示してください。)
// 埼玉県の県庁所在地は、さいたま市です。

$message = $ken[4];
if (isset($kentyou[$message])){
  echo $message . "県の県庁所在地は、" . $kentyou[$message] . "です。";
}

// Q9 連想配列-3
// 上記で作成した連想配列に、関東以外の都道府県を2つ追加し下記の条件のもと表示してください。(都道府県名をキー, 県庁所在地をバリューとしてください)

// 条件
// 関東地方以外の都道府県については、「〜は関東地方ではありません。」と表示。
// 関東地方の都道府県については、「〜の県庁所在地は、〜です。」と表示。
// if文については、elseifは使用せずifとelseのみで処理を記述。
// 下記のように1文ずつ改行して縦に表示されるように処理を記述。
// $kanntou[] = "岡山";
// $kanntou[] = "広島";バラバラに作ったため今回は使えない
// 失敗
// $message = $kanntou,$kanntou1,$kanntou2,$kanntou3,$kanntou4,$kanntou5,$kanntou6,$kanntou7,$kanntou8,;
// if ($message === "$kanntou"){
//   $message = ""$kanntou"の県庁所在地は、"$kenntyou[$kanntou]"です。."\n";
// }else{
//   if ($message === "$kanntou1"){
//     $message = ""$kanntou1"の県庁所在地は、"$kenntyou[$kanntou1]"です。."\n";
//     }else{
//       if ($message === "$kanntou2"){
//         $message = ""$kanntou2"の県庁所在地は、"$kenntyou[$kanntou2]"です。."\n";
//         }else{
//           if ($message === "$kanntou3"){
//             $message = ""$kanntou3"の県庁所在地は、"$kenntyou[$kanntou3]"です。."\n";
//             }else{
//               if ($message === "$kanntou4"){
//                 $message = ""$kanntou4"の県庁所在地は、"$kenntyou[$kanntou4]"です。."\n";
//                 }else{
//                   if ($message === "$kanntou5"){
//                     $message = ""$kanntou5"の県庁所在地は、"$kenntyou[$kanntou5]"です。."\n";
//                     }else{
//                       if ($message === "$kanntou6"){
//                         $message = ""$kanntou6"の県庁所在地は、"$kenntyou[$kanntou6]"です。."\n";
//                         }else{
//                           if ($message === "$kanntou7"){
//                           $message = ""$kanntou7"は関東地方ではありません"."\n";
//                            }else{
//                             if ($message === "$kanntou8"){
//                               $message = ""$kanntou8"は関東地方ではありません。"."\n";
//                             }
//                         }
//                     }
//                 }
//             }
//         } 
//     }
// }


foreach($kentyou as $kenn => $syozaiti){
  if (in_array($kenn, $ken, true)) {
    echo "「{$kenn}」の県庁所在地は、「{$syozaiti}」です。\n";
} else {
      echo "「{$kenn}」は関東地方ではありません。\n";
  }
}

// Q10 関数-1
// 引数に名前を受け取って、「〜さん、こんにちは。」という文字列を返す hello という名前の関数を作成してください。そしてその hello関数を実行して下記のように文章を2つ表示してください。

// 条件
// hello関数の引数に名前を渡して実行し、その返り値をechoしてください。
// 引数に渡す名前は任意で構いません。
// 引数として渡す値を変えて2回実行することで2つの文章を表示しましょう。
function hello($name){
  return $name . 'さん、こんにちは。' . "\n";
}

echo hello("良秀");
echo hello("サトシ");

// Q11 関数-2
// 消費税込み価格を計算する関数を作成します。以下の条件のもと、下記のように税込価格を表示しましょう。

// 条件
// 税抜き価格を引数に受け取って税込価格に変換して返す関数を、calcTaxInPrice という名前で定義してください。
// 消費税は 10% として計算してください。
// 税抜き価格を変数$priceとして定義し、それを関数に渡して実行しましょう。
// 関数を実行した返り値を、変数$taxInPriceに代入してください。
// 最終的に、下記のような文章を表示してください。
1000円の商品の税込価格は1100円です。

function calcTaxInPrice($price = 1000)
{
  $taxInPrice = floor($price * 1.1);

  return "" . $price . "円の商品の税込み価格は" . $taxInPrice . "円です。";
}
$message = calcTaxInPrice();
echo $message;
// Q12 関数とif文
// 問題
// 数字を奇数か偶数か判別する関数を作成します。条件のもと処理を記述しましょう。

// 条件
// 関数名は、distinguishNum という名前で定義してください。
// 引数として受け取った数字が奇数だったら、「〜は奇数です。」という文字列を返り値として返してください。
// 引数として受け取った数字が偶数だったら、「〜は偶数です。」という文字列を返り値として返してください。
// 奇数と偶数それぞれを渡して実行して、結果を表示してください。
function distinguishNum($suuzi)
{
  if ($suuzi % 2 === 0){
    return $suuz . "は偶数です。\n";
  }else{
    return $suuzi . "は奇数です。\n";
  }
}
$message = distinguishNum(10); 
echo $message;

// Q13 関数とswitch文
// 問題
// switch文を使用して、成績の評価を出し分ける関数を作成します。下記の条件に沿って処理を記述してください。

// 条件
// 関数名は、evaluateGrade という名前で定義してください。
// swtich文を使って引数で受け取った成績(文字列)に応じて処理を分けてください。
// 成績が、A か B だったら「合格です。」という文字列を返り値として返す。
// 成績が、C だったら「合格ですが追加課題があります。」という文字列を返り値として返す。
// 成績が、D だったら「不合格です。」という文字列を返り値として返す。
// その他の文字列だった場合は、「判定不明です。講師に問い合わせてください。」という文字列を返り値として返す。
// evaluateGrade関数に任意の引数を渡して実行して、結果を2種類表示してください。
function gouhi($evaluateGrade) {
switch ($evaluateGrade){
  case "A":
  case "B":
    return "合格です。";
    break;

  case "C":
    return "合格ですが追加課題があります。";
    break;

  case "D":
    return "不合格です。";
    break;

    default:
    return "判定不明です。講師に問い合わせてください。";
    break;

  }
}
echo gouhi("A") . "\n";

$price = 1000の意味を言語化してください。
$priceという引数の初期値として1000を与えた。

floor()を使用した意図を教えてください。
消費税の計算の仕方を調べているときに見つけた関数で、消費税の計算をするときにはこれを使うと良いと書いてあったため使用した。
小数点以下を切り捨ててくれるものなので今回に関してはあまり意味をなさなかった







?>