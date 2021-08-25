<?php include_once "../base.php";

$table = $_POST['table'];
$db = new DB($table);
//$texts=$_POST['text'];
$ids = $_POST['id'];

foreach ($ids as $key => $id) {

  if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
    $db->del($id);
  } else {

    $row = $db->find($id);
    //$row['text']=$texts[$key];

    switch ($table) {
      case 'bg';
        $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
        $row['text'] = $_POST['text'][$key];
        break;
      case 'intro';
        $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
        $row['text'] = $_POST['text'][$key];
        break;
      case 'photo';
        $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
        break;
      case 'skills';
        $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
        $row['name'] = $_POST['name'][$key];
        $row['level'] = $_POST['level'][$key];
        $row['width'] = $_POST['width'][$key];
        $row['position'] = $_POST['position'][$key];
        $row['color'] = $_POST['color'][$key];
        break;
      case 'experience';
        $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
        $row['name'] = $_POST['name'][$key];
        $row['company'] = $_POST['company'][$key];
        $row['time'] = $_POST['time'][$key];
        $row['content'] = $_POST['content'][$key];
        break;
      case 'portfolio';
        $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
        $row['type'] = $_POST['type'][$key];
        $row['subject'] = $_POST['subject'][$key];
        $row['text'] = $_POST['text'][$key];
        $row['href1'] = $_POST['href1'][$key];
        $row['href2'] = $_POST['href2'][$key];
        break;
      case 'typewriter';
        $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
        $row['first'] = $_POST['first'][$key];
        $row['second'] = $_POST['second'][$key];
        $row['third'] = $_POST['third'][$key];
        break;
      case 'admin':
        $row['acc'] = $_POST['acc'][$key];
        $row['pw'] = $_POST['pw'][$key];
        break;
      case 'icon';
        $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
        $row['name'] = $_POST['name'][$key];
        $row['class'] = $_POST['class'][$key];
        $row['href'] = $_POST['href'][$key];
        break;
    }
    //print_r($row);
    $db->save($row);
  }
}

to("../backend.php?do=" . $table);
