<?php

require_once __DIR__ . '/vendor/autoload.php';

?>
<body>
  <table style="border:1px solid black;">
    <tr>
      <th style="border:1px solid black">Static Method</th>
      <th style="border:1px solid black">Result</th>
    </tr>
    <tr>
      <td align = "center" style="border:1px solid black;">isUnix()</td>
      <td align = "center" style="border:1px solid black;">1</td>
    </tr>
    <tr>
      <td align = "center" style="border:1px solid black;">isWindowsSubsystemForLinux()</td>
      <td align = "center" style="border:1px solid black;">2</td>
    </tr>
    <tr>
      <td align = "center" style="border:1px solid black;">isWindows()</td>
      <td align = "center" style="border:1px solid black;">3</td>
    </tr>
    <tr>
      <td align = "center" style="border:1px solid black;">isWindowsSeven()</td>
      <td align = "center" style="border:1px solid black;">4</td>
    </tr>
    <tr>
      <td align = "center" style="border:1px solid black;">isWindowsEightOrHigher()</td>
      <td align = "center" style="border:1px solid black;">5</td>
    </tr>
    <tr>
      <td align = "center" style="border:1px solid black;">isMacOS()</td>
      <td align = "center" style="border:1px solid black;">6</td>
    </tr>
  </table>
</body>

<?php \JoliCode\PhpOsHelper\OsHelper::isWork(); ?>