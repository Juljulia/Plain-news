<?php

declare(strict_types=1);


// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.


/**
 * Converts the publishedDate to time and compare the different publishedDates. 
 *
 * @param array $a
 * @param array $b
 * @return integer
 */
    function compareDates(array $a, array $b) : int {
      return strtotime($a['publishedDate']) - strtotime($b['publishedDate']);
  }

/**
 * 
 *
 * @param integer $searchId
 * @param array $authors
 * @return string
 */
  function getName(int $searchId, array $authors): string {
    foreach ($authors as $author) {
            $id = $author ['id'];
                if ($id == $searchId) {
                    return $author ['name'];
                }
    }
};

