<?php

namespace JoliCode\PhpOsHelper;

class DrawTable {

  public static function DrawTable($arr) { ?>
    <head>
      <style>
        th {
          border: 1px solid;
          color = black;
        }
        td {
          border: 1px solid;
          color = black;
        }
      </style>
    </head>
    <body>
      <table style="border:1px solid black;">
        <tr>
          <th>Static Method</th>
          <th>Result</th>
        </tr>
        <tr>
          <td align = "center">isUnix()</td>
          <td align = "center"><?php var_dump($arr["isUnix()"]);?></td>
        </tr>
        <tr>
          <td align = "center">isWindowsSubsystemForLinux()</td>
          <td align = "center"><?php var_dump($arr["isWindowsSubsystemForLinux()"]);?></td>
        </tr>
        <tr>
          <td align = "center">isWindows()</td>
          <td align = "center"><?php var_dump($arr["isWindows()"]);?></td>
        </tr>
        <tr>
          <td align = "center">isWindowsSeven()</td>
          <td align = "center"><?php var_dump($arr["isWindowsSeven()"]);?></td>
        </tr>
        <tr>
          <td align = "center">isWindowsEightOrHigher()</td>
          <td align = "center"><?php var_dump($arr["isWindowsEightOrHigher()"]);?></td>
        </tr>
        <tr>
          <td align = "center">isMacOS()</td>
          <td align = "center"><?php var_dump($arr["isMacOS()"]);?></td>
        </tr>
      </table>
     </body>
 <?php }
}
?>

