<?php

require_once __DIR__ . '/vendor/autoload.php';

?>
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
      <td align = "center">1</td>
    </tr>
    <tr>
      <td align = "center">isWindowsSubsystemForLinux()</td>
      <td align = "center">2</td>
    </tr>
    <tr>
      <td align = "center">isWindows()</td>
      <td align = "center">3</td>
    </tr>
    <tr>
      <td align = "center">isWindowsSeven()</td>
      <td align = "center">4</td>
    </tr>
    <tr>
      <td align = "center">isWindowsEightOrHigher()</td>
      <td align = "center">5</td>
    </tr>
    <tr>
      <td align = "center">isMacOS()</td>
      <td align = "center">6</td>
    </tr>
  </table>
</body>

<?php var_dump(\JoliCode\PhpOsHelper\GetResult::ArrayReturn()); ?>