<?php

declare(strict_types=1);

/**
 * Compare the dates and return the "biggest" time value which is also the latest date. 
 *
 * @param array $a
 * @param array $b
 * @return integer
 */
    function compareDates(array $a, array $b) : int {
      return strtotime($b['publishedDate']) - strtotime($a['publishedDate']);
  }

/**
 * Searching for an id and connect it to the right author.
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

