<?php

namespace JoliCode\PhpOsHelper;

class Table {

  public static function render($methods_result_array) { ?>
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
        <?php foreach ($methods_result_array as $key => $value) : ?>
          <tr>
            <td align = "center"><?php echo $key;?></td>
            <td align = "center"><?php if($value): echo "Yes"; else: echo "No"; endif;?></td>
          </tr>
        <?php endforeach;?>
       </table>
    </body>
 <?php }
}
?>

