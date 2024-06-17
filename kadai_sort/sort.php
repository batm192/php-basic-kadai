<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $nums = [15, 4, 18, 23, 10,];
    function sort_2way($order, $array,)
    {
      if ($order == 'TRUE') {
        sort($array, SORT_NUMERIC);
        foreach ($array as $val) {
          echo $val . '</br>';
        }
      } elseif ($order == 'FALSE') {
        rsort($array, SORT_NUMERIC);
        foreach ($array as $val) {
          echo $val . '</br>';
        }
      } else {
        echo '正しい値が設定されていません。TRUEかFALSEを設定してください。';
      }
    }
    ?>
  </p>
  <p>
    <?php
    echo '昇順にソートします。</br>';
    $sort_order = 'TRUE';
    sort_2way($sort_order, $nums);
    ?>
  </p>
  <p>
    <?php
    echo '降順にソートします。</br>';
    $sort_order = 'FALSE';
    sort_2way($sort_order, $nums);
    ?>
  </p>

</body>

</html>