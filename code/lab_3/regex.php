<?php
$regex = "/a..b/";
if (preg_match($regex, "ahb acb aeb aeeb adcb axeb") >= 1)
{
    echo "All done =)";
}
else echo "Error"; 