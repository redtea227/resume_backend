<?php
session_start();
date_default_timezone_set("Asia/Taipei");
//設定後台的抬頭文字



$ts = [
  "bg" => "背景管理",
  "intro" => "簡介管理",
  'photo' => "大頭照管理",
  'skills' => "技能管理",
  'experience' => "經歷管理",
  "portfolio" => "作品集管理",
  "typewriter" => "打字機管理",
  "icon" => "icon管理",
  "admin" => "管理者帳號管理"
];
$as = [
  "bg" => "新增背景圖片",
  "intro" => "新增簡介",
  'photo' => "新增大頭照",
  'skills' => "新增技能",
  'experience' => "新增經歷",
  "portfolio" => "新增作品集",
  "typewriter" => "新增打字機",
  "icon" => "新增icon",
  "admin" => "新增管理者帳號"
];
class DB
{
  private $dsn = "mysql:host=localhost;charset=utf8;dbname=resume";
  private $root = 'root';
  private $password = '12345';
  private $table;
  private $pdo;

  public function __construct($table)
  {
    $this->table = $table;
    $this->pdo = new PDO($this->dsn, $this->root, $this->password);
  }

  public function all(...$arg)
  {
    $sql = "select * from $this->table ";

    if (isset($arg[0])) {
      if (is_array($arg[0])) {

        foreach ($arg[0] as $key => $value) {
          $tmp[] = sprintf("`%s`='%s'", $key, $value);
        }
        $sql = $sql . " where " . implode(" && ", $tmp);
      } else {
        $sql = $sql . $arg[0];
      }

      if (isset($arg[1])) {
        $sql = $sql . $arg[1];
      }
    }

    return $this->pdo->query($sql)->fetchAll();
  }

  public function count(...$arg)
  {
    $sql = "select count(*) from $this->table ";

    if (isset($arg[0])) {
      if (is_array($arg[0])) {
        foreach ($arg[0] as $key => $value) {
          $tmp[] = sprintf("`%s`='%s'", $key, $value);
        }
        $sql = $sql . " where " . implode(" && ", $tmp);
      } else {

        $sql = $sql . $arg[0];
      }

      if (isset($arg[1])) {
        $sql = $sql . $arg[1];
      }
    }

    //echo $sql;
    return $this->pdo->query($sql)->fetchColumn();
  }
  public function find($id)
  {
    $sql = "select * from $this->table ";


    if (is_array($id)) {
      foreach ($id as $key => $value) {
        $tmp[] = sprintf("`%s`='%s'", $key, $value);
      }
      $sql = $sql . " where " . implode(" && ", $tmp);
    } else {

      $sql = $sql . " where `id`='$id'";
    }

    //echo $sql;
    return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
  }
  public function del($id)
  {
    $sql = "delete from $this->table ";
    if (is_array($id)) {
      foreach ($id as $key => $value) {
        $tmp[] = sprintf("`%s`='%s'", $key, $value);
      }
      $sql = $sql . " where " . implode(" && ", $tmp);
    } else {

      $sql = $sql . " where `id`='$id'";
    }

    //echo $sql;
    return $this->pdo->exec($sql);
  }


  public function save($array)
  {
    if (isset($array['id'])) {
      //update
      foreach ($array as $key => $value) {
        if ($key != 'id') {
          $tmp[] = sprintf("`%s`='%s'", $key, $value);
        }
      }

      $sql = "update $this->table set " . implode(',', $tmp) . " where `id`='{$array['id']}'";
    } else {
      //insert
      // `name`,`addr`,`tel`
      $sql = "insert into $this->table 
                    (`" . implode("`,`", array_keys($array)) . "`) values
                    ('" . implode("','", $array) . "')";
    }

    //echo $sql;
    return $this->pdo->exec($sql);
  }
}

function to($url)
{
  header("location:" . $url);
}

$Bg = new DB('bg');
$Intro = new DB('intro');
$Photo = new DB('photo');
$Skills = new DB('skills');
$Experience = new DB('experience');
$Portfolio = new DB("portfolio");
$Typewriter = new DB("typewriter");
$Total = new DB('total');
$Icon = new DB('icon');
$Admin = new DB("admin");
