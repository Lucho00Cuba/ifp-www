<?php
/* Utils */

function showCode($line)
{
    echo '<br><p>';
    echo '<code>';
    echo '-- view code executed <br>';
    echo $line . '<br>';
    echo '</code>';
    echo '</p>';
}

function showLine($alert, $line)
{
    echo '
    <br>
    <div class="alert alert-' . $alert . '" role="alert">
      ' . $line . '
    </div>
    ';
}