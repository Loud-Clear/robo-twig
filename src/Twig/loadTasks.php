<?php

namespace Avanade\Robo\Task\Twig;

use Avanade\Robo\Task\Twig;

trait loadTasks {

  /**
   * Load Twig
   *
   * @return Twig
   */
  protected function taskTwig() {
    return $this->task(Twig::class);
  }
}