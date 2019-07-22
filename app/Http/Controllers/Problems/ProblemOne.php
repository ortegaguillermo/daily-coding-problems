<?php

namespace App\Http\Controllers\Problems;

use App\Http\Controllers\Controller;

class ProblemOne extends Controller {

  public function __invoke() {

    $input = [ 1, 2, 3, 4, 5 ];

    $res = ProblemOne::get( $input );

    return response()->json( $res );
  }

  public static function get( $input ) {

    /**
     * This problem was asked by Uber.
     *
     * Given an array of integers, return a new array such that each element at index i of the new array is the product
     * of all the numbers in the original array except the one at i.
     *
     * For example, if our input was [1, 2, 3, 4, 5], the expected output would be [120, 60, 40, 30, 24].
     * If our input was [3, 2, 1], the expected output would be [2, 3, 6].
     */

    $output = [];

    foreach ( $input as $key => $item ) {

      $targets = array_filter( $input, function ( $innerKey ) use ( $key) {

        return $innerKey !== $key;
      } ,ARRAY_FILTER_USE_KEY);

      array_push( $output, array_product( $targets ) );

    }

    return $output;
  }
}
