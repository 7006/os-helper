<?php

namespace JoliCode\PhpOsHelper;

class Table {

  public static function render($systemDetails) {
    self::renderStyle();
    self::renderTable($systemDetails);
  }

  private static function renderStyle() { ?>
    <style>
      table {
        border: 1px solid;
        color: black;
        margin: 20px;
      }
      th {
        border: 1px solid;
        color: black;
      }
      td {
        border: 1px solid;
        color: black;
      }
    </style>
  <?php }
    
  private static function renderTable($systemDetails) { ?>
    <table>
      <tr>
        <th>OS</th>
        <th>Result</th>
      </tr>
      <?php foreach ($systemDetails as $key => $value) : ?>
        <tr>
          <td align = "center"><?php echo $key ?></td>
          <td align = "center"><?php echo $value ? "Yes" : "No" ?></td>
        </tr>
      <?php endforeach;?>
     </table>
 <?php }
}
?>

