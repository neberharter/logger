<?php

namespace Neberharter\Logger;

class EchoLogger implements ILogger
{
    public function LogEntry(string $line): void
    {
       echo $line . "\n";
    }
}


