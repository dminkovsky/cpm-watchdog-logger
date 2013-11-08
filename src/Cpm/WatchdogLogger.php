<?php
namespace Cpm;

class WatchdogLogger implements Logger {
  public function log($level, $message) {
    watchdog($level, $message);
  }
}
