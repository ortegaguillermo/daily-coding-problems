<?php

use App\Http\Controllers\Problems\ProblemOne;
use Tests\TestCase;

class ProblemOneTest extends TestCase {

  public function testGet() {

    $this->assertTrue( ProblemOne::get( [ 1, 2, 3, 4, 5 ] ) === [ 120, 60, 40, 30, 24 ] );
    $this->assertTrue( ProblemOne::get( [ 3, 2, 1 ] ) === [ 2, 3, 6 ] );
    $this->assertTrue( ProblemOne::get( [ 3, 2, 3 ] ) === [ 6, 9, 6 ] );
  }
}
