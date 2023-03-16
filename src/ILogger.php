<?php

namespace Neberharter\Logger;

interface ILogger
{

    public function LogEntry(string $line) : void;

}


