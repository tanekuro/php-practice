<?php
// Q1 tic-tac問題
// 1から100までの数字について以下の条件に沿って表示してください。

// 条件
// 1から100までの数字について処理を実行する。
// 4の倍数のときは tic を出力。
// 5の倍数のときは tac を出力。
// 4の倍数かつ5の倍数のときは tic-tac を出力。
// 上記以外の数のときはそのままその数字を出力する。
// 出力結果が以下の通り縦に並ぶようにしてください。

for ($i = 1; $i <= 100; $i++){
  if ($i % 4 === 0 && $i % 5 === 0){
    echo "tic-tac\n";
  }else{
    if ($i % 5 === 0){
      echo "tac\n";
    }else{
      if ($i % 4 === 0){
        echo "tic\n";
      }else{
        echo $i . "\n";
      }
    }
  }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
echo $personalInfos[1]['name']."の電話番号は".$personalInfos[1]['tel']."です。";

// foreachを用いて下記のように表示してください。(数字が1から始まっていることに注意しましょう)
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
foreach ($personalInfos as $x => $y) {
    echo $x + 1 . '番目の'$personalInfos['name'] . 'のメールアドレスは' . $personalInfos['mail']' . で、電話番号は' . $personalInfos['tel'] . "です。\n";
}
// $ageList = [25, 30, 18];
// 上記の$ageListを使用して、$personalinfosに age というKeyに対して$ageListのそれぞれの年齢をValueとして追加してください。その際は、foreachを使用してください。
// 追加ができたらvar_dumpを使用して配列の中身を確認してください。下記のようになっていたらOKです。
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
$ageList = [25, 30, 18];

foreach ($personalInfos as $x => $y) {
    
    $age = $ageList[$x];

    $personalInfos[$x]['age'] = $age;
}
var_dump($personalInfos);

// Q3 オブジェクト-1 
// studentIdプロパティは正の整数を設定してください。
// nameプロパティは任意の値を設定してください。
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo "学籍番号" . $this->studentId . "番の生徒は" . $this->studentName . "です。";
    }
}
$No = new Student("120","良秀");

$No->attend();

// Q4 オブジェクト-2
// attendメソッドの処理を書き換えて、条件に沿った内容を表示してください。

// 条件
// attendメソッド以外は書き換えないでください。
// 出力例
// 山田はPHPの授業に参加しました。学籍番号：120

  class Student
  {
      public $studentId;
      public $studentName;

      public function __construct($id, $name)
      {
          $this->studentId = $id;
          $this->studentName = $name;
      }

      public function attend($PHP)
      {
          echo $this->studentName . "は" . $PHP . "の授業に参加しました。学籍番号：" . $this->studentId;
      }
  }

  $yamada = new Student(120, '山田');
  $yamada->attend('PHP');

// Q5 定義済みクラス
// 上記では自作のクラスを使用しましたが、関数と同様PHP側ですでに用意されているクラスがあります。
// 今回はDateTimeという定義済みのクラスを使用して、以下の問題通りの処理を書きましょう。

// 問題1
// 1ヶ月前の日付を表すDateTimeインスタンスを作成し、出力結果と同じフォーマットで出力しましょう。

// 出力結果(2021年3月2日の場合)
// 2021-03-02
$now = new DateTime();
$data->modify('-1 month');

echo $now->format('Y-m-d');


// 問題2
// 今日の日付と1992年4月25日との日付の差を計算して、総日数を出力しましょう。

// 出力結果(2021年3月2日の場合)
// あの日から10538日経過しました。
$now = new DateTime();

$date1 = new DateTime('2026-11-9');
$date2 = new DateTime('1992-4-25');
$diff = $date1->diff($date2);

echo "あの日から" . $diff->days . "日経過しました。";
?>