<?php
$employee=array(
  'umesh'=>array(
    'id'=>1,
    'age'=>20,
    'salary'=>100000

  ),
  'ronaldo'=>array(
    'id'=>2,
    'age'=>33,
    'salary'=>200000

  ),
  'libis'=>array(
    'id'=>3,
    'age'=>20,
    'salary'=>50000

  ),
  'vaijaan'=>array(
    'id'=>4,
    'age'=>22,
    'salary'=>150000

  ),
  'milan'=>array(
    'id'=>5,

    'age'=>21,
    'salary'=>90000
  )
);
?>
<table border=1>
  <tr>
  <th>name</th>
  <th>id</th>
  <th>age</th>
  <th>salary</th>
</tr>
<?php
foreach($employee as $key=> $value)
{
  echo "<tr>
        <td>";
    echo $key;
    echo "</td>";
  foreach($value as $key1=> $items)
  {
    echo "<td>";
    echo $items."</td>";
  }
  echo "</tr>";
}
?>
</table>
