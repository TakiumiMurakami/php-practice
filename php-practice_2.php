<?php
// Q1 tic-tac問題
for($number = 1; $number <= 100; $number++) {
  if ($number % 4== 0 && $number % 5 == 0){
    echo "tic-tac"."\n" ;
  } 

  elseif ($number % 4== 0){
    echo "tic"."\n" ;
  }
  elseif ($number % 5 == 0){
    echo "tac"."\n" ;
  }
  else  {
    echo $number."\n";
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
echo var_dump($personalInfos );

//問題１

echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。';

//問題２

foreach ($personalInfos as $index => $date )
echo ($index+1) . '番目の' .$date['name']. 'さんのメールアドレスは' . $date['mail'] . 'で、電話番号は' . $date['tel'] .'です。'."\n";


//問題３
$ageList = [25, 30, 18];
foreach ($personalInfos as $key => $value) {
  $personalInfos[$key]['age'] = $ageList[$key];
}

// Q3 オブジェクト-1

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
        echo '授業に出席しました。';
    }
}
$student = new Student('120','山田');
var_dump($student);
echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . 'です。';


// Q4 オブジェクト-2
class Student2
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($language)
    {
        echo $this->studentName.'は'.$language.'の授業に参加しました。学籍番号：'.$this->studentId;
    }
}
$yamada = new Student2(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
$month = new DateTime();
$ago = $month->modify('-1 month')->format('Y-m-d');
echo $ago;


$origin = new DateTime();
$progress = new DateTime('1992-4-25');
$interval = $origin->diff($progress);
echo $interval->format('あの日から%a日経過しました。');
?>
