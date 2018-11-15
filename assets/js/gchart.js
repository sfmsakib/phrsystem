<?php 
$wt=$_SESSION['wt_measurement'];
//print_r($bp); 
//$results=array();
//while ($res = $bp) {
 //   $results[] = $res;
//}
//print_r($bp);
$count = count($wt);
$ca = array();
for ($i=0; $i <$count ; $i++) { 
    $ca[] = array((int)$i);
}
//print_r(count($bp));
    $i=0;
$LineChart_data = array();
foreach ($wt as $result) {
    $LineChart_data[]=array($result['dom'],  (int)$result['systolic'], (int)$result['diastolic']);
    $i++;
}
  //print_r($LineChart_data);

$LineChart_bp = json_encode($LineChart_data);
  //print_r($LineChart_bp);
?>



google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawCurveTypes);

function drawCurveTypes() {
      var data = new google.visualization.DataTable(<?php echo $LineChart_bp; ?>);
      data.addColumn('string', 'X');
      data.addColumn('number', 'Systolic');
      data.addColumn('number', 'Diastolic');
      //<?php// print_r($LineChart_data); ?>
        data.addRows(<?php echo $LineChart_bp; ?>);
     /* data.addRows([]);*/

      var options = {
        vAxis: {
          title: 'mmHG'
        },
        hAxis: {
          title: 'Date'
        },
        series: {
          1: {curveType: 'function'}
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_wt'));
      chart.draw(data, options);
    }