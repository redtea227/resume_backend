<?php
include_once "../base.php";

$db=new DB($_POST['table']);

if(isset($_FILES['img']['tmp_name'])){

    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];

}

    switch($_POST['table']){
        case "admin":
          $data['acc']=$_POST['acc'];
          $data['pw']=$_POST['pw'];
        break;
        case "skills":
          $data['name']=$_POST['name'];
          $data['level']=$_POST['level'];
          $data['width']=$_POST['width'];
          $data['position']=$_POST['position'];
          $data['color']=$_POST['color'];
          $data['sh']=0;
        break;
        case "experience":
          $data['name']=$_POST['name'];
          $data['company']=$_POST['company'];
          $data['time']=$_POST['time'];
          $data['content']=$_POST['content'];
          $data['sh']=0;
        break;
        case "portfolio":
          $data['type']=$_POST['type'];
          $data['subject']=$_POST['subject'];
          $data['text']=$_POST['text'];
          $data['href1']=$_POST['href1'];
          $data['href2']=$_POST['href2'];
          $data['sh']=0;
        break;
        case "typewriter":
          $data['first']=$_POST['first'];
          $data['second']=$_POST['second'];
          $data['third']=$_POST['third'];
          $data['sh']=0;
        break;
        case "icon":
          $data['name']=$_POST['name'];
          $data['class']=$_POST['class'];
          $data['href']=$_POST['href'];
          $data['sh']=0;
        break;
        case "intro":
          $data['text']=$_POST['text'];
          $data['sh']=0;
        break;
        case "bg":
          $data['text']=$_POST['text'];
          $data['sh']=0;
        break;
        default:
          $data['sh']=0;
    }

$db->save($data);

to("../backend.php?do=".$_POST['table']);
